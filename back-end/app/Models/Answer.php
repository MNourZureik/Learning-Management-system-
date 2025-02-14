<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'answer',
        'question_id',
        'correct_answer',
    ];
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_has__answers');
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
