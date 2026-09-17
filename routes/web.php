<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;

Route::get('/', function(){
    $data = [
        'name' => "Juan Dela Cruz",
        'subject' => "ITLAB A"
    ];
    
    return view('hello', compact('data'));
});

Route::get('/About', function(){
    $data = [
        'name' => "Juan Dela Cruz",
        'subject' => "ITLAB A"
    ];
    
    return view('about', compact('data'));
});

Route::get('/Contact Us', function(){
    $student2 = [
        'name' => "Raven Mejia",
        'subject' => "ITLAB A"
    ];
    
    return view('contact', compact('student2'));
});


