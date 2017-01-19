<?php

namespace App\Http\Controllers;

use App\Models\NewsModels;
use Illuminate\Http\Request;

class NewsController extends Controller
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

    public function viewAllNews(Request $request){
        $res['success'] = true;
        $res['data'] = NewsModels::SelectAllData(['id','title','headline']);
        return response()->json($res);
    }

    public function viewDetailNews($id){
        $res['success'] = true;
        $res['data'] = NewsModels::SelectDetailNewsData('id',$id,
            ['id_category','title','headline','content','author','created_at']);
        return response()->json($res);
    }

}
