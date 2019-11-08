<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
        /**
     * Show the public home/splash page.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function splash()
    {
        return view('public.splash');
    }
        /**
     * Show the users profile page.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile()
    {
        return view('public.profile');
    
    }

    public function events()
    {
        return view('public.events');
    
    }

    public function contact()
    {
        return view('public.contact');
    
    }
}
