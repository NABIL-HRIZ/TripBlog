<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ourPost;
use App\Models\TextImonials;
use App\Models\TalkUs;
use Illuminate\Support\Facades\Auth;
use Alert;


class HomeController extends Controller
{

public function redirect(){

    $posts=ourPost::where('status','=','active')->orderBy('created_at','desc')->get();

    $opinions=TextImonials::orderBy('created_at','desc')->get();
   

    if(Auth::id()){

        if(Auth::user()->userType=='user'){
            return view('user.home',compact('posts','opinions'));
        }

        else{
            return view('admin.home');
        }
    }
    else{
        return redirect()->back();
    }
}

public function index(){
    $posts=ourPost::where('status','=','active')->orderBy('created_at','desc')->get();
    $opinions=TextImonials::orderBy('created_at','desc')->get();
  

    if(Auth::id()){
        return view('user.home',compact('posts','opinions'));

    }

    else{
        return view('user.home',compact('posts','opinions'));
    }
    
}

public function delete_user($id){
    $user=User::find($id);
    $user->delete();
    return redirect()->back();
}

public function post_details($id){

    $post=ourPost::find($id);

    return view('user.post_details',compact('post'));

}

public function post_from_user(){
    return view('user.post_from_user');
}



public function add_post(Request $request){

    $user=Auth()->user();
    $userId=$user->id;
    $userType=$user->userType;
    $name=$user->name;

    $post=new ourPost;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time().'.'.$image->getClientOriginalExtension();

        // Move the uploaded file to the desired location
        $image->move('image', $imagename);

        // Assign the file name to the 'image' attribute of the employee
        $post->image = $imagename;
    }

    $post->title=$request->title;
    $post->description=$request->description;
    $post->status='active';
    $post->name=$name;
    $post->userId=$userId;
    $post->userType=$userType;




    $post->save();

    Alert::success('congras','New Post Added');
    return redirect()->back()->with('success','Post Successefly Added');

  }

  public function my_posts(){
    $posts=ourPost::all();

    if(Auth::id()){
        $user_id=Auth::user()->id;
        $posts=ourPost::where('userId',$user_id)->where('status','=','active')->orderBy('created_at','desc')->get();
        return view('user.my_posts',compact('posts'));
    }
    else{
        return redirect()->back();
    }

  }

  public function delete_post($id){
    $data=ourPost::find($id);
    $data->delete();
    return redirect()->back();
  }


  public function update_post($id){
    $data=ourPost::find($id);
    return view('user.update_post_user',compact('data'));
  }

  public function edit_post(Request $request, $id){
        
    $posts=ourPost::find($id);
    $posts->title=$request->title;
    $posts->description=$request->description;

   

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time().'.'.$image->getClientOriginalExtension();

        // Move the uploaded file to the desired location
        $image->move('image', $imagename);

        // Assign the file name to the 'image' attribute of the employee
        $posts->image = $imagename;
    }
    $posts->save();
    Alert::success('congras','Succesfully Updated');
    return redirect()->back()->with('success','Success Update');
}



public function my_opinion(){
    return view('user.my_opinion');
  }

  public function add_opinion(Request $request){


    $opinion=new TextImonials;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time().'.'.$image->getClientOriginalExtension();

        // Move the uploaded file to the desired location
        $image->move('image', $imagename);

        // Assign the file name to the 'image' attribute of the employee
        $opinion->image = $imagename;
    }

    $opinion->name=$request->name;
    $opinion->comment=$request->comment;
    $opinion->status=$request->status;
    
    $opinion->save();

    return redirect()->back()->with('success','Your Opinion  Successefly Added');

  }


  public function TalkUs(Request $request){
    $email=new TalkUs;

    $email->email=$request->email;

    $email->save();
    return redirect()->back()->with('success','Email Successfly sended');
  }

















  public function welcome(){
    return view('welcome');
  }
}
