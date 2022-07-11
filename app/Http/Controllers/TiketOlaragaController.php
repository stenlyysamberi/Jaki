<?php

namespace App\Http\Controllers;


use App\TiketOlaraga;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TiketOlaragaController extends Controller
{
    public function index(){
        $data = TiketOlaraga::all();
        return response()->json([
            'olaragas' => $data
        ]);
    }

    public function store(Request $request){
        $code=rand(111111,999999);
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:191',
            'tgl_start' => 'required|max:191',
            'lokasi_start' => 'required|max:191',
            'juml_cetak' => 'required|max:191',
            'tribun' => 'required|max:191',
            'waktu_start' => 'required|max:191',
            'url_icon' => 'required',
            'harga' => 'required|max:191'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error'  => $validator->getMessageBag(),
            ]);
        }else{
            $e_tiket = new TiketOlaraga;
            $e_tiket->code = $code;
            $e_tiket->title = $request->input('title');
            $e_tiket->tgl_start = $request->input('tgl_start');
            $e_tiket->waktu_start = $request->input('waktu_start');
            $e_tiket->lokasi_start = $request->input('lokasi_start');
            $e_tiket->juml_cetak = $request->input('juml_cetak');
            $e_tiket->tribun = $request->input('tribun');
            $e_tiket->harga = $request->input('harga');
            $e_tiket->url_icon = $request->input('url_icon');
            $e_tiket->save();

            return response()->json([
                'status' => 200,
                'message'  => 'add successfuly'
            ]);
        }
    }

    public function delete(Request $req, $id){
        $delete = TiketOlaraga::find($id);
        $delete->delete();
        if($delete){
            return response()->json([
                'status' => 200,
                'message' => 'Scheedule has been deleted'
            ]);
        }
    }
}
