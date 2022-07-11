<?php

namespace App\Http\Controllers;

use App\Token;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function token(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'sid' => 'required|max:191',
            'phone' => 'required|max:191',
            'token' => 'required|max:191',
            'pesan' => 'required|max:191',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error'  => $validator->getMessageBag(),
            ]);
        }else{

            $token = Token::find($id);
            if($token){
                $token->sid = $request->input('sid');
                $token->token = $request->input('token');
                $token->phone = $request->input('phone');
                $token->pesan = $request->input('pesan');
                $token->update();

            return response()->json([
                'status' => 200,
                'message'  => 'Token updated successfully'
            ]);
            }else{
                return response()->json([
                    'status' => 404,
                    'message'  => 'Token updated failed'
                ]);
            }
            
        }
    }
}
