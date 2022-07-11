<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{


    function index(Request $request){
        $data = News::all();
        return response()->json([
            'infos' => $data
        ]);
    }

    function store(Request $request){
    
        $validator = Validator::make($request->all(),[
            'judul' => 'required|max:191',
            'pic' => 'required',
            'isi' => 'required'
            
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error'  => $validator->getMessageBag(),
            ]);
        }else{
            $news = new News();
            $news->judul = $request->input('judul');
            $news->pic = $request->input('pic');
            $news->isi = $request->input('isi');
            $news->save();

            return response()->json([
                'status' => 200,
                'message'  => 'add successfuly'
            ]);
        }
    }

    public function delete (Request $req, $id){
        $delete = News::find($id);
        $delete->delete();
        if($delete){
            return response()->json([
                'status' => 200,
                'message' => 'data has been deleted'
            ]);
        }
    }
}
