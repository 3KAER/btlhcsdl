<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Tutor extends Model
{ 
    public $timestamps = false;

    use HasFactory;
    protected $table = 'Tutor';
    protected $fillable = [
        'name',
        'dateofbirth',
        'current_address',
        'age',
        'sex',
        'confirm_status',
       
    ];
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($tutor) {
            // Xóa các bản ghi liên quan trong bảng tutor_review_rate
            $tutor->tutorreviewrate()->delete();
        });
    }
    public function tutorreviewrate()
    {
        return $this->hasOne(TutorReviewRate::class,'tutor_id');
    } 
}
