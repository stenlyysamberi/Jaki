<?php

namespace App\Http\Controllers;

use App\ModelWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ModelWisataController extends Controller
{
    

    public function index(){
        $data = ModelWisata::all();
        return response()->json([
            'data' => $data
        ]);
    }





    public function store(Request $request){
        $code=rand(111111,999999);
        $validator = Validator::make($request->all(),[
            'nama_dest' => 'required|max:191',
            'alamat_dest' => 'required|max:191',
            'alamat_maps' => 'required|max:191',
            'panduan_dest' => 'required|max:191',
            'tlpn_dest' => 'required|max:191',
            'gambar_dest' => 'required',
            'dec' => 'required|max:191'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error'  => $validator->getMessageBag(),
            ]);
        }else{
            $t_wisata = new ModelWisata();
            $t_wisata->nama_dest = $request->input('nama_dest');
            $t_wisata->alamat_dest = $request->input('alamat_dest');
            $t_wisata->alamat_maps = $request->input('alamat_maps');
            $t_wisata->panduan_dest = $request->input('panduan_dest');
            $t_wisata->tlpn_dest = $request->input('tlpn_dest');
            $t_wisata->gambar_dest = $request->input('gambar_dest');
            $t_wisata->dec = $request->input('dec');
            $t_wisata->save();

            return response()->json([
                'status' => 200,
                'message'  => 'add successfuly'
            ]);
        }
    }


    public function del_wisata(Request $req, $id){
        $delete = ModelWisata::find($id);
        $delete->delete();
        if($delete){
            return response()->json([
                'status' => 200,
                'message' => 'wisata has been deleted'
            ]);
        }
    }
}
