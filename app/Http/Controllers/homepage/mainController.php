<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;

class mainController extends Controller
{
    //

    //views
    public function openIndexPage()
    {
        return view('homepage.indexPage');
    }

    public function jobIndexPage()
    {
        return view('jobs.indexPage');
    }
    public function specificJobIndexPage()
    {
        return view('jobs_page.indexPage');
    }
    public function employerIndexPage()
    {
        return view('employer.indexPage');
    }
    public function blogIndexPage()
    {
        return view('blog.indexPage');
    }
    public function specificBlogIndexPage()
    {
        return view('blog_page.indexPage');
    }
    public function teflIndexPage()
    {
        return view('tefl.indexPage');
    }
    public function aboutIndexPage()
    {
        return view('about.indexPage');
    }
    public function contactIndexPage()
    {
        return view('contact.indexPage');
    }
}
