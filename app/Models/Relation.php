<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Relation
 *
 * @property $id
 * @property $user_id
 * @property $period_id
 * @property $document_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Document $document
 * @property Period $period
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Relation extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'period_id' => 'required',
		'document_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','period_id','document_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function document()
    {
        return $this->hasOne('App\Models\Document', 'id', 'document_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function period()
    {
        return $this->hasOne('App\Models\Period', 'id', 'period_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
