<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Advisor
 *
 * @property $id
 * @property $user_id
 * @property $num_advisors
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Advisor extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'num_advisors' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','num_advisors'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
