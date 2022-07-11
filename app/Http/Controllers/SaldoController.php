<?php

namespace App\Http\Controllers;
use App\Token;
use App\Saldo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;
class SaldoController extends Controller
{
    function index(Request $req){
        return view('pages.saldo',[
            "title1" => 'Jaki',
            "title2" => 'Create',
            "title3" => 'Token',
        ]);
    }


    function search(Request $req){
       
        $check = User::where('hp',$req->hp)->first();
        if($check){
            return response()->json([
                'respon'  => 200,
                'message'   => 'Data is Registed.',
                'nama' => $check->nama,
                'id'   => $check->id_user
            ]);


        }else{
            return response()->json([
                'respon'  => 404,
                'message' => 'Data not found.'
            ]);
        }
            

        
    }

    function top_up(Request $req){
        $validator = Validator::make($req->all(),[
            'id_user' => 'required|max:191|min:1',
            'saldo' => 'required|max:256|:min:20',
            'nama' => 'required|max:191|min:10',
            'hp' => 'required|max:12|:min:10',
           ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error'  => $validator->getMessageBag(),
            ]);
        }else{
            $saldo = new Saldo();
            $saldo->id_user = $req->input('id_user');
            $saldo->saldo = $req->input('saldo');
            $saldo->save();

            // $token = Token::find(1);
            // $account_sid = $token->sid;
            // $auth_token = $token->token;
            // $twilio_number = $token->phone;
            // $to      = "+62". $req->hp;
            // $message = "Sobat Jaki! Dana Rp." . $req->saldo . " " ."berhasil ditambakan!";
      
            // $client = new Client($account_sid, $auth_token);
            // $client->messages->create($to, [
            //         'from' => $twilio_number, 
            //         'body' => $message]);

            return response()->json([
                'status' => 200,
                'message'  => 'Top-up saldo successfuly'
            ]);
        }

    }

    function single_saldo(Request $req){
        $saldo = User::find($req->id);
        if($saldo){
            return response()->json([
                'respon'  => 200,
                'message'   => 'Successfully.',
                'saldo' => $saldo->saldo
            ]); 
        }else{
            return response()->json([
                'respon'  => 404,
                'message'   => 'die.'
            ]);
        }
    }
}
