<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Period
 *
 * @property $id
 * @property $name_periods
 * @property $horas
 * @property $id_subjects
 * @property $start_periods
 * @property $end_periods
 * @property $created_at
 * @property $updated_at
 *
 * @property Relation[] $relations
 * @property Subject $subject
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Period extends Model
{
    
    static $rules = [
		'name_periods' => 'required',
		'horas' => 'required',
		'id_subjects' => 'required',
		'start_periods' => 'required',
		'end_periods' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_periods','horas','id_subjects','start_periods','end_periods'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relations()
    {
        return $this->hasMany('App\Models\Relation', 'period_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subject()
    {
        return $this->hasOne('App\Models\Subject', 'id', 'id_subjects');
    }
    

}
