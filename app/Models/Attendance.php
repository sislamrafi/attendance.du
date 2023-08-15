<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Card;
use App\Models\Course;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'card_id',
        'course_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function card(){
        return $this->belongsTo(Card::class, 'card_id');
    }

    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }
}
