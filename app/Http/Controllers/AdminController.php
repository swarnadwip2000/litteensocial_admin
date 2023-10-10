<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\date;
use Validator;
use Illuminate\validation\Rule;
use DB;
use Session;
use App\Models\Usermodel;
use App\Models\Interestsmodel;
use App\Models\Storiesmodel;

use App\Models\Advertiserrmodel;
use App\Models\Advertisment;
use App\Models\Storiestimedurationmodel;
use App\Models\Settingsmodel;
use App\Models\Newsfeedmodel;
use App\Models\Subscribemodel;
use App\Models\NewsfeedCommentmodel;
use App\Models\Plan;
use App\Models\StoriesCommentmodel;



class AdminController extends Controller
{
    public function login()
    {

      $title = 'LIT - Admin Login';

        $data= DB::table('user_managements')->get();
        return view('admin/login',['data'=>$data, 'title' => $title]);
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


      return redirect('/usermanagement');
     }
     else{
      return redirect('/dashboard');
     }


    }


    public function logout(Request $request)
    {


        $request->session()->forget('email');
        return redirect('/');
    }

    public function dashboard()
    {
      $title = 'LIT - Dashboard';
        return view('admin/dashboard',['title'=>$title]);
    }


    public function addusermanagement(Request $request){
      $title = 'LIT - Add User Management';
      $data1 = DB::table('country')->orderBy('country', 'ASC')->get();
      $data2 = DB::table('status')->get();
    //   print_r($data2);die();
      return view('admin/addusermanagement',['data1' => $data1, 'data2' => $data2, 'title' => $title]);


  }

    public function usermanagement(Request $request){
      $title = 'LIT - List User Management';
        $data= DB::table('user_managements')->get();
        return view('admin/usermanagement',['data'=>$data, 'title' => $title]);


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

        unset($data['_password']);

        $premium = isset($_POST['premium']) ? $_POST['premium'] : 0;
        $bgc_verified = isset($_POST['bgc_verified']) ? $_POST['bgc_verified'] : 0;
        $status = isset($_POST['status']) ? 0 : 1;

        if ($request->hasFile('profile_picture')) {  //check the file present or not
          $image = $request->file('profile_picture'); //get the file
          $name = rand(11111, 99999).'.'.$image->getClientOriginalExtension(); //get the  file extention
          $destinationPath = public_path('/images/usermanagement'); //public path folder dir
          $image->move($destinationPath, $name);  //mve to destination you mentioned
          $data['profile_picture']='http://lt-admin.mynewsystem.net/public/images/usermanagement/'.$name;
      }

      if ($request->hasFile('background_image')) {  //check the file present or not
        $image = $request->file('background_image'); //get the file
        $name = rand(11111, 99999).'.'.$image->getClientOriginalExtension(); //get the  file extention
        $destinationPath = public_path('/images/usermanagement'); //public path folder dir
        $image->move($destinationPath, $name);  //mve to destination you mentioned
        $data['background_image']='http://lt-admin.mynewsystem.net/public/public/images/usermanagement/'.$name;
    }


    $data['create_user'] = 1;
    $data['update_user'] = 1;
    $data['created_at'] = date('Y-m-d');
    $data['updated_at'] = date('Y-m-d');
    $data['ip'] = $_SERVER['REMOTE_ADDR'];
    $data['premium'] = $premium;
     $data['bgc_verified'] = $bgc_verified;
       $data['status'] = $status;

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
      $title = 'LIT - Update User Management';
      $id=$_GET['pid'];
      $data= DB::table('user_managements')->where('id',$id)->first();
      $data1 = DB::table('country')->orderBy('country', 'ASC')->get();
      $data2 = DB::table('status')->orderBy('status_type', 'ASC')->get();
      $data3 = DB::table('interest')->orderBy('interest', 'ASC')->get();
      $data4 = DB::table('school')->orderBy('school', 'ASC')->get();
      return view('admin/edit_usermanagement',['data1' => $data1, 'data2' => $data2, 'data' => $data, 'data3' => $data3, 'data4' => $data4, 'title' => $title]);

    }





    public function view_usermanagement()
    {
      $title = 'LIT - View User Management';
      $id=$_GET['pid'];
      $data= DB::table('user_managements')->where('id',$id)->first();
      $data1 = DB::table('country')->orderBy('country', 'ASC')->get();
      $data2 = DB::table('status')->orderBy('status_type', 'ASC')->get();
      $data3 = DB::table('interest')->orderBy('interest', 'ASC')->get();
      $data4 = DB::table('school')->orderBy('school', 'ASC')->get();
      return view('admin/view_usermanagement',['data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'data' => $data, 'title' => $title]);

    }





    public function delete_usermanagement($id)
    {
      DB::table('user_managements')->where('id',$id)->delete();
      return redirect('/usermanagement');

    }

    public function delete_pic(Request $request)
    {

      $image = Usermodel::find($request->id);
if($request->type==1){
        unlink("images/usermanagement/".$image->background_image);

        Usermodel::where("id", $request->id)->update(['background_image'=>null]);

       }
       else{
         unlink("images/usermanagement/".$image->profile_picture);

        Usermodel::where("id", $request->id)->update(['profile_picture'=>null]);
       }

      //return redirect('/update_usermanagement');

    }


    public function settingdelete_pic(Request $request)
    {

      $image = Settingsmodel::find($request->id);
if($request->type==1){
        unlink("images/settings/".$image->nav_bar_background);

        Settingsmodel::where("id", $request->id)->update(['nav_bar_background'=>null]);

       }
       else{
         unlink("images/settings/".$image->background_image);

         Settingsmodel::where("id", $request->id)->update(['background_image'=>null]);
       }

      //return redirect('/update_usermanagement');

    }

   // Interests

    public function addinterests(Request $request){
      $title = 'LIT - Add Interests';

      return view('admin/addinterests',['title' => $title]);


  }

    public function listinterests(Request $request){
      $title = 'LIT - List Interests';
        $data= DB::table('interest')->get();
        return view('admin/listinterests',['data'=>$data,'title'=>$title]);


    }

    public function saveinterests(Request $request)
    {

        $rules = [
            'interest' => 'required|string|min:1|max:80',

          ];
          $validator = Validator::make($request->all(), $rules);
          if ($validator->fails()) {
            return redirect('listinterests')
              ->withInput()
              ->withErrors($validator);
          } else {
            try {
        $data=$request->post();
        $id=$request->post('idhf');
        unset($data['idhf']);
        unset($data['submit']);
        unset($data['_token']);



    $data['created_at'] = date('Y-m-d');
    $data['updated_at'] = date('Y-m-d');


        if(!empty($id))
        {
            Interestsmodel::where('interest_id',$id)->update($data);
        }
        else{
          Interestsmodel::create($data);
        }
        return redirect('listinterests')->with('failed', "Interests added failed");
    } catch (Exception $e) {
        return redirect('listinterests')->with('failed', "Interests added failed");
      }

    }
    }



public function update_interests()
    {
      $title = 'LIT - Update Interests';
      $id=$_GET['pid'];
      $data= DB::table('interest')->where('interest_id',$id)->first();
      return view('admin/addinterests',['data' => $data,'title' => $title]);
    }





   public function delete_interests($id)
    {
      DB::table('interest')->where('interest_id',$id)->delete();
      return redirect('/listinterests');
    }



    public function listadvertisements(Request $request){
      $title = 'LIT - List Advertisment';
      $advertisments = Advertisment::with('plan')->orderBy('id','desc')->get();
      return view('admin.listadvertisements')->with(compact('title','advertisments'));

    }

    public function advertiserChangeStatus(Request $request)
    {
        $user = Advertisment::find($request->user_id);
        $plan = Plan::find($user->plan_id);
        $user->status = $request->status;
        $user->plan_expiry_date = date('Y-m-d', strtotime('+' . $plan->duration . ' days'));
        $user->save();
        return response()->json(['success' => 'Status change successfully.','user'=>$user]);
    }

    public function advertismentDelete($id)
    {
        Advertisment::find($id)->delete();
        return redirect()->back()->with('error', 'Advertisment has been deleted from site');
    }

    // Advertiser


    public function addadvertiser(Request $request){
      $title = 'LIT - Add Advertiser';
        $data1 = DB::table('country')->get();
        $data2 = DB::table('status')->get();
        return view('admin/addadvertiser',['data1' => $data1, 'data2' => $data2, 'title' => $title]);


    }

      public function listadvertiser(Request $request){
        $title = 'LIT - List Advertiser';
          $data= DB::table('advertiser')->get();
          return view('admin/listadvertiser',['data'=>$data, 'title' => $title]);


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
      $sendcompanyaddress = isset($_POST['sendcompanyaddress']) ? $_POST['sendcompanyaddress'] : null;





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
        $data['password'] = rand(11111, 99999);
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
        $title = 'LIT - Update Advertiser';
        $id=$_GET['pid'];
        $data= DB::table('advertiser')->where('id',$id)->first();
        $data1 = DB::table('country')->get();
        $data2 = DB::table('status')->get();
        return view('admin/addadvertiser',['data1' => $data1, 'data2' => $data2, 'data' => $data, 'title' => $title]);

      }


      public function view_advertiser()
      {
        $title = 'LIT - View Advertiser';
        $id=$_GET['pid'];
        $data= DB::table('advertiser')->where('id',$id)->first();
        $data1 = DB::table('country')->get();
        $data2 = DB::table('status')->get();
        return view('admin/view_advertiser',['data1' => $data1, 'data2' => $data2, 'data' => $data, 'title' => $title]);

      }

      public function delete_advertiser($id)
      {
        DB::table('user_managements')->where('id',$id)->delete();
        return redirect('/listadvertiser');

      }












    public function addsettings(Request $request){
      $title = 'LIT - Add Settings';
      return view('admin/addsettings',['title'=>$title]);


  }

    public function listsettings(Request $request){
      $title = 'LIT - List Settings';
        $data= DB::table('settings')->get();
        return view('admin/listsettings',['data'=>$data,'title'=>$title]);


    }

    public function savesettings(Request $request)
    {

      $rules = [

      ];
      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        return redirect('listsettings')
          ->withInput()
          ->withErrors($validator);
      } else {
        try {
    $data=$request->post();
    $id=$request->post('idhf');
    unset($data['idhf']);
    unset($data['submit']);
    unset($data['_token']);




  if ($request->hasFile('background_image')) {  //check the file present or not
    $image = $request->file('background_image'); //get the file
    $name = rand(11111, 99999).'.'.$image->getClientOriginalExtension(); //get the  file extention
    $destinationPath = public_path('/images/settings'); //public path folder dir
    $image->move($destinationPath, $name);  //mve to destination you mentioned
    $data['background_image']='http://lt-admin.mynewsystem.net/public/images/settings/'.$name;
}
if ($request->hasFile('nav_bar_background')) {  //check the file present or not
  $image = $request->file('nav_bar_background'); //get the file
  $name = rand(11111, 99999).'.'.$image->getClientOriginalExtension(); //get the  file extention
  $destinationPath = public_path('/images/settings'); //public path folder dir
  $image->move($destinationPath, $name);  //mve to destination you mentioned
  $data['nav_bar_background']='http://lt-admin.mynewsystem.net/public/images/settings/'.$name;
}

$data['create_user'] = 1;
$data['update_user'] = 1;
$data['created_at'] = date('Y-m-d');
$data['updated_at'] = date('Y-m-d');
$data['ip'] = $_SERVER['REMOTE_ADDR'];

    if(!empty($id))
    {
      Settingsmodel::where('id',$id)->update($data);
    }
    else{
      Settingsmodel::create($data);
    }
    return redirect('listsettings')->with('failed', "User added failed");
} catch (Exception $e) {
    return redirect('listsettings')->with('failed', "User added failed");
  }

}
    }

public function update_settings()
    {
      $title = 'LIT - Update Settings';
      $id=$_GET['pid'];
      $data= DB::table('settings')->where('id',$id)->first();

      return view('admin/addsettings',['data' => $data,'title' => $title]);

    }


    public function view_settings()
    {
      $title = 'LIT - View Settings';
      $id=$_GET['pid'];
      $data= DB::table('settings')->where('id',$id)->first();

      return view('admin/view_settings',['data' => $data,'title' => $title]);

    }

    public function delete_settings($id)
    {
      DB::table('settings')->where('id',$id)->delete();
      return redirect('/listsettings');

    }








    public function addnewsfeed(Request $request){
      $title = 'LIT - Add News Feed';
      $data1 = DB::table('visible_type')->orderBy('visible_type', 'ASC')->get();
      // $data2 = DB::table('status')->get();
    //   print_r($data2);die();
      return view('admin/addnewsfeed',['title' => $title,'data1' => $data1]);


  }

    public function listnewsfeed(Request $request){
      $title = 'LIT - List News Feed';
        // $data= DB::table('news_feed_tbl')->get();

        $data=Newsfeedmodel::join('user_managements','user_managements.id','=','news_feed_tbl.user_id')->orderBy('news_feed_tbl.id','DESC')->where('news_feed_tbl.status','0')->get(['news_feed_tbl.id as id','news_feed_tbl.thumbnail as thumbnail','news_feed_tbl.user_id as user_id','news_feed_tbl.news_type as news_type','news_feed_tbl.file as file','news_feed_tbl.description as description','news_feed_tbl.visible_type as visible_type','news_feed_tbl.parent_id as parent_id','news_feed_tbl.tag as tag','news_feed_tbl.status as status','news_feed_tbl.file_type as file_type','news_feed_tbl.created_at','user_managements.background_image as background_image','user_managements.profile_picture as profile_picture', 'user_managements.mobile as mobile','user_managements.email as email', 'user_managements.firstname as firstname', 'user_managements.lastname as lastname','user_managements.username as username']);



        return view('admin/listnewsfeed',['data'=>$data, 'title' => $title]);


    }

    public function savenewsfeed(Request $request)
    {

        $rules = [
            // 'mobile' => 'required|string|min:3|max:14',
            // 'email' => 'required|string|email|max:80'
          ];
          $validator = Validator::make($request->all(), $rules);
          if ($validator->fails()) {
            return redirect('listnewsfeed')
              ->withInput()
              ->withErrors($validator);
          } else {
            try {
        $data=$request->post();
        $id=$request->post('idhf');
        unset($data['idhf']);
        unset($data['submit']);
        unset($data['_token']);


        $status = isset($_POST['status']) ? $_POST['status'] : NULL;

        if ($request->hasFile('file')) {  //check the file present or not
          $image = $request->file('file'); //get the file
          $name = rand(11111, 99999).'.'.$image->getClientOriginalExtension(); //get the  file extention
          $destinationPath = public_path('/images/newsfeed'); //public path folder dir
          $image->move($destinationPath, $name);  //mve to destination you mentioned
          $data['file']='http://lt-admin.mynewsystem.net/public/images/newsfeed/'.$name;
      }



    $data['create_user'] = 1;
    $data['update_user'] = 1;
        $data['created_at'] = date('Y-m-d');
    $data['updated_at'] = date('Y-m-d');
    $data['ip'] = $_SERVER['REMOTE_ADDR'];

       $data['status'] = $status;

        if(!empty($id))
        {
          Newsfeedmodel::where('id',$id)->update($data);
        }
        else{
          Newsfeedmodel::create($data);
        }
        return redirect('listnewsfeed')->with('failed', "News Feed added failed");
    } catch (Exception $e) {
        return redirect('listnewsfeed')->with('failed', "News Feed added failed");
      }

    }
    }



public function updatenewsfeed()
    {
      $id=$_GET['id'];
      $title = 'LIT - Update News Feed';

$data1=array();
       $data4=Newsfeedmodel::join('user_managements','user_managements.id','=','news_feed_tbl.user_id')->orderBy('news_feed_tbl.id','DESC')->where('news_feed_tbl.id',$id)->get(['news_feed_tbl.id as id','news_feed_tbl.thumbnail as thumbnail','news_feed_tbl.user_id as user_id','news_feed_tbl.news_type as news_type','news_feed_tbl.file as file','news_feed_tbl.description as description','news_feed_tbl.visible_type as visible_type','news_feed_tbl.parent_id as parent_id','news_feed_tbl.tag as tag','news_feed_tbl.file_type as file_type','news_feed_tbl.created_at','user_managements.background_image as background_image','user_managements.profile_picture as profile_picture', 'user_managements.mobile as mobile','user_managements.email as email', 'user_managements.firstname as firstname', 'user_managements.lastname as lastname','user_managements.username as username']);
if(!empty($data4)){
    $i=0;
    foreach($data4 as $data4){
      $data1[$i]=$data4;
       $data=NewsfeedCommentmodel::join('user_managements','user_managements.id','=','news_feed_comment.user_id')->where('news_feed_comment.parent_id',0)->where('news_feed_comment.news_feed_id',$data4['id'])->orderBy('news_feed_comment.id','asc')->get(['news_feed_comment.id as id','news_feed_comment.user_id as user_id','news_feed_comment.news_feed_id as news_feed_id','news_feed_comment.description as description','news_feed_comment.parent_id as parent_id','news_feed_comment.created_at','user_managements.background_image as background_image','user_managements.profile_picture as profile_picture', 'user_managements.mobile as mobile','user_managements.email as email', 'user_managements.firstname as firstname', 'user_managements.lastname as lastname','user_managements.username as username']);
$i=0;

foreach($data as $data){
  $data1[$i]['message']=$data;
  $data3=NewsfeedCommentmodel::join('user_managements','user_managements.id','=','news_feed_comment.user_id')->where('news_feed_comment.parent_id',$data['id'])->orderBy('news_feed_comment.id','asc')->get(['news_feed_comment.id as id','news_feed_comment.user_id as user_id','news_feed_comment.news_feed_id as news_feed_id','news_feed_comment.description as description','news_feed_comment.parent_id as parent_id','news_feed_comment.created_at','user_managements.background_image as background_image','user_managements.profile_picture as profile_picture', 'user_managements.mobile as mobile','user_managements.email as email', 'user_managements.firstname as firstname', 'user_managements.lastname as lastname','user_managements.username as username']);

  $data1[$i]['message']['reply']=$data3;

  $i++;
}
    }
  }



      return view('admin/addnewsfeed',['title' => $title,'data' => $data1]);

    }


    public function deletenewsfeed(Request $request)
    {
		$id=
      DB::table('news_feed_tbl')->where('id',$request->id)->delete();
      return redirect('/listnewsfeed');

    }

 public function deletenewsfeedcomment($id)
    {
      NewsfeedCommentmodel::where('id',$id)->delete();
     NewsfeedCommentmodel::where('parent_id',$id)->delete();

      return redirect('/listnewsfeed');

    }


//Stories
public function addstories(Request $request){
  $title = 'LIT - Add Stories';
  $data1 = DB::table('visible_type')->orderBy('visible_type', 'ASC')->get();
  // $data2 = DB::table('status')->get();
//   print_r($data2);die();
  return view('admin/addstories',['title' => $title,'data1' => $data1]);


}

public function liststories(Request $request){
  $title = 'LIT - List Stories';
    // $data= DB::table('stories')->get();

    $data=Storiesmodel::join('user_managements','user_managements.id','=','stories.user_id')->orderBy('stories.id','DESC')->where('stories.status','0')->get(['stories.id as id','stories.thumbnail as thumbnail','stories.user_id as user_id','stories.stories_type as stories_type','stories.file as file','stories.description as description','stories.visible_type as visible_type','stories.parent_id as parent_id','stories.tag as tag','stories.status as status','stories.file_type as file_type','stories.created_at','user_managements.background_image as background_image','user_managements.profile_picture as profile_picture', 'user_managements.mobile as mobile','user_managements.email as email', 'user_managements.firstname as firstname', 'user_managements.lastname as lastname','user_managements.username as username']);



    return view('admin/liststories',['data'=>$data, 'title' => $title]);


}

public function savestories(Request $request)
{

    $rules = [
        // 'mobile' => 'required|string|min:3|max:14',
        // 'email' => 'required|string|email|max:80'
      ];
      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        return redirect('liststories')
          ->withInput()
          ->withErrors($validator);
      } else {
        try {
    $data=$request->post();
    $id=$request->post('idhf');
    unset($data['idhf']);
    unset($data['submit']);
    unset($data['_token']);


    $status = isset($_POST['status']) ? $_POST['status'] : NULL;

    if ($request->hasFile('file')) {  //check the file present or not
      $image = $request->file('file'); //get the file
      $name = rand(11111, 99999).'.'.$image->getClientOriginalExtension(); //get the  file extention
      $destinationPath = public_path('/images/stories'); //public path folder dir
      $image->move($destinationPath, $name);  //mve to destination you mentioned
      $data['file']='http://lt-admin.mynewsystem.net/public/images/stories/'.$name;
  }



$data['create_user'] = 1;
$data['update_user'] = 1;
    $data['created_at'] = date('Y-m-d');
$data['updated_at'] = date('Y-m-d');
$data['ip'] = $_SERVER['REMOTE_ADDR'];

   $data['status'] = $status;

    if(!empty($id))
    {
      Storiesmodel::where('id',$id)->update($data);
    }
    else{
      Storiesmodel::create($data);
    }
    return redirect('liststories')->with('failed', "Stories added failed");
} catch (Exception $e) {
    return redirect('liststories')->with('failed', "Stories added failed");
  }

}
}



public function updatestories()
{
  $id=$_GET['id'];
  $title = 'LIT - Update Stories';

$data1=array();
   $data4=Storiesmodel::join('user_managements','user_managements.id','=','stories.user_id')->orderBy('stories.id','DESC')->where('stories.id',$id)->get(['stories.id as id','stories.thumbnail as thumbnail','stories.user_id as user_id','stories.stories_type as stories_type','stories.file as file','stories.description as description','stories.visible_type as visible_type','stories.parent_id as parent_id','stories.tag as tag','stories.file_type as file_type','stories.created_at','user_managements.background_image as background_image','user_managements.profile_picture as profile_picture', 'user_managements.mobile as mobile','user_managements.email as email', 'user_managements.firstname as firstname', 'user_managements.lastname as lastname','user_managements.username as username']);
if(!empty($data4)){
$i=0;
foreach($data4 as $data4){
  $data1[$i]=$data4;
   $data=StoriesCommentmodel::join('user_managements','user_managements.id','=','stories_comment.user_id')->where('stories_comment.parent_id',0)->where('stories_comment.stories_id',$data4['id'])->orderBy('stories_comment.id','asc')->get(['stories_comment.id as id','stories_comment.user_id as user_id','stories_comment.stories_id as stories_id','stories_comment.description as description','stories_comment.parent_id as parent_id','stories_comment.created_at','user_managements.background_image as background_image','user_managements.profile_picture as profile_picture', 'user_managements.mobile as mobile','user_managements.email as email', 'user_managements.firstname as firstname', 'user_managements.lastname as lastname','user_managements.username as username']);
$i=0;

foreach($data as $data){
$data1[$i]['message']=$data;
$data3=StoriesCommentmodel::join('user_managements','user_managements.id','=','stories_comment.user_id')->where('stories_comment.parent_id',$data['id'])->orderBy('stories_comment.id','asc')->get(['stories_comment.id as id','stories_comment.user_id as user_id','stories_comment.stories_id as stories_id','stories_comment.description as description','stories_comment.parent_id as parent_id','stories_comment.created_at','user_managements.background_image as background_image','user_managements.profile_picture as profile_picture', 'user_managements.mobile as mobile','user_managements.email as email', 'user_managements.firstname as firstname', 'user_managements.lastname as lastname','user_managements.username as username']);

$data1[$i]['message']['reply']=$data3;

$i++;
}
}
}



  return view('admin/addstories',['title' => $title,'data' => $data1]);

}


