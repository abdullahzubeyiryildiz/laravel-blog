<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Post;

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Session;

class PagesController extends Controller
{
   public function getIndex() {
    $posts = Post::orderBy('created_at','desc')->limit(4)->get();
    return view('pages.welcome')->withPosts($posts);
  }

  public function getAbout() {
   $first = 'Abdullah';
   $last = 'Yıldız';
   $fullname = $first . " " . $last;
   $email = 'pratikyazilimci@gmail.com';
         // return view('pages.about')->with("fullname",$fullname);
         // return view('pages.about')->withFullname($fullname)->withEmail($email);
   $data = [];
   $data['email'] = $email;
   $data['fullname'] = $fullname;
   return view('pages.about')->withData($data);
  }

  public function getContact()
  {
    return view('pages.contact');
  }

  public function postContact(Request $request)
  {
     $this->validate($request, [
      'email' => 'required|email',
      'subject' => 'required|min:3',
       'message' => 'required|min:10'
    ]);

     $data = [
      'email' => $request->email,
      'subject' =>  $request->subject,
      'bodyMessage' => $request->message
     ];
       mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('pratikyazilimci@gmail.com');
            $message->subject($data['subject']);
        });

       Session::flash('success','Mail Başarıyla Gönderildi.');
       return redirect('/');
  }
}
