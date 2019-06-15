<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Address;
use App\HouseHold;
use App\Member;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $id=Auth::user()->id;
       $data= User::find($id)->addresses;
       return view('home',compact('data'));
    }

    public function create_address(Request $request){
        $input=$request->all();
        $id=Auth::user()->id;
        //create.............................
        if ($input['id1'] == '0') {
            for($i=1;$i<3;$i++){
               Address::create([
                   'user_id' => $id,
                   'house_name_no' => $input['house_name_no'.$i],
                   'road_name_no' => $input['road_name_no'.$i],
                   'village_name' => $input['village_name'.$i],
                   'union' => $input['union'.$i],
                   'post_code' => $input['post_code'.$i],
                   'thana_name' => $input['thana_name'.$i],
                   'district' => $input['district'.$i],
                ]);
            }
           
        }
        //Update..................................
        else{
            for($i=1;$i<3;$i++){
                $address=Address::find($input['id'.$i]);
                $address->house_name_no = $input['house_name_no'.$i];
                $address->road_name_no = $input['road_name_no'.$i];
                $address->village_name = $input['village_name'.$i];
                $address->union = $input['union'.$i];
                $address->post_code = $input['post_code'.$i];
                $address->thana_name = $input['thana_name'.$i];
                $address->district = $input['district'.$i];
                $address->save();
            }
        }
        return back();
       
    }

    public function house_hold(){
        $id=Auth::user()->id;
        $data= User::find($id)->house_holds;
        return view('house_hold',compact('data'));
    }
    public function update_house_hold(Request $request){
        $input=$request->all();
        $house_hold=HouseHold::find($input['id']);
        $i=0;
         foreach ($input as $key =>$value) {
             if ($i>1) {
                 $house_hold->$key = $value;
             }
             $i++;
         }
                
        $house_hold->save();
      return back();
    }

    public function member(){
         $id=Auth::user()->id;
        $data= User::find($id)->members;
        return view('member',compact('data'));
    }
    public function add_member(Request $request){
        $input=$request->all();
        $id=Auth::user()->id;
        $i=0;
        $data['user_id']=$id;
                 foreach ($input as $key =>$value) {
                     if ($i>1) {
                         $data[$key] = $value;
                     }
                     $i++;
                 }
            Member::create($data);
                
      return back();
    }
    public function view(Request $request,$id){
        $user_id=Auth::user()->id;
        $data=Member::where([['user_id',$user_id],['id',$id]])->first();
        if (!empty($data)) {
           return view('view_member_info',compact('data'));
        }
        else{return back();}
    }

    public function edit_member_info(Request $request,$id){
        $user_id=Auth::user()->id;
        $data=Member::where([['user_id',$user_id],['id',$id]])->first();
        if (!empty($data)) {
           return view('edit_member_info',compact('data'));
        }
        else{return back();}
    }
    public function update_member(Request $request){
        $input=$request->all();
        $i=0;
          $member=Member::find($input['id']);
             foreach ($input as $key =>$value) {
                 if ($i>1) {
                     $member->$key = $value;
                 }
                 $i++;
             }
        $member->save();
                
      return redirect('member');
    }
}
