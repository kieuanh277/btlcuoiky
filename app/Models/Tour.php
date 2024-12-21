<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tourDetail(){
        return $this->hasMany(TourDetail::class);
    }

    public function site(){
        return $this->belongsToMany(Site::class,'tour_site','tour_id','site_id');
    }
    // Thêm phương thức orders để thiết lập quan hệ
    public function orders()
    {
        return $this->hasMany(Order::class, 'tour_id', 'id');
    }

}
