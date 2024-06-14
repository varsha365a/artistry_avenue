<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    //frontend routes
    public function home ( ) 
    {
        return view('frontend.index');
    }

    public function about ( ) 
    {
        return view('frontend.menu.about');
    }

    public function artset( ) 
    {
        return view('frontend.menu.artset');
    }

    public function cart( ) 
    {
        return view('frontend.menu.cart');
    }

    public function category( ) 
    {
        return view('frontend.menu.category');
    }
    
    public function checkout( ) 
    {
        return view('frontend.menu.checkout');
    }

    public function confirmation( ) 
    {
        return view('frontend.menu.confirmation');
    }

    public function contact( ) 
    {
        return view('frontend.menu.contact');
    }

    public function logins( ) 
    {
        return view('frontend.menu.logins');
    }

    public function product_list( ) 
    {
        return view('frontend.menu.product_list');
    }

    //backend routes

    public function auth_login( ) 
    {
        return view('backend.menu.authentication-login');
    }

    public function auth_register( ) 
    {
        return view('backend.menu.authentication-register');
    }

    public function orders( ) 
    {
        return view('backend.menu.orders');
    }

    public function sample( ) 
    {
        return view('backend.menu.sample-page');
    }

    public function upload( ) 
    {
        return view('backend.menu.upload');
    }

    public function index( ) 
    {
        return view('backend.index');
    }

        
}
