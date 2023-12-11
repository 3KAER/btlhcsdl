<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class TutorReviewRate extends Model
{ 
    public $timestamps = false;

    use HasFactory;
    protected $table = 'tutor_review_rate';
    protected $fillable = [
        'tutor_id',
        'rate',
        'decription',
        
       
    ];
    public function tutor(): BelongsTo 
    {
        return $this->belongsTo(Tutor::class, 'tutor_id')->onDelete('cascade');;
    } 
}
