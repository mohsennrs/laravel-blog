<?php



// $key=resolve('App\Billing\Stripe');
// dd($key);

// Route::get('/', )

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/register', 'RegisterationController@create');
Route::post('/register', 'RegisterationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');

Route::get('/test','TestController@index');	
Route::post('/test','TestController@store');

Route::get('/posts/tags/{tag}','TagsController@index');


// posts

// get /posts
// get /posts/create
// post /posts
// get /posts/{id}/edit
// patch /posts/{id}
// delete /posts/{id}