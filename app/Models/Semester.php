<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Semester
 *
 * @property $id
 * @property $name_semesters
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Semester extends Model
{
    
    static $rules = [
		'name_semesters' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_semesters'];



}
