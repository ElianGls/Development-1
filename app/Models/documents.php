<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
    use HasFactory;

    static $rules = [
        'user_id' => 'required',
        'name' => 'required',
        'path' => 'required',
    ];

    protected $fillable = ['user_id', 'name', 'path'];
}
