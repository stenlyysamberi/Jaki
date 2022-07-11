<?php

namespace App\Http\Controllers;

use App\Venue;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class VenueController extends Controller
{


    public function index(){
        $data = Venue::all();
        return response()->json([
            'venue' => $data
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
            $venue = new Venue();
            $venue->nama_dest = $request->input('nama_dest');
            $venue->alamat_dest = $request->input('alamat_dest');
            $venue->alamat_maps = $request->input('alamat_maps');
            $venue->panduan_dest = $request->input('panduan_dest');
            $venue->tlpn_dest = $request->input('tlpn_dest');
            $venue->gambar_dest = $request->input('gambar_dest');
            $venue->dec = $request->input('dec');
            $venue->save();

            return response()->json([
                'status' => 200,
                'message'  => 'add successfuly'
            ]);
        }
    }


    public function delete(Request $req, $id){
        $delete = Venue::find($id);
        $delete->delete();
        if($delete){
            return response()->json([
                'status' => 200,
                'message' => 'wisata has been deleted'
            ]);
        }
    }
}
