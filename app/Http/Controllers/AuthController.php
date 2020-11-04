<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Helper;

class AuthController extends Controller
{
    public function index(){
        return view('Auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        $helper = new Helper();
        $data = $helper->apiPOST('auth/login/' , [
                'form_params' => [
                    'email' => $request->email,
                    'password' => $request->password,
                ]
            ]);
        session()->flush();
        //return $userdata;die;
        if($data['status']){
            session(['userdata'=> $data]);
            return redirect('/dashboard');
        } else {
            $helper->flashError($data['message']);
            return redirect()->back();
        }       
    }
    public function logout(){
        session()->forget('userdata');
        session()->flush();
        return redirect('/login');
    }
}
