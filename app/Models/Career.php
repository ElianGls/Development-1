<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Career
 *
 * @property $id
 * @property $name_careers
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Career extends Model
{
    
    static $rules = [
		'name_careers' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_careers'];



}
