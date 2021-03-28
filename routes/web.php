<?php

use Illuminate\Support\Facades\Route;

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

    $wpUrl = "https://blog.scaryprankster.com/";
    $apiUrl = $wpUrl . "wp-json/wp/v2/";
//    $pageJson = file_get_contents($apiUrl . "pages?slug=home");
//    $page = json_decode($pageJson)[0];
//    $featuredImageJson = file_get_contents($apiUrl . "media/" . $page->featured_media);
//    $featuredImage = json_decode($featuredImageJson->guid->rendered);

Route::get('/', function () {


    return view('home',[
        'title' =>  env('SITE_URL',"Digital Ghost"),
        'secondaryTitle'    =>  "Some secondary title",
        'featuredImage' =>  'https://blog.scaryprankster.com/wp-content/uploads/2021/03/typewriter-head-01.jpeg'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' =>  "About",
        'secondaryTitle'    =>  "",
        'featuredImage' =>  "https://blog.scaryprankster.com/wp-content/uploads/2021/03/typewriter-head-01.jpeg"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        'title' =>  "Contact",
        'secondaryTitle'    =>  "",
        'featuredImage' =>  "https://blog.scaryprankster.com/wp-content/uploads/2021/03/typewriter-head-01.jpeg"
    ]);
});

Route::get('/{slug}', function ($slug) use ($apiUrl) {
    $postJson = file_get_contents($apiUrl . "posts?slug=$slug");
    $post = json_decode($postJson)[0];
    return view('post',[
        'title' =>  $post->title->rendered,
        'secondaryTitle'    =>  "",
        'featuredImage' =>  "https://blog.scaryprankster.com/wp-content/uploads/2021/03/typewriter-head-01.jpeg",
        'content'   =>  $post->content->rendered,
        'json'  =>  $postJson
    ]);
});
