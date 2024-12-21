<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;
    const created_at = null;
    const updated_at = null;
    protected $fillable = ['orderDate', 'totalAmount', 'participantNumber', 'name', 'phone', 'email', 'paymentStatus', 'tour_id', 'user_id'];

    public function tour(){
        return $this->belongsTo(Tour::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    // Liên kết Order với Hotel thông qua Tour và Site
    public function hotel(){
        return $this->hasOneThrough(
            Hotel::class, // Model đích
            Tour::class,  // Model trung gian (Tour)
            'id', // Khóa ngoại trong bảng Tour (tour_id trong bảng Order)
            'site_id', // Khóa ngoại trong bảng Hotel (site_id trong bảng Hotel)
            'tour_id', // Khóa chính trong bảng Order (tour_id trong bảng Order)
            'id' // Khóa chính trong bảng Hotel (id trong bảng Hotel)
        );
    }
}
