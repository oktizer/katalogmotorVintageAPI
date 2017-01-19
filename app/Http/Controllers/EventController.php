<?php

namespace App\Http\Controllers;

use App\Models\EventsModels;
use Illuminate\Support\Facades\DB;
use Mockery\CountValidator\Exception;
use Illuminate\Database\Eloquent\Collection;

class EventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getAllEventRadius10km($Xlatitude,$Ylongitude){
        $res['success'] = true;
        $res['data'] = EventsModels::SearchEventRadius($Xlatitude,$Ylongitude);
        return response()->json($res);
    }

    public function getDetailEvents($id){
        $res['success'] = true;
        $res['data'] = EventsModels::SelectDetailEventData('id',$id,['name','location','description','time']);
        return response()->json($res);
    }

    public function sendEventToCalendar($id){
        $res['success'] = true;
        $res['data'] = EventsModels::SelectDetailEventData('id',$id,['name','location','description','lat','lng','time']);
        return response()->json($res);
    }
}
