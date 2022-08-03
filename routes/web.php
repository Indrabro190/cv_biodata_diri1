<?php

use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;
use App\Models\kontak;
use App\Models\User;

use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home",
        "image" => "indra.jpg",
        "name" => "IndraBro190",
        "email" => "Indrabro190@gmail.com"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" =>  "about",
        "name" => "Indrabro190",
        "image" => "indra.jpg",
        "kandang" => "ayam"
    ]);
});


Route::get('/contact',[KontakController::class, 'index']);

// single conn
Route::get('/contact/{kontak:slug}',[KontakController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Kontak Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('contact', [
        'title' => "kontak By Category : $category->name",
        'contact' => $category->contact,
        // 'category' => $category->name
    ]);
});

Route::get('/authors/{user}', function(User $user){
    return view('contact', [
        'title' => "All Contact = $user->name",
        'contact' =>$user->contact,
    ]);
});



