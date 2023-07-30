<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndController extends Controller
{
    function Home(){
        return view('front/home');
      }
    
    function about(){
      return view('front/about');
    }
    
    function faq(){
      return view('front/faq');
    }
    
    function blog(){
      return view('front/blog');
    }
    
    function contact(){
      return view('front/contact');
    }

    function shop(){
      return view('front/shop');
    }
    function home2(){
      return view('front/home2');
    }
}