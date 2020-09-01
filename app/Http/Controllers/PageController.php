<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Validator;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public function systemadmin()
    {

        return view('pages.systemadmin');
    }
    public function aco(){
        return view('pages.aco');
    }
    public function oc(){
        return view('pages.oc');
    }
    public function SystemUser(){
        return view('pages.systemuser');
    }
    


    public function adduser()
    {
        return view('pages.AddUser');
    }
   

    public function UserData(Request $request){
        $validatedData = $request->validate([
          'firstname' => 'required:adduser|max:255|min:1',
          'lastname' => 'required:adduser|max:255|min:1',
          'email'=>'required:adduser|max:255|min:1',
          'bdnumber' => 'required:adduser|max:255|min:1',
          'rank' => 'required:adduser',
          'base' => 'required:adduser',
          'quartertype' => 'required:adduser',
          'date' => 'required:adduser',
          'point' => 'required:adduser|max:25',
          'anumber' => 'required:adduser|max:25',
          ]);
  
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
        
      $adduser=DB::table('adduser')->insert($data);
      return redirect()->route('requestpage');
      

      }

      public function ocalldata()
      {
          $alldata=DB::table('adduser')->get();
          return view('pages.ocalldata',compact('alldata'));
      }


      public function Addquarter(){
          return view('pages.addquarter');
      }
      
      public function allquarteraoc(){
          $allquarter=DB::table('quarter')->get();
          return view('pages.aocallquarter',compact('allquarter'));
      }

      public function allquarter()
      {
          $allquarter=DB::table('quarter')->get();
          return view('pages.allquarter',compact('allquarter'));
      }

      public function adduserbyadmin(){
          return view('pages.adduserbyadmin');
      }

      public function alldatabyadmin(){
        $alldata=DB::table('adduser')->get();
        return view('pages.alldatabyadmin',compact('alldata'));
      }
   
    
    public function RequestPage(){
        return view('pages.requested');
      }
    

      public function changepass(){
          return view('pages.ChangePassword');
      }
    public function updatepass(Request $request,$id){
        $validatedData = $request->validate([
            'password' => ['required', 'string', 'min:1', 'confirmed'],
          ]);

          $data=array();
    //$data['name']=$request->name;
    $data['password']=$request->password;
       $category=DB::table('users')->where('id',$id)->update($data);
          //'password' => Hash::make($data['password']),
         // $category=DB::table('users')->where('id',$id)->update($data);
        }

       public function addcomment(){
           return view('pages.addcomment');
       }
        
    public function CheckComment(){
        $comments=DB::table('addcomment')->get();
//        dd($comments);
       return view('pages.checkcomment',compact('comments'));
    }

    public function CheckCommentByOc(){
        $comments=DB::table('addcomment')->get();
//        dd($comments);
       return view('pages.checkcommentbyoc',compact('comments'));
    }
    
}
