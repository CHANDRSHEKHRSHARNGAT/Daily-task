<?php
namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;
class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function registerUser(Request $request)  
    {  
        //dd( $request);
      //  print_r($request->all());exit;
     $request->validate([  
      //'first_name'=>'required', 
     // 'last_name'=> 'required',  
     // 'email_id'=> 'required',
      //'username'=> 'required',
      // 'password'=> 'required',
       ]);  
  
 $users=new User(); 
 
   $users->username =$request->email_id;
   //$users->username =$request->username;
    $users->password = Hash::make($request->password);
    $users->first_name =$request->first_name;
    $users->last_name =$request->last_name;
      $users->email_id =$request->email_id;
    //  $users->status=$request->status;
       $res=$users->save();
        if($res){
         return redirect('login')->with('success','you have register successfully');
         }else{
          return back()->with('fail','something wrong');
         }
   }
   public function loginUser(Request $request){
  //  $request->validate([  
       // 'email_id'=> 'required',
       // 'password'=> 'required',
      //  ]);
       $users=User::where('email_id','=',$request->email_id)->first();
       // $res=$users->save();
      // print_r($users);exit;
      // $users=new User(); 
       //$users->email_id =$request->email;
       if($users){
          if(Hash::check($request->password, $users->password)){
            $request->session()->put('loginId',$users->id);
            return redirect ('billinglist');
           }else{
              return back()->with('fail','this user is not match');
           }
       }else{
          return back()->with('fail','this password is not registrd');
       }
    }      
}