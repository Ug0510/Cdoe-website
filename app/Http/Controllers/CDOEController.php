<?php

namespace App\Http\Controllers;

use function view;

class CDOEController extends Controller
{
    public function home()
    {
        return view('all_pages.home');
    }


    public function blog()
    {
        return view('all_pages.blog');
    }

    public function blog_details()
    {
        return view('all_pages.blog_details');
    }

    public function hr_programme()
    {
        return view('all_pages.programme.hr_programme');
    }

     public function ib_programme()
    {
        return view('all_pages.programme.ib_programme');
    }

    public function finance_programme()
    {
        return view('all_pages.programme.finance_programme');
    }

    public function marketing_programme()
    {
        return view('all_pages.programme.marketing_programme');
    }

    public function admissions_rules()
    {
        return view('all_pages.admissions.admissions_rules');
    }

    public function how_to_apply()
    {
        return view('all_pages.admissions.how_to_apply');
    }

    public function facilities()
    {
        return view('all_pages.facilities');
    }
}
