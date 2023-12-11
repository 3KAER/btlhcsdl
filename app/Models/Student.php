<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Student extends Model
{ 
    public $timestamps = false;

    use HasFactory;
    protected $table = 'Student';
    protected $fillable = [
        'name',
        'date_of_birth',
        'address',
        'email',
        'phoneNumber',
        'grade_num',
        'academic_ability',
        'grade',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function getGrade()
    {
        $diem = $this->grade; // Giả sử grade là tên cột chứa điểm

        if ($diem >= 80) {
            return 'A';
        } elseif ($diem >= 70) {
            return 'B';
        } elseif ($diem >= 60) {
            return 'C';
        } else {
            return 'D';
        }
    }
}
