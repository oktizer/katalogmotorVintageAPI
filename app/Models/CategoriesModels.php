<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Model item ads
 */
class CategoriesModels extends Model
{
    /**
     * Table database
     */
    protected $table = 'categories';
    public $timestamps = false;
    protected  $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description'
    ];
    /**
     * One to one relationships
     */
    public function category()
    {
        return $this->hasMany('App\Models\MotorCycleModels','id');
    }
}