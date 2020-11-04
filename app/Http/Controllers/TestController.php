<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $client = new Client([
        //     'base_uri' => 'https://api.jet-q.com/'
        // ]);
        // try {

        //     $response = $client->request('POST', 'auth/login',['form_params'=>['email'=>'mitra1@jet-q.xyz','password'=>'456456']]);
        //     $result = json_decode($response->getBody()->getContents(),true);
        // } catch (RequestException $e) {

        //     $result = json_decode($e->getResponse()->getBody()->getContents(), true);
        // }
        // return view('test',compact('result'));

        $client = new Client([
            'base_uri' => config('app.base_uri')
        ]);
        try {

            $response = $client->request('GET', 'aircraft/all');
            $result = json_decode($response->getBody()->getContents(),true);
        } catch (RequestException $e) {

            $result = json_decode($e->getResponse()->getBody()->getContents(), true);
        }
        return view('test',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
