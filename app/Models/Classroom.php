<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Classroom extends Model
{ 
    public $timestamps = false;

    use HasFactory;
    protected $table = 'Classroom';
    protected $fillable = [
        'subject',
        'num_of_class',
        'address',
        'salary',
        'duration_per_week',
        'requirement',
        'form_of_learning',
        'contact',
        'information',
        'id_tutor',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
