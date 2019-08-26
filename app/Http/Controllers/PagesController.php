<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PagesController extends Controller
{

    public function index(){

    // passing dynamic value to "index.blade.php"
        $title = 'Welcome To Laravel!';
        //return view('pages.index', compact('title'));
          return view('pages.index')->with('title', $title);


    }

    public function about(){

        // This value is not passing in the about page.
        $title = 'About Us';
        return view('pages.about')->with('title', $title);

    }

    public function services(){
        $data = array(
                'title'=>'Services',
                'services'=> ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }


}
