<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Administrator
 *
 * @property $id
 * @property $user_id
 * @property $num_administrators
 * @property $id_departments
 * @property $created_at
 * @property $updated_at
 *
 * @property Department $department
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Administrator extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'num_administrators' => 'required',
		'id_departments' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','num_administrators','id_departments'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function department()
    {
        return $this->hasOne('App\Models\Department', 'id', 'id_departments');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
