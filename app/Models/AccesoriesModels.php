<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Model item ads
 */
class AccesoriesModels extends Model
{
    /**
     * Table database
     */

    protected $table = 'accesories';
    public $timestamps = false;
    protected  $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_motorcyles','name','description'
    ];
    /**
     * One to one relationships
     */
    public function motorcycles()
    {
        return $this->belongsTo('App\Model\MotorCycleModels','id','id_motorcycles');
    }

    public static function SelectAllData($key,$value){
        try{
            return AccesoriesModels::where($key,'=',$value)->get();
        }catch (Exception $ex){
            return response()->json($ex,500);
        }

    }
}