<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'name',
        'code',
        'year',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'instructor_id');
    }
}