public function deletestories(Request $request)
{
$id=
  DB::table('stories')->where('id',$request->id)->delete();
  return redirect('/liststories');

}




  //  Add Subscribe

  public function addsubscribe(Request $request){
    $title = 'LIT - Add Subscribe';
    //$data1 = DB::table('visible_type')->orderBy('visible_type', 'ASC')->get();

    return view('admin/addsubscribe',['title' => $title]);


}

  public function listsubscribe(Request $request){
    $title = 'LIT - List Subscribe';
    $data1 = DB::table('subscribe')->orderBy('id', 'DESC')->get();
      //$data=Subscribemodel::join('user_managements','user_managements.id','=','user_subscribe.user_id')->orderBy('subscribe.id','DESC')->where('subscribe.status','0')->get(['subscribe.id as id','subscribe.description as description','subscribe.status as status','subscribe.created_at', 'user_managements.mobile as mobile','user_managements.email as email', 'user_managements.firstname as firstname', 'user_managements.lastname as lastname','user_managements.username as username']);
      return view('admin/listsubscribe',['data'=>$data1,'title' => $title]);

      //
  }

  public function savesubscribe(Request $request)
  {

      $rules = [
          // 'mobile' => 'required|string|min:3|max:14',
          // 'email' => 'required|string|email|max:80'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
          return redirect('listsubscribe')
            ->withInput()
            ->withErrors($validator);
        } else {
          try {
      $data=$request->post();
      $id=$request->post('idhf');
      unset($data['idhf']);
      unset($data['submit']);
      unset($data['_token']);


      $status = isset($_POST['status']) ? 0 : 1;





  $data['create_user'] = 1;
  $data['update_user'] = 1;
      $data['created_at'] = date('Y-m-d');
  $data['updated_at'] = date('Y-m-d');
  $data['ip'] = $_SERVER['REMOTE_ADDR'];

  $data['status'] = $status;

      if(!empty($id))
      {
        Subscribemodel::where('id',$id)->update($data);
      }
      else{
        Subscribemodel::create($data);
      }
      return redirect('listsubscribe')->with('failed', "Subscribe added failed");
  } catch (Exception $e) {
      return redirect('listsubscribe')->with('failed', "Subscribe added failed");
    }

  }
  }


  public function updatesubscribe()
      {
        $title = 'LIT - Update Subscribe';
        $id=$_GET['pid'];
        $data= DB::table('subscribe')->where('id',$id)->first();

        return view('admin/addsubscribe',['data' => $data, 'title' => $title]);

      }







  public function deletesubscribe($id)
  {
    DB::table('subscribe')->where('id',$id)->delete();
    return redirect('/listsubscribe');

  }

    // Stories Time Duration


    public function add_stories_time_duration(Request $request){
      $title = 'LIT - Add Stories Time Duration';

        return view('admin/add_stories_time_duration',['title' => $title]);


    }

      public function list_stories_time_duration(Request $request){
        $title = 'LIT - List Stories Time Duration';
          $data= DB::table('stories_time_settings')->get();
          return view('admin/list_stories_time_duration',['data'=>$data, 'title' => $title]);


      }

      public function save_stories_time_duration(Request $request)
      {

        $rules = [
          'mobile' => 'required|string|min:3|max:14',
          'email' => 'required|string|email|max:80'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
          return redirect('list_stories_time_duration')
            ->withInput()
            ->withErrors($validator);
        } else {
          try {
      $data=$request->post();
      $id=$request->post('idhf');
      unset($data['idhf']);
      unset($data['submit']);
      unset($data['_token']);

  $data['create_user'] = 1;
  $data['update_user'] = 1;
  $data['created_at'] = date('Y-m-d');
  $data['updated_at'] = date('Y-m-d');


      if(!empty($id))
      {
        Storiestimedurationmodel::where('id',$id)->update($data);
      }
      else{
        Storiestimedurationmodel::create($data);
      }
      return redirect('list_stories_time_duration')->with('failed', "User added failed");
  } catch (Exception $e) {
      return redirect('list_stories_time_duration')->with('failed', "User added failed");
    }

  }
      }

  public function update_stories_time_duration()
      {
        $title = 'LIT - Update Stories Time Duration';
        $id=$_GET['pid'];
        $data= DB::table('stories_time_settings')->where('id',$id)->first();

        return view('admin/add_stories_time_duration',['data' => $data, 'title' => $title]);

      }




      public function delete_stories_time_duration($id)
      {
        DB::table('stories_time_settings')->where('id',$id)->delete();
        return redirect('/list_stories_time_duration');

      }



}



