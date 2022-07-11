<?php

namespace App\Http\Controllers;

use App\Token;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Exception;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Component\Console\Input\Input;
use Throwable;
use Twilio\Rest\Client;

class DaftarController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nama'  => 'required',
            'email' => 'required',
            'level' => 'required',
            'hp'    => 'required',
            'img'   => 'required'
       ]);

       $user = new User;
       $phone = $user::where('hp', '=', $request->hp)->get()->count();
      // dd($phone);
       if($phone<1){

        $code=rand(111111,999999);
        $user->nama=$request->nama;
        $user->alamat=$request->email;
        $user->level=$request->level;
        $user->hp=$request->hp;
        $user->img=$request->img;
        $user->password=$code;
        $user->save();

        try {
            
            $message = "is you're token"." ".$code;
            $to      = "+62". $request->hp;    

            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_NUMBER");
  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($to, [
                'from' => $twilio_number, 
                'body' => $message]);
  
            // dd('SMS Sent Successfully.');
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }


        return response()->json([
            'result'  => 'berhasil',
            'message' => 1
        ]);
        
       }else{

        return response()->json([
            'result'  => 'gagal',
            'message' =>  0
        ]);
       }

    }


    public function singel_user(Request $req){
       $singel_user = User::find($req->id);
       if($singel_user){
        return response()->json([
            'status'      => 200,
            'message'     => "success",
            'single_user' => $singel_user
        ]);
       }else{
        return response()->json([
            'status'      => 404,
            'message'     => "die"
        ]);
       }
    }

    public function verify(Request $req){
        $check = User::where('code',$req->code)->first();
        if($check){
            $check->code="";
            $check->save();

            return response()->json([
                'result'  => 'berhasil',
                'message' => 1
            ]);


        }else{
            return response()->json([
                'result'  => 'gagal',
                'message' => 0
            ]);
        }
    }

    public function login(Request $request){
        $user = new User;
        $code=rand(111111,999999);
        $message = "is you're token"." ".$code;
        $to      = "+62". $request->hp;
        $credentials = $request->validate([
            "hp"    => 'required'
        ]);

        $phone = $user::where('hp', '=', $request->hp)->get()->count();
        if($phone>0){
            DB::table('tbl_user')
            ->where('hp',$request->hp)
            ->update(['code'=>$code]);

            try {
  
                $account_sid = getenv("TWILIO_SID");
                $auth_token = getenv("TWILIO_TOKEN");
                $twilio_number = getenv("TWILIO_NUMBER");
      
                $client = new Client($account_sid, $auth_token);
                $client->messages->create($to, [
                    'from' => $twilio_number, 
                    'body' => $message]);
      
                // dd('SMS Sent Successfully.');
      
            } catch (Exception $e) {
                dd("Error: ". $e->getMessage());
            }

            return response()->json([
                'result'  => 'berhasil',
                'message' => 1
            ]);

           
 
            
            
        }else{
            return response()->json([
                'result'  => 'gagal',
                'message' =>  0
            ]);
        }


    }



    public function store_user_admin(Request $request){

       $validator = Validator::make($request->all(),[
            'nama' => 'required|max:191|min:10',
            'hp' => 'required|max:191|unique:tbl_users',
            'level' => 'required|max:191',
            'alamat' => 'required|max:255',
            'password' => 'required|max:255|min:10',
            'img' => 'required',
            'status' => 'required'
           
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error'  => $validator->getMessageBag(),
            ]);
        }else{
            $users = new User();
            $users->nama = $request->input('nama');
            $users->alamat = $request->input('alamat');
            $users->level = $request->input('level');
            $users->hp = $request->input('hp');
            $users->saldo = "0";
            $users->img = $request->input('img');
            $users->status = $request->input('status');
            $users->password = Hash::make($request->input('password'));
            $users->save();

            $token = Token::find(1);
            $account_sid = $token->sid;
            $auth_token = $token->token;
            $twilio_number = $token->phone;
            $to      = "+62". $request->hp;
            $message = $token->pesan." ".$request->password;
      
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($to, [
                    'from' => $twilio_number, 
                    'body' => $message]);

            return response()->json([
                'status' => 200,
                'message'  => 'add successfuly'
            ]);
        }

    }

    public function login_admin(Request $request){

        $credentials = $request->validate([
            'hp'  => 'required|max:12|min:10',
            'password'   => 'required|max:255|min:10'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('masuk', 'Data yang dimasukan tidak sesuai dengan records.');
 
        // return back()->withErrors([
        //     'masuk' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');

        // $validator = Validator::make(request()->all(),[
        //     'hp' => 'required|max:12|min:5',
        //     'code' => 'required|max:191'          
        // ]);
        
       
        // if($validator->fails()){
        //     return back()->with('masuk',$validator->getMessageBag());
        // }else{

        //    try{

        //         if(Auth::attempt(['hp' => $request->get('hp'),'code'=> $request->get('code')])){
        //             $request->session()->regenerate();
        //             return redirect()->intended('/');
        //         }

        //    }catch(Throwable $e){
        //         report($e);
        //         return false;
        //    }

        // return back()->with('masuk', 'Data yang dimasukan tidak sesuai dengan records.');
           
        // }
    }


    public function users(){
        $data = User::all();
        return response()->json([
            'users' => $data
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function del_user(Request $req, $id){
        $delete = User::find($id);
        $delete->delete();
        if($delete){
            return response()->json([
                'status' => 200,
                'message' => 'user has been deleted'
            ]);
        }
    }
}
