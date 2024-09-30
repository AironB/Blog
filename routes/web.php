<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//en este caso llamo asi a por que estqamos usando __invoke
//Route::get('/', HomeController::class);

Route::get('/', [HomeController::class, 'index']);
Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/posts', function(){
//     return "Aqui se mostrarán todos los POST";
// });

//al poner el simbolo ? estamos indicando que es un valor opcional en la 
// y por eso en el callback pasamos el parametro null
// Route::get('/posts/{post}/{category?}', function($post, $category = null){
//     if ($category){
//         return "Aqui se mostrara el post {$post} de la categoria {$category}";
//     }
//     return "Aqui se mostrará el post {$post}";
// });


// Route::get('/post', function(){
//     return "Aca se mostraran todos los post";
// });


// Route::get('/posts/create', function(){
//     return "Aqui se mostrara el formulario para crear un post";
// });

// Route::get('/posts/{post}', function($post){
    
//     return "Aqui se mostrará el post {$post}";
// });

// Route::get('/posts/{post}/{category}', function($post, $category){
//     return "Aqui se mostrará el post {$post} de la categoria {$category}";
// });