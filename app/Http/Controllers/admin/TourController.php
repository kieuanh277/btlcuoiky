<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Site;
use App\Models\Tour;
use App\Models\TourDetail;
use App\Models\TourImage;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::paginate(5);
        return view('admin.tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $sites = Site::get(['id','siteName']);
        return view('admin.tour.create',compact('sites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = ['required' => 'Không được để trống!',
            'image' => 'Phải là hình ảnh!'
        ];
        $request->validate([
            'tourName' => 'required',
            'sites' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],$message);

        $image = $request->file('image')->store(
            'tours/images', 'public'
        );
        $tour = Tour::create($request->except('image') + ['image' => $image]);
        $tour->site()->sync($request->sites);
        Toastr::success('Thêm tour thành công!' );
        return redirect()->route('tours.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        $tourdetails = $tour->tourdetail()->paginate(5);

        return view('admin.tourdetail.index', compact('tourdetails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        $sites = Site::get(['id','siteName']);
        return view('admin.tour.edit',compact('tour','sites'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        $message = ['required' => 'Không được để trống!',
            'image' => 'Phải là hình ảnh!'
        ];
        $request->validate([
            'tourName' => 'required',
            'sites' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ],$message);

        if ($request->hasFile('image')) {
            File::delete('storage/' . $tour->image);
            $image = $request->file('image')->store('tours/images', 'public');
            $tour->update($request->except('image') + ['image' => $image]);
            $tour->site()->sync($request->sites);
        } else {
            $tour->update($request->except('image'));
            $tour->site()->sync($request->sites);

        }
        Toastr::success('Sửa tour thành công!' );
        return redirect()->route('tours.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
            // Kiểm tra xem tour có đang được đặt trong bất kỳ đơn đặt nào không
        if ($tour->orders()->count() > 0) {  // Giả sử mối quan hệ 'orders' là đúng
            Toastr::error('Không thể xóa tour này vì đã có đơn đặt!');
            return redirect()->back();
        }

        // Kiểm tra nếu có chi tiết tour liên quan
        if($tour->tourDetail->count() > 0){
            Toastr::error('Không thể xóa tour này vì đang có chi tiết tour liên quan!' );
            return redirect()->back();
        }
        File::delete('storage/'. $tour->image);
        $tour->site()->detach();
        $tour->delete();
        Toastr::success('Xóa tour thành công!' );
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $tours = Tour::where('tourName', 'like', "%$query%")
            ->paginate(5);

        return view('admin.tour.index', compact('tours'));

    }
}
