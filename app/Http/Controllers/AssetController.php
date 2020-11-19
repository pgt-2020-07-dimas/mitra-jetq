<?php

namespace App\Http\Controllers;

 
use App\Asset;
use App\Helper\Helper;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use GuzzleHttp\Client;
// use GuzzleHttp\Exception\RequestException;

class AssetController extends Controller
{
    // private $_client;
    // public function __construct()
    // {
    //     $this->_client = new Client([

    //         'base_uri' => config('app.base_uri') //* Change to 'https://api.jet-q.com/' for production

    //     ]);
    // }
    // //flash function

    // public function flashSuccess($title) {
    //     $this->setupFlash("Operation Successful", $title, 'success');
    //  }
   
    //  public function flashError($title) {
    //     $this->setupFlash("Something went wrong", $title, 'error');
    //  }
   
    //  private function setupFlash($message, $title, $type) {
    //     request()->session()->flash('swal_msg', [
    //        'message' => $message,
    //        'title' => $title,
    //        'type' => $type,
    //     ]);
    //  }

    // public function apiGET($endpoint,$id){
    //     try {
            
    //         $response = $this->_client->request('GET', $endpoint . $id );
    //         $result = json_decode($response->getBody()->getContents(),true);
    //     } catch (RequestException $e) {
            
    //         $result = json_decode($e->getResponse()->getBody()->getContents(), true);
    //     }
    //     return $result;
        
    // }
    // public function apiDELETE($endpoint,$formparams)
    // {
    //     try {
    //         $response = $this->_client->request('DELETE', $endpoint, $formparams);
    //         $result = json_decode($response->getBody(), true);
    //         return $result;
    //     } catch (RequestException $e) {
    //         $badResponse = json_decode($e->getResponse()->getBody()->getContents());
    //         return $badResponse;
    //     }
    // }
    // public function apiPUT($endpoint,$formparams)
    // {
    //     try {
    //         $response = $this->_client->request('PUT', $endpoint, $formparams);
    //         $result = json_decode($response->getBody(), true);
    //         return $result;
    //     } catch (RequestException $e) {
    //         $badResponse = json_decode($e->getResponse()->getBody()->getContents());
    //         return $badResponse;
    //     }
    // }
    // public function apiPOST($endpoint,$formparams)
    // {
    //     try {
    //         $response = $this->_client->request('POST', $endpoint, $formparams);
    //         $result = json_decode($response->getBody(), true);
    //         return $result;
    //     } catch (RequestException $e) {
    //         $badResponse = json_decode($e->getResponse()->getBody()->getContents());
    //         return $badResponse;
    //     }
    // }
    
    public function all(){
    
        //$data = $this->apiGET('aircraft/all','');

    }
    
    public function active(){
        $page = "Active Asset";
        $helper = new Helper();
        $owner = $helper->getUID();
        $data = $helper->apiGET('aircraft/',$owner);        
        if ($data['status'] == true){
            $data = $data['data'];
            return view('Asset.active',compact('data','page'));
        } else {
            $data = null;
            return view('Asset.active',compact('data','page'));
        }
    }
    public function inactive(){
        $page = "Inactive Asset";
        $helper = new Helper();
        $owner = $helper->getUID();
        // $data = $this->apiGET('aircraft/deactive/',16);
        $data = $helper->apiGET('aircraft/deactive/',$owner);
        if ($data['status'] == true){
            $data = $data['data'];
            return view('Asset.inactive',compact('data','page'));
        } else {
            $data = null;
            return view('Asset.inactive',compact('data','page'));
        }

    }

    public function detail($id){
    
        //$data = $this->apiGET('aircraft/detail/' , $id);
        $helper = new Helper();
        $data = $helper->apiGET('aircraft/detail/',$id);
        return json_encode($data);

    }

    public function baselist(){
        //$keyword = $_GET['term'];
        //$data = $this->apiGET('airport/iata/', $_GET['term']);
        $helper = new Helper();
        $data = $helper->apiGET('airport/iata/',$_GET['term']);
        $data = $data['data'];
        //return json_encode($data);
        foreach ($data as $iata) {
            $list[] = $iata['airport_iata'];            
        }
        return json_encode($list);

    }

