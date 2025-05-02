<?php

namespace App\Http\Controllers;





class CDOEController extends Controller

{
    public function home()
    {
        return view('all_pages.home');
    }
    public function programme()
    {
        return view('all_pages.programme');
    }
    public function blog()
    {
        return view('all_pages.blog');
    }
    public function blog_details()
    {
        return view('all_pages.blog_details');
    }
}
// Compare this snippet from app/Http/Controllers/CDOEController.php: