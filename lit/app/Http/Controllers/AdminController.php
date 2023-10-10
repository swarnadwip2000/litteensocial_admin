<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\date; 
use Illuminate\Support\Facades\validator;
use Illuminate\validation\Rule;
use DB;
use Session;
use App\Models\Usermodel;
use App\Models\Advertiserrmodel;



class AdminController extends Controller
{
    public function login()
    {
        $data= DB::table('user_managements')->get();
        return view('admin/login',['data'=>$data]);
    }

    public function logindb(Request $request){
      $email=$request->post('email');
      $password=md5($request->post('password'));
     $n= DB::table('users')->where('email',$email)->where('password',$password)->count();
     if($n>0){
      $data=DB::table('users')->where('email',$email)->where('password',$password)->first();
      // $request->session()->put('userid', $data->userid);
      // $request->session()->put('islogin', true);
      // $request->session()->put('userrole', $data->userrole);
      $request->session()->put('email', $email);

     
      return redirect('/dashboard');
     }
     else{
      return redirect('/');
     }

      
    }


    public function logout(Request $request)
    {


        $request->session()->forget('email');
        return redirect('/');
    }

    public function dashboard()
    {
       
        return view('admin/dashboard');
    }


    public function addusermanagement(Request $request){
      $data1 = DB::table('country')->get();
      $data2 = DB::table('status')->get();
    //   print_r($data2);die();
      return view('admin/addusermanagement',['data1' => $data1, 'data2' => $data2]);
      
  
  }

    public function usermanagement(Request $request){

        $data= DB::table('user_managements')->get();
        return view('admin/usermanagement',['data'=>$data]);
        
    
    }
   
    public function saveusermanagement(Request $request)
    {

        $rules = [
            'mobile' => 'required|string|min:3|max:14',
            'email' => 'required|string|email|max:80'
          ];
          $validator = Validator::make($request->all(), $rules);
          if ($validator->fails()) {
            return redirect('usermanagement')
              ->withInput()
              ->withErrors($validator);
          } else {
            try {
        $data=$request->post();
        $id=$request->post('idhf');
        unset($data['idhf']);
        unset($data['submit']); 
        unset($data['_token']);
        $premium = isset($_POST['premium']) ? $_POST['premium'] : null;
        $bgc_verified = isset($_POST['bgc_verified']) ? $_POST['bgc_verified'] : null;

        if ($request->hasFile('profile_picture')) {  //check the file present or not
          $image = $request->file('profile_picture'); //get the file
          $name = "lit".'.'.$image->getClientOriginalExtension(); //get the  file extention
          $destinationPath = public_path('/images/usermanagement'); //public path folder dir
          $image->move($destinationPath, $name);  //mve to destination you mentioned 
          $data['profile_picture']=$name;
      }

      if ($request->hasFile('background_image')) {  //check the file present or not
        $image = $request->file('background_image'); //get the file
        $name = "lit".'.'.$image->getClientOriginalExtension(); //get the  file extention
        $destinationPath = public_path('/images/usermanagement'); //public path folder dir
        $image->move($destinationPath, $name);  //mve to destination you mentioned 
        $data['background_image']=$name;
    }

    $data['username'] = 'pitam';
    
    $data['create_user'] = 1;
    $data['update_user'] = 1;
    $data['created_at'] = date('Y-m-d');
    $data['updated_at'] = date('Y-m-d');
    $data['ip'] = $_SERVER['REMOTE_ADDR'];

        if(!empty($id))
        {
            Usermodel::where('id',$id)->update($data);
        }
        else{
            Usermodel::create($data);
        }
        return redirect('usermanagement')->with('failed', "User added failed");
    } catch (Exception $e) {
        return redirect('usermanagement')->with('failed', "User added failed");
      }
      
    }
    }

   

public function update_usermanagement()
    {
      $id=$_GET['pid'];
      $data= DB::table('user_managements')->where('id',$id)->first();
      $data1 = DB::table('country')->get();
      $data2 = DB::table('status')->get();
      return view('admin/addusermanagement',['data1' => $data1, 'data2' => $data2, 'data' => $data]);
     
    }

    public function delete_usermanagement($id)
    {
      DB::table('user_managements')->where('id',$id)->delete();
      return redirect('/usermanagement');
       
    }


    public function addadvertiser(Request $request){
        $data1 = DB::table('country')->get();
        $data2 = DB::table('status')->get();
        return view('admin/addadvertiser',['data1' => $data1, 'data2' => $data2]);
        
    
    }
  
      public function listadvertiser(Request $request){
  
          $data= DB::table('advertiser')->get();
          return view('admin/listadvertiser',['data'=>$data]);
          
      
      }
     
      public function saveadvertiser(Request $request)
      {
        $rules = [
          'mobile' => 'required|string|min:3|max:14',
          'email' => 'required|string|email|max:80'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
          return redirect('listadvertiser')
            ->withInput()
            ->withErrors($validator);
        } else {
          try {
      $data=$request->post();
      $id=$request->post('idhf');
      unset($data['idhf']);
      unset($data['submit']); 
      unset($data['_token']);
      $premium = isset($_POST['premium']) ? $_POST['premium'] : null;
      $bgc_verified = isset($_POST['bgc_verified']) ? $_POST['bgc_verified'] : null;

      if ($request->hasFile('profile_picture')) {  //check the file present or not
        $image = $request->file('profile_picture'); //get the file
        $name = "lit".'.'.$image->getClientOriginalExtension(); //get the  file extention
        $destinationPath = public_path('/images/usermanagement'); //public path folder dir
        $image->move($destinationPath, $name);  //mve to destination you mentioned 
        $data['profile_picture']=$name;
    }

    if ($request->hasFile('background_image')) {  //check the file present or not
      $image = $request->file('background_image'); //get the file
      $name = "lit".'.'.$image->getClientOriginalExtension(); //get the  file extention
      $destinationPath = public_path('/images/usermanagement'); //public path folder dir
      $image->move($destinationPath, $name);  //mve to destination you mentioned 
      $data['background_image']=$name;
  }

  $data['username'] = 'pitam';
  
  $data['create_user'] = 1;
  $data['update_user'] = 1;
  $data['created_at'] = date('Y-m-d');
  $data['updated_at'] = date('Y-m-d');
  $data['ip'] = $_SERVER['REMOTE_ADDR'];

      if(!empty($id))
      {
        Advertiserrmodel::where('id',$id)->update($data);
      }
      else{
        Advertiserrmodel::create($data);
      }
      return redirect('listadvertiser')->with('failed', "User added failed");
  } catch (Exception $e) {
      return redirect('listadvertiser')->with('failed', "User added failed");
    }
    
  }
      }
     
  public function update_advertiser()
      {
        $id=$_GET['pid'];
        $data= DB::table('advertiser')->where('id',$id)->first();
        $data1 = DB::table('country')->get();
        $data2 = DB::table('status')->get();
        return view('admin/addadvertiser',['data1' => $data1, 'data2' => $data2, 'data' => $data]);
       
      }

      public function delete_advertiser($id)
      {
        DB::table('user_managements')->where('id',$id)->delete();
        return redirect('/listadvertiser');
         
      }
  

} 
 
 
 
