<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Schedule
 *
 * @property $id
 * @property $weekday
 * @property $start_time
 * @property $end_time
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Schedule extends Model
{
    
    static $rules = [
		'weekday' => 'required',
		'start_time' => 'required',
		'end_time' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['weekday','start_time','end_time'];



}
