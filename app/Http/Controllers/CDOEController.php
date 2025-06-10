<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Carbon\Carbon;
use function view;

class CDOEController extends Controller
{
    public function home()
    {
        return view('all_pages.home');
    }


    public function blog()
    {
        $activeBlogs = Blogs::where('category_id', 43)
            ->where('status', 1)
            ->orderBy('posted_at', 'DESC')
            ->orderBy('id', 'DESC')
            ->get();

        return view('all_pages.blog', compact('activeBlogs'));
    }

    public function showBlog($slug)
    {
        $blog = Blogs::where('n_slug', $slug)->where('status', 1)->firstOrFail();

        // Format posted date
        $blog->posted_at = Carbon::parse($blog->posted_at)->format('d F, Y');

        // Fetch recent blogs for sidebar (limit 3)
        $recentBlogs = Blogs::where('status', 1)
            ->where('id', '!=', $blog->id)
            ->orderBy('posted_at', 'desc')
            ->limit(3)
            ->get()
            ->map(function ($item) {
                $item->posted_at = Carbon::parse($item->posted_at)->format('d F');
                return $item;
            });

        return view('all_pages.blog_details', compact('blog', 'recentBlogs'));
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
