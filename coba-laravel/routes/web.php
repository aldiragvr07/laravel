<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryControlller;


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
    return view('home',[
        "title" => "Home",
        "active" => 'home'
    ]); 

});
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Aldira Givari",
        "email" => "aldiragvr07@example.com",
        "image" => "foto1.jpg",
        "active" => 'about'
    ]
);
});



Route::get('/posts', [PostController::class,'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories', function() {
    return view('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
     
     ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts',[
//        'title' => "Post By Category:$category->name",
//        'active' => "categories",
//        'posts' => $category->posts->load('category','author')
//     ]);
// });
    
// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts',[
//         'title'=> 'Post By Author: '.$author->name,
//         'active' => 'posts',
//         'posts' => $author->posts->load('category','author')
//     ]);
// });

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug'])->middleware('auth');
Route::get('dashboard/categories/checkSlug',[AdminCategoryControlller::class,'checkSlug'])->middleware('is_admin');

Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('dashboard/categories', AdminCategoryControlller::class)->middleware('is_admin');
