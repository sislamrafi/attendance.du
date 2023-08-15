<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'card_no',
        'valid_till',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
