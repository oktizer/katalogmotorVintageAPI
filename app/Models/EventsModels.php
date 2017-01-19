<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

/**
 * Model item ads
 */
class EventsModels extends Model
{
    /**
     * Table database
     */
    protected $table = 'events';
    public $timestamps = false;
    protected  $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','location','description','lat','lng','time'
    ];

    public static function SearchEventRadius($Xlatitude,$Ylongitude){
        $arrayCollection = new Collection();
        try {

            $result = DB::select('SELECT id, name, location, ACOS( SIN(RADIANS(lat))* SIN(RADIANS(?)) + COS(RADIANS(lat))*
                                 COS(RADIANS(?))* COS(RADIANS(lng) - RADIANS(?)) )*6380 as distance FROM events
                                 WHERE ACOS( SIN(RADIANS(lat))* SIN(RADIANS(?)) + COS(RADIANS(lat))*
                                 COS(RADIANS(?))* COS(RADIANS(lng) - RADIANS(?)) )*6380<10 ORDER BY distance', [$Xlatitude, $Xlatitude, $Ylongitude, $Xlatitude, $Xlatitude, $Ylongitude]);
            foreach($result as $result){
                $arrayResult['id'] = $result->id;
                $arrayResult['name'] = $result->name;
                $arrayResult['location'] = $result->location;
                $arrayResult['distance'] = number_format((float)$result->distance, 1, '.', '');
                $arrayCollection->push($arrayResult);
            }
            return $arrayCollection;
        }catch (Exception $ex){
            return response()->json($ex,500);
        }
    }
    public static function SelectDetailEventData($key,$value,$column){
        try{
            return EventsModels::select($column)
                ->where($key,'=',$value)
                ->first();
        }catch (Exception $ex){
            return response()->json($ex,500);
        }
    }

}