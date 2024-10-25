<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wholesale extends Model
{
    use HasFactory;
    protected $fillable = [
        'wholesale_username','wholesale_password','wholesale_mobil','wholesale_email'
    ];
}
