<?php

namespace App\Http\Controllers;
class NavController extends Controller
{
    public function index()
    {
        $data = [
            'name' => "Juan Dela Cruz",
            'subject' => "ITLAB A"
        ];
        return view('welcome', compact('data'));
    }
    public function about()
    {
        $data = [
            'name' => "Reign Mejia",
            'subject' => "ITLAB A"
        ];
        return view('about', compact('data'));
    }
    public function contact()
    {
        $student2 = [
            'name' => "Raven Mejia",
            'subject' => "ITLAB A"
        ];
        return view('contact', compact('student2'));
    }
}