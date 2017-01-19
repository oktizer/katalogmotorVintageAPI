<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Mockery\CountValidator\Exception;

/**
 * Model item ads
 */
class MotorCycleModels extends Model
{
    /**
     * Table database
     */
    protected $table = 'motorcycles';
    public $timestamps = false;
    protected  $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_category','name','year','engine','capacity','dimensions','weight',
        'feature1','feature2','feature3','feature4',
        'color1','color2','color3','color4',
        'imagecolor1', 'imagecolor2','imagecolor3','imagecolor4','imageLogo'
    ];
    protected $hidden = ['registration_no'];
    /**
     * One to one relationships
     */
    public function categories()
    {
        return $this->belongsTo('App\Models\CategoriesModels','id','id_category');
    }


    public function accesories()
    {
        return $this->hasMany('App\Models\AccesoriesModels','id');
    }

    public function serviceinfo()
    {
        return $this->hasMany('App\Models\ServiceInfoModels','id');
    }

    public static function SelectAllData($key,$value,$column){
        try{
            return MotorCycleModels::select($column)->where($key,'=',$value)->get();
        }catch (Exception $ex){
            return response()->json($ex,500);
        }

    }

    public static function SelectDetailMotorCycleData($key,$value,$column){
        try{
            return MotorCycleModels::select($column)
                ->where($key,'=',$value)
                ->first();
        }catch (Exception $ex){
            return response()->json($ex,500);
        }

    }
}