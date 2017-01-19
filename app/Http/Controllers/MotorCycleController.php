<?php

namespace App\Http\Controllers;

use App\Models\AccesoriesModels;
use App\Models\CategoriesModels;
use App\Models\MotorCycleModels;
use App\Models\ServiceInfoModels;
use Illuminate\Http\Request;

class MotorCycleController extends Controller
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

    public function viewAllCategory(Request $request){
        $category = new CategoriesModels;
        $res['success'] = true;
        $res['data'] = $category->all();

        if(empty($res['data'])){
            return response()->json($res,404);
        }
        return response()->json($res);
    }

    public function viewListMotorCycle($id){
        $res['success'] = true;
        $res['data'] = MotorCycleModels::SelectAllData('id_category',$id,['id','name','imagecolor1']);

        if(empty($res['data'])){
            return response()->json($res,404);
        }
        return response()->json($res);
    }

    //menampilkan detail sepeda motor
    //hexa warna dan image di load(kirim) terlebih dahulu semuanya ke front agar proses pemilihan(pergantian) warna motor lebih cepat tanpa menunggu image dikirim dari backend ketika mengganti warna
    public function viewDetailMotorCycle($id){
        $res['success'] = true;
        $res['data'] = MotorCycleModels::SelectDetailMotorCycleData('id',$id,
            ['id','name','color1','color2','color3','color4','imagecolor1','imagecolor2','imagecolor3','imagecolor4','imageLogo']);
        if(empty($res['data'])){
            return response()->json($res,404);
        }
        return response()->json($res);
    }

    public function viewSpecificationMotorCycle($id){
        $res['success'] = true;
        $res['data'] = MotorCycleModels::SelectDetailMotorCycleData('id',$id,['name','year','engine','capacity','dimensions','weight']);
        if(empty($res['data'])){
            return response()->json($res,404);
        }
        return response()->json($res);
    }

    public function viewFeatureMotorCycle($id){
        $res['success'] = true;
        $res['data'] = MotorCycleModels::SelectDetailMotorCycleData('id',$id,['feature1','feature2','feature3','feature4']);
        if(empty($res['data'])){
            return response()->json($res,404);
        }
        return response()->json($res);
    }

    public function viewAccesoriesMotorCycle($id){
        $res['success'] = true;
        $res['data'] = AccesoriesModels::SelectAllData('id_motorcycles',$id);
        if(empty($res['data'])){
            return response()->json($res,404);
        }
        return response()->json($res);
    }

    public function viewServiceInfoMotorCycles($id){
        $res['success'] = true;
        $res['data'] = ServiceInfoModels::SelectAllData('id_motorcycle',$id);
        if(empty($res['data'])){
            return response()->json($res,404);
        }
        return response()->json($res);
    }
}