    public function create(){
        $page = "Add Asset";
        return view('Asset.add',compact('page'));
    }
    public function edit($id){
        $page ='Edit Asset';
        //$data = $this->apiGET('aircraft/detail/',$id);
        $helper = new Helper();
        $data = $helper->apiGET('aircraft/detail/',$id);
        $data = $data['data']['aircraft'];
        //return $data;
        return view('Asset.edit',compact('data','page'));
    }
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'aircraft_name' => 'required',
            'aircraft_base' => 'required',
            'registration_number' => 'required',
            'manufactured_year' => 'required|numeric',
            'aircraft_cost' => 'required',
            'aircraft_range' => 'required',
            'aircraft_speed' => 'required',
            'takeoff_distance' => 'required',
            'landing_distance' => 'required',
            'cabin_height' => 'required',
            'cabin_width' => 'required',
            'cabin_length' => 'required',
            'max_seats' => 'required',
            'max_luggage' => 'required',
        ]);
        $main_image = $request->file('main_image');
        $second_image = $request->file('second_image');
        $third_image = $request->file('third_image');
        $fourth_image = $request->file('fourth_image');
        $fifth_image = $request->file('fifth_image');
        
        $helper = new Helper();        
        $owner = $helper->getUID();
        $data = $helper->apiPOST('aircraft/add/', [
            'multipart' => [
                [
                    'name' => 'owner_id',
                    'contents' => $owner
                ],
                [
                    'name' => 'aircraft_name',
                    'contents' => $request->aircraft_name
                ],
                [
                    'name' => 'aircraft_base',
                    'contents' => $request->aircraft_base
                ],
                [
                    'name' => 'registration_number',
                    'contents' => $request->registration_number
                ],
                [
                    'name' => 'manufactured_year',
                    'contents' => $request->manufactured_year
                ],
                [
                    'name' => 'aircraft_cost',
                    'contents' => $request->aircraft_cost
                ],
                [
                    'name' => 'max_seats',
                    'contents' => $request->max_seats
                ],
                [
                    'name' => 'aircraft_speed',
                    'contents' => $request->aircraft_speed
                ],
                [
                    'name' => 'aircraft_range',
                    'contents' => $request->aircraft_range
                ],
                [
                    'name' => 'takeoff_distance',
                    'contents' => $request->takeoff_distance
                ],
                [
                    'name' => 'landing_distance',
                    'contents' => $request->landing_distance
                ],
                [
                    'name' => 'max_luggage',
                    'contents' => $request->max_luggage
                ],
                [
                    'name' => 'cabin_height',
                    'contents' => $request->cabin_height
                ],
                [
                    'name' => 'cabin_width',
                    'contents' => $request->cabin_width
                ],
                [
                    'name' => 'cabin_length',
                    'contents' => $request->cabin_length
                ],
                [
                    'name' => 'isVIP',
                    'contents' => $request->isVIP
                ],
                [
                    'name' => 'isMedevac',
                    'contents' => $request->isMedevac
                ],
                [
                    'name' => 'isActive',
                    'contents' => $request->isActive
                ],
                ($main_image <> null) ? 
                [
                    'name' => 'main_image',
                    'contents' => fopen($main_image, 'r'),
                    'filename' => $main_image->getClientOriginalName()
                ] :
                [
                    'name' =>'main_image',
                    'contents' => '',
                ],
                ($second_image <> null) ? 
                [
                    'name' => 'second_image',
                    'contents' => fopen($second_image, 'r'),
                    'filename' => $second_image->getClientOriginalName()
                ] :
                [
                    'name' =>'second_image',
                    'contents' => '',
                ],
                ($third_image <> null) ? 
                [
                    'name' => 'third_image',
                    'contents' => fopen($third_image, 'r'),
                    'filename' => $third_image->getClientOriginalName()
                ] :
                [
                    'name' =>'third_image',
                    'contents' => '',
                ],
                ($fourth_image <> null) ? 
                [
                    'name' => 'fourth_image',
                    'contents' => fopen($fourth_image, 'r'),
                    'filename' => $fourth_image->getClientOriginalName()
                ] :
                [
                    'name' =>'fourth_image',
                    'contents' => '',
                ],
                ($fifth_image <> null) ? 
                [
                    'name' => 'fifth_image',
                    'contents' => fopen($fifth_image, 'r'),
                    'filename' => $fifth_image->getClientOriginalName()
                ] :
                [
                    'name' =>'fifth_image',
                    'contents' => '',
                ],
            ]
        ]);
        $data['status'] == true ? $helper->flashSuccess($data['message']) : $helper->flashError($data['message']);
        if ($request->isActive == 1) {
            return redirect('/asset/active');
        } else {
            return redirect('/asset/inactive');
        }
    }
    public function update(Request $request){
        
        $validatedData = $request->validate([
            'aircraft_name' => 'required',
            'aircraft_base' => 'required',
            'registration_number' => 'required',
            'manufactured_year' => 'required|numeric',
            'aircraft_cost' => 'required',
            'aircraft_range' => 'required',
            'aircraft_speed' => 'required',
            'takeoff_distance' => 'required',
            'landing_distance' => 'required',
            'cabin_height' => 'required',
            'cabin_width' => 'required',
            'cabin_length' => 'required',
            'max_seats' => 'required',
            'max_luggage' => 'required',
        ]);
        $main_image = $request->file('main_image');
        $second_image = $request->file('second_image');
        $third_image = $request->file('third_image');
        $fourth_image = $request->file('fourth_image');
        $fifth_image = $request->file('fifth_image');

        $helper = new Helper();        
        $owner = $helper->getUID();
        $data = $helper->apiPOST('aircraft/edit/', [
            'multipart' => [
                [
                    'name' => 'owner_id',
                    'contents' => $owner
                ],                
                [
                    'name' => 'aircraft_id',
                    'contents' => $request->aircraft_id
                ],
                [
                    'name' => 'aircraft_name',
                    'contents' => $request->aircraft_name
                ],
                [
                    'name' => 'aircraft_base',
                    'contents' => $request->aircraft_base
                ],
                [
                    'name' => 'registration_number',
                    'contents' => $request->registration_number
                ],
                [
                    'name' => 'manufactured_year',
                    'contents' => $request->manufactured_year
                ],
                [
                    'name' => 'aircraft_cost',
                    'contents' => $request->aircraft_cost
                ],
                [
                    'name' => 'max_seats',
                    'contents' => $request->max_seats
                ],
                [
                    'name' => 'aircraft_speed',
                    'contents' => $request->aircraft_speed
                ],
                [
                    'name' => 'aircraft_range',
                    'contents' => $request->aircraft_range
                ],
                [
                    'name' => 'takeoff_distance',
                    'contents' => $request->takeoff_distance
                ],
                [
                    'name' => 'landing_distance',
                    'contents' => $request->landing_distance
                ],
                [
                    'name' => 'max_luggage',
                    'contents' => $request->max_luggage
                ],
                [
                    'name' => 'cabin_height',
                    'contents' => $request->cabin_height
                ],
                [
                    'name' => 'cabin_width',
                    'contents' => $request->cabin_width
                ],
                [
                    'name' => 'cabin_length',
                    'contents' => $request->cabin_length
                ],
                [
                    'name' => 'isVIP',
                    'contents' => $request->isVIP
                ],
                [
                    'name' => 'isMedevac',
                    'contents' => $request->isMedevac
                ],
                [
                    'name' => 'isActive',
                    'contents' => $request->isActive
                ],
                ($main_image <> null) ? 
                [
                    'name' => 'main_image',
                    'contents' => fopen($main_image, 'r'),
                    'filename' => $main_image->getClientOriginalName()
                ] :
                [
                    'name' =>'main_image',
                    'contents' => $request->main_image,
                ],
                ($second_image <> null) ? 
                [
                    'name' => 'second_image',
                    'contents' => fopen($second_image, 'r'),
                    'filename' => $second_image->getClientOriginalName()
                ] :
                [
                    'name' =>'second_image',
                    'contents' => $request->second_image,
                ],
                ($third_image <> null) ? 
                [
                    'name' => 'third_image',
                    'contents' => fopen($third_image, 'r'),
                    'filename' => $third_image->getClientOriginalName()
                ] :
                [
                    'name' =>'third_image',
                    'contents' => $request->third_image,
                ],
                ($fourth_image <> null) ? 
                [
                    'name' => 'fourth_image',
                    'contents' => fopen($fourth_image, 'r'),
                    'filename' => $fourth_image->getClientOriginalName()
                ] :
                [
                    'name' =>'fourth_image',
                    'contents' => $request->fourth_image,
                ],
                ($fifth_image <> null) ? 
                [
                    'name' => 'fifth_image',
                    'contents' => fopen($fifth_image, 'r'),
                    'filename' => $fifth_image->getClientOriginalName()
                ] :
                [
                    'name' =>'fifth_image',
                    'contents' => $request->fifth_image,
                ],
            ]
        ]);
        $data['status'] == true ? $helper->flashSuccess($data['message']) : $helper->flashError($data['message']);
        if ($request->isActive == 1) {
            return redirect('/asset/active');
        } else {
            return redirect('/asset/inactive');
        }
    }
    public function changestatus(Request $request){
        $helper = new Helper();
        $data = $helper->apiPUT('aircraft/status/'. $request->aircraft_id . '/'. $request->isActive, []);
        //$data = $this->apiPUT('aircraft/status/'. $request->aircraft_id . '/'. $request->isActive, []);
        $data['status'] == true ? $helper->flashSuccess($data['message']) : $helper->flashError($data['message']);
        if ($request->isActive == 0){
            return redirect('/asset/active');
        } else {
            return redirect('/asset/inactive');
        }
    }
    public function delete(Request $request){
        //return $request;
        $helper = new Helper();
        $data = $helper->apiDELETE('aircraft/delete', [
            'form_params' => ['aircraft_id' => $request->aircraft_id]
        ]);
        $data['status'] == true ? $helper->flashSuccess($data['message']) : $helper->flashError($data['message']);
        return redirect()->back();
    }

    public function deleteservice($id){
        $helper = new Helper();
        $data = $helper->apiDELETE('aircraft/service' , [
                'form_params' => ['service_id' => $id]
            ]);
        //NGGAK MAU RETURN STATUS DARI API
        //$data['status'] == true ? $helper->flashSuccess($data['message']) : $helper->flashError($data['message']);        
        return redirect()->back();
    }

    public function addservice(Request $request){
        $helper = new Helper();
        $data = $helper->apiPOST('aircraft/addservice/' , [
                'form_params' => [

                    'aircraft_id' => $request->aircraft,
                    'service_title' => $request->title,
                    'service_description' => $request->description,
                    'price' => $request->price,
                    'value' => $request->value,

                ]
            ]);
        $data['status'] == true ? $helper->flashSuccess($data['message']) : $helper->flashError($data['message']);
        return redirect('asset/active');
    }
    
    public function schedule() {

        $page = "Schedule";
        $helper = new Helper();
        $owner = $helper->getUID();
        $active = $helper->apiGET('aircraft/',$owner); 
        if ($active['status'] <> 0){
            $active = $active['data'];
        } else {
            $active = [];
        }
        
        $inactive = $helper->apiGET('aircraft/deactive/',$owner); 
        if ($inactive['status'] <> 0){
            $inactive = $inactive['data'];
        } else {
            $inactive = [];
        }
        
        $data = array_merge($active,$inactive);

        //return $inactive;die;
        $today = Carbon::now();
        for($i=0;$i<6;$i++){
            $addedDay = $today->format('l, d-m-Y');
            $weeks[] = $addedDay;
            $today = $today->addDay(1);
        }

        //return $weeks;die;

        return view('Schedule.index', compact('page','data','weeks'));
    }

    public function dashboard(){

        
    }
}
