<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountantEntry extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'type',
        'in_ex',
        'amount',
        'total',
        'user_id'
    ];
}
