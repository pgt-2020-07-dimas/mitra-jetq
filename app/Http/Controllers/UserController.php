<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Helper;

class UserController extends Controller
{
    public function index(){

        $page = "Profile";
        $data = session()->all();
        $data = $data['userdata']['data'];
        //return $data;
        return view('User.index',compact('page','data'));
    }
    
    public function edit(){

        $page = "Edit Profile";
        $data = session()->get('userdata');
        $data = $data['data'];
        //return $data;
        return view('User.edit', compact('page','data'));
    }

    public function update(Request $request){
        //belum ada validate
        $helper = new Helper();        
        $owner = $helper->getUID();
        $image = $request->file('image');
        if($image <>  null){

        }
        //return $request;
    }

    public function changepassword(Request $request){
        
        $page = 'Change Password';
        return view('User.changepassword',compact('page'));
    }

    public function updatepassword(Request $request){
        //belum ada validasi
        $helper = new Helper();        
        $owner = $helper->getUID();
        $data['status'] == true ? $helper->flashSuccess($data['message']) : $helper->flashError($data['message']);

        return $request;
    }
}
