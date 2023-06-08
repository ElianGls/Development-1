<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cuestion
 *
 * @property $id
 * @property $questions
 * @property $answers
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cuestion extends Model
{
    
    static $rules = [
		'questions' => 'required',
		'answers' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['questions','answers'];



}
