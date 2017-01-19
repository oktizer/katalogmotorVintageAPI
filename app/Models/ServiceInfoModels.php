<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Mockery\CountValidator\Exception;

/**
 * Model item ads
 */
class ServiceInfoModels extends Model
{
    /**
     * Table database
     */
    protected $table = 'serviceinfos';
    public $timestamps = false;
    protected  $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_motorcycle','history','time_service'];
    /**
     * One to one relationships
     */
    public function MotorcycleService()
    {
        return $this->belongsTo('App\Models\MotorCycleModels','id','id_motorcycle');
    }

    public static function SelectAllData($key,$value){
        try{
            return ServiceInfoModels::where($key,'=',$value)->get();
        }catch (Exception $ex){
            return response()->json($ex,500);
        }

    }
}