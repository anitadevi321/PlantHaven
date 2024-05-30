<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'password',
        'phone',
        'otp',
    ];
}
