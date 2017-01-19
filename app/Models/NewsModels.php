<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Mockery\CountValidator\Exception;

class NewsModels extends Model
{
    /**
     * Table database
     */
    protected $table = 'news';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_category','title','headline','content','author','created_at','updated_at'
    ];
    /**
     * One to one relationships
     */
    public function newscategories()
    {
        return $this->hasOne('App\Models\NewsCategoryModels','id_category');
    }

    public static function SelectAllData($column){
        try{
            return NewsModels::select($column)->get();
        }catch (Exception $ex){
            return response()->json($ex,500);
        }

    }

    public static function SelectDetailNewsData($key,$value,$column){
        try{
            return NewsModels::select($column)
                ->where($key,'=',$value)
                ->first();
        }catch (Exception $ex){
            return response()->json($ex,500);
        }
    }





}