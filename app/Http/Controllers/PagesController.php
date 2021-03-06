<?php

namespace App\Http\Controllers;
use App\Post;


class PagesController extends Controller {
    
    public function getIndex() {
        $posts = Post::orderBy('id','asc')->limit(4)->get();

        return view ('pages.welcome')->withPosts($posts);
        #steps 
        #process variable data or params
        #talk to the model
        #receive data back from the model
        #compile and process the data from the model if needed
        # pass the data to the correct viw
    }

    public function getAbout() {

        $first='Jenniline';
        $last = 'Ebai';

        $fullname = $first . " " . $last ;
        $email = 'jennilineebai@gmail.com';
        $data = [];
        $data['fullname'] = $fullname;
        $data['email'] = $email;

        return view ('pages.about')->withData($data);

    }

    public function getContact(){
        return view ('pages.contact');
    }
  

}


?>