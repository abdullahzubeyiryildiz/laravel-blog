<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
   public function getIndex() {
       return view('pages.welcome');
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
