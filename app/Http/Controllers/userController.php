<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userResistration;
use App\uploadModel;


class userController extends Controller
{
    public function userResisger(Request $req){
        $name = $req -> input('name');
        $email = $req -> input('email');
        $mobile = $req -> input('mobile');
        $pass = $req -> input('pass');
        $bkashno = $req -> input('bkashno');
        $bkashtrxid = $req -> input('bkashtrxid');

        userResistration::insert([

            'name'=>$name,
            'email'=>$email,
            'mobile'=>$mobile,
            'pass'=>$pass,
            'bkashno'=>$bkashno,
            'bkashtrxid'=>$bkashtrxid,
            'approval'=>'pending',
            'status'=>''
        ]);
    }

    public function userLogin(Request $req){
        $mobile = $req -> input('mobile');
        $pass = $req -> input('pass');

		$result = userResistration::where(['mobile'=> $mobile,'pass'=> $pass, 'approval'=>'approved'])->count();

		if ($result==true){
            userResistration::where('mobile', $mobile) -> update(['status'=>'online']);
            $name = userResistration::where('mobile', $mobile)->value('name');   
            $req->session()->put('name',$name);
            return 1;
		}else{
			return 0;
		}
    }

    public function logout(Request $req){
        $name = $req -> session()->get('name');
        userResistration::where('name', $name) -> update(['status'=>'offline']);
        $req -> session()->flush();
		return redirect('/login');
    }
    
    public function dashboard(){
        $user = json_decode(userResistration::where('status','online')->get());
        $paidImg = json_decode(uploadModel::where('status','paid')->orderBy('id','desc')->limit(6)->get());
        return view('dashboard',['user'=>$user, 'paidImg'=>$paidImg]);
    }


}
