<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //

    public function home()
    {
        $data = [
            'title' => 'Clean Blog', 
            'backgroundPhoto' => 'img/home-bg.jpg',
            'small' => 'A Blog Them By Start Bootstrap'
        ];
        return view('/home', $data);
    }
    public function aboutme()
    {
      $data =[  'title' => 'About Me', 
            'backgroundPhoto' => 'img/about-bg.jpg',
            'small' => 'This is what i do'
        ];
        return view('/aboutme', $data);
    }
    public function sample()
    {
    $data = [  'title' => 'Man must explore, and this is exploration at its  greatest', 
    'backgroundPhoto' => 'img/post-sample-image.jpg',
    'subtitle' => 'Problems look mighty small from 150 miles up',
    'small' => 'Posted by Start Bootstrap on August 24, 2018'
];
return view('/sample', $data);
    }
    public function contact()
    {
        $data =[  'title' => 'Contact Me', 
        'backgroundPhoto' => 'img/contact-bg.jpg',
        'small' => 'Have questions? I have answers!'
    ];
    return view('/contact', $data);
    }
}
