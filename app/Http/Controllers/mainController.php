<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visitorModel;
use App\contractModel;


class mainController extends Controller
{
    public function __invoke(){
    	// Stote User ip address & time in datebase
    	$ip = $_SERVER['REMOTE_ADDR'];
    	date_default_timezone_set('Asia/Dhaka');
    	$time = date('D:M:Y, h:i:s a');
    	visitorModel::insert(['ip_address'=> $ip, 'time'=>$time]);
        	return view('home');
   }

    public function insertContractData(Request $req){
        $name = $req -> input('name');
        $mobile = $req -> input('mobile');
        $email = $req -> input('email');
        $message = $req -> input('message');

        contractModel::insert([

            'name'=>$name,
            'mobile'=>$mobile,
            'email'=>$email,
            'message'=>$message

        ]);
    }

    public function login(){
         return view('login');
    }

    public function registration(){
    return view('registration');
    }
    
}
