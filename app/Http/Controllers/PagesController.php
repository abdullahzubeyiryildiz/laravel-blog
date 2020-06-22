<?php

namespace App\Http\Controllers;

use App\Post;


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
}
