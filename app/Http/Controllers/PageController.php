<?php
namespace App\Http\Controllers;
class PageController extends Controller
{
public function index()
    {
        return view("test-tema"); // view dengan template
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function uts()
    {
        return view('uts');
    }

    public function form()
    {
        return view('form');
    }

    public function submit()
    {
        return view('submit');
    }

    public function email()
    {
        return view('email');
    }

   

}

