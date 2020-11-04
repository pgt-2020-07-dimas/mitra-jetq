<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Helper;

class TransactionController extends Controller
{
    public function index(){

        $page = "Requested";
        $helper = new Helper();
        $owner = $helper->getUID();
        $data = $helper->apiGET('invoice/',$owner);
        if($data['status']){
            $data = $data['data'];
            return view('transaction.index',compact('data','page'));
        } else {
            $data = null;
            return view('transaction.index',compact('data','page'));
        }
    }
    
    public function confirmed(){

        $page = "Confirmed";
        $helper = new Helper();
        $owner = $helper->getUID();
        $data = $helper->apiGET('invoice/confirm/',$owner);
        if($data['status']){
            $data = $data['data'];
            return view('transaction.confirmed',compact('data','page'));
        } else {
            $data = null;
            return view('transaction.confirmed',compact('data','page'));
        }
    }

    public function paid(){

        $page = "Paid";
        $helper = new Helper();
        $owner = $helper->getUID();
        $data = $helper->apiGET('invoice/waiting/',$owner);
        if($data['status']){
            $data = $data['data'];
            return view('transaction.paid',compact('data','page'));
        } else {
            $data = null;
            return view('transaction.paid',compact('data','page'));
        }
    }
    public function history(){

        $page = "History";
        $helper = new Helper();
        $owner = $helper->getUID();
        $data = $helper->apiGET('invoice/history/',$owner);
        if($data['status']){
            $data = $data['data'];
            return view('transaction.history',compact('data','page'));
        } else {
            $data = null;
            return view('transaction.history',compact('data','page'));
        }
    }
    public function detail($id){
    
        $helper = new Helper();
        $data = $helper->apiGET('invoice/detail/',$id);
        return json_encode($data);

    }
    public function newoffer(Request $request){
        $helper = new Helper();
        $data = $helper->apiPOST('invoice/newoffer/'. $request->invoice_id . '/' . $request->status . '/' . $request->price ,['form_params' => ['note' => $request->note]]); 
        $data['status'] == true ? $helper->flashSuccess($data['message']) : $helper->flashError($data['message']);
        $data = $helper->apiPUT('invoice/status/' . $request->invoice_id . '/Pay/1',[]);
        return redirect()->back();
        //return $request;
    }
    
    public function payment(Request $request){
        $helper = new Helper();
        $data = $helper->apiPUT('invoice/status/' . $request->invoice_id . '/' . $request->status . '/' . $request->payment,[]);
        $data['status'] == true ? $helper->flashSuccess($data['message']) : $helper->flashError($data['message']);
        return redirect()->back();
    }
}
