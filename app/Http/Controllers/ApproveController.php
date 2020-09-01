<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ApproveController extends Controller
{
    public function approve($id){
        DB::table('ocapproved')->insert(
            ['ocapproved_id' => $id]
          
        );
        Session::put('message',"number $id data approved successfully" );
        return redirect('/oc/alldata');
       
        
      }

      public function approvefromoc(){
            $data=DB::table('ocapproved')
             ->join('adduser','ocapproved.ocapproved_id','adduser.id')
             ->get();
            return view('pages.ocapproved',compact('data'));
        }
    
      public function approvebyaoc($id){
        DB::table('aocapproved')->insert(
            ['aocapproved.id' => $id]
           
        );
        Session::put('message',"number $id data approved successfully" );
        return redirect('approve/from/oc');
     
      }

      
     
     
     public function ApprovedUser(){
      $data=DB::table('aocapproved')
      ->join('adduser','aocapproved.id','adduser.id')
      ->get();
      return view('pages.approveddata',compact('data'));

     }
     
     
     
     public function sendmail($id){
       $address=DB::table('adduser')
        ->where('id',$id)
       ->get('adduser.email');

       Mail::to($address)->send(new WelcomeMail);
       Session::put('message',"sent a final mail to number $id" );
       return redirect('/approved/user/latest');
       
      
 }
     


}
