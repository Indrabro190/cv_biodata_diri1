<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;

class KontakController extends Controller
{
    public function index(){
        return view('contact', [
            "title" => "All kontak",
            // "contact" => kontak::all()
            "contact" => kontak::latest()->get()
        ]);
    }

    public function show(kontak $kontak){
        return view('conn', [
            "title" => "Single conn",
            "conn" => $kontak
        ]);
    }
}
