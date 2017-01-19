<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class NewsCategoryModels extends Model
{
    /**
     * Table database
     */
    protected $table = 'newscategories';
    public $timestamps = false;
    protected  $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category'
    ];
    /**
     * One to one relationships
     */
    public function news()
    {
        return $this->belongsTo('App\Models\NewsModels');
    }



}