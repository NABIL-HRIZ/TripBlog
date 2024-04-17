<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ourPost;
use App\Models\TalkUs;
use App\Models\TextImonials;
use App\Models\User;
use Alert;
use Notification;
use App\Notifications\BlogNotification;


class AdminController extends Controller
{
      public function post_page(){
        return view('admin.post_page');
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

        return redirect()->back()->with('success','Post Successefly Added');

      }

      public function posts_view(){

        $posts = ourPost::orderBy('created_at', 'desc')->get();
        return view('admin.posts_view',compact('posts'));
      }

      public function delete_post($id) {
        $data = ourPost::find($id);
        
        $data->delete();
        Alert::success('congras','Post deleted successfully');
        return redirect()->back()->with('success', 'Post deleted successfully');
    }
    public function update_post($id){

      $posts=ourPost::find($id);

      return view('admin.update_post',compact('posts'));

    }

    public function update(Request $request,$id){

      $posts=ourPost::find($id);
      $posts->title=$request->title;
      $posts->description=$request->description;


     if($request->hasfile('image')){
      $image=$request->file('image');
      $imagename=time().'.'.$image->getClientOriginalExtension();

      // move 

      $image->move('image',$imagename);

      $posts->image=$imagename;

     }

     $posts->save();
     return redirect()->back()->with('success','success update post ');
    }


    public function users_views(){
      $users=user::all();
      return view('admin.users_views',compact('users'));
    }

    public function accept_post($id){
      $data=ourPost::find($id);
      $data->status='active';
      $data->save();
      Alert::success('Statue active');
      return redirect()->back();
    }
    public function reject_post($id){
      $data=ourPost::find($id);
      $data->status='rejected';
      $data->save();
      Alert::warning('Statue rejected');
      return redirect()->back();
    }

    public function textImonials_admin(){

      $opinions=TextImonials::orderBy('created_at','desc')->get();

      return view('admin.textImonials_admin',compact('opinions'));
    }

    public function delete_opinion($id){
      $data=TextImonials::find($id);
      $data->delete();
      Alert::info('Opinion succefuly deleted');
      return redirect()->back();
    }

    public function emails(){
      $emails=TalkUs::all();
      return view('admin.emails',compact('emails'));
    }

    public function emailNotification($id){

      $data=TalkUs::find($id);
      return view('admin.emailNotification',compact('data'));
    }

    public function sendEmail(Request $request, $id){
      $data=TalkUs::find($id);

      $details=[
        'greeting'=>$request->greeting,
        'body'=>$request->body,
        'ActionText'=>$request->ActionText,
        'ActionUrl'=>$request->ActionUrl,
        'endPart'=>$request->endPart,

      ];
      Notification::send($data,new BlogNotification($details));

      Alert::success('Congras','Email Succesefully send ');
      return redirect()->back();

    }
}
