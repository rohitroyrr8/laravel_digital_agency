<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/advert', function () {
    return view('advertiser');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/blog/', 'PostController@index');

Route::get('/blog/create', 'PostController@create');

Route::post('/blog/save', 'PostController@store');

Route::get('/blog/{blog_id}/edit', 'PostController@edit');

Route::put('/blog/{blog_id}/update', 'PostController@update');

Route::get('/blog/search-query/', 'PostController@search');

Route::delete('/blog/{blog_id}/destroy', 'PostController@destroy');

Route::get('/blog/{blog_id}', 'PostController@show');


// Route::get('/blog/{blog_id}', function ($blog_id) {
//     //return view('blog/blog-detail')->with('blog_id', $blog_id);
// });
