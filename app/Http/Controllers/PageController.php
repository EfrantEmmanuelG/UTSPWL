<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() 
    { 
        return view('pages.home'); 
    }
    public function form() 
    { 
        return view('pages.nim-form'); 
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'nim' => ['required', 'digits_between:1,20'],
            'nama' => ['required', 'string', 'max:100'],
        ]);

        return view('pages.nim-result', $data);
    }

    public function courses() { return view('pages.courses'); }
    public function students() { return view('pages.students'); }
    public function grades() { return view('pages.grades'); }
    public function assignments() { return view('pages.assignments'); }

}
