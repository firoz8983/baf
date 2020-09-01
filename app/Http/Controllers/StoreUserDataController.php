<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class StoreUserDataController extends Controller
{
    public function StoreUserData(Request $request){
        
    
          $data=array();
          $data['firstname']=$request->firstname;
          $data['lastname']=$request->lastname;
          $data['email']=$request->email;
          $data['bdnumber']=$request->bdnumber;
          $data['rank']=$request->rank;
          $data['base']=$request->base;
          $data['quartertype']=$request->quartertype;
          $data['date']=$request->date;
          $data['point']=$request->point;
          $data['anumber']=$request->anumber;
          $data['lastname']=$request->lastname;
          $data['child']=$request->child;
        // dd($data);
        $adduser=DB::table('adduser')->insert($data);
          return redirect('alldata/by/admin');
      }

     public function StoreQuarter(Request $request){
       $data=array();
       $data['address']=$request->address;
       $data['building_number']=$request->building_number;
       $data['flat_number']=$request->flat_number;
       $data['previous_info']=$request->previous_info;
       $data['status_of_house']=$request->status_of_house;
       $data['date']=$request->date;
       $data['rank']=$request->rank;
       $data['phone_number']=$request->phone_number;
       $data['house_type']=$request->house_type;
       //dd($data);
       $addquarterdata=DB::table('quarter')->insert($data);
       return redirect('add/quarter');
     }

    public function storecomment(Request $request){
      $data=array();
          $data['name']=$request->name;
          $data['email']=$request->email;
          $data['room_no']=$request->room_no;
          $data['comment']=$request->comment;
          
         //dd($data);
       $addcomment=DB::table('addcomment')->insert($data);
       Session::put('message',"comment added successfully!" );
         return redirect('/add/comment/by/systemuser');
    }


     public function flush(){
      Session::flush();
    return Redirect::to('/');
  }
  
     
}
