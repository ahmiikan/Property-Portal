<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostsApiController;
use App\Http\Controllers\PostCommentsApiController;

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

Route::get('blog', [PagesController::class, 'home']);

Route::get('blog/posts/view/{slug}', [PostsController::class,'view'])->name('posts.view');
Route::get('blog/posts/list', [PostsController::class,'list'])->name('posts.list');
Route::any('blog/posts/del/{slug}', [PostsController::class,'delete'])->name('posts.delete');
Route::any('blog/posts/res/{slug}', [PostsController::class,'restore'])->name('posts.restore');
Route::any('blog/posts/deleted', [PostsController::class,'deleted'])->name('posts.deleted');
Route::get('blog/posts/draft', [PostsController::class,'draft'])->name('posts.draft');
Route::resource('blog/posts', PostsController::class);
Route::resource('/categories', CategoriesController::class);

Route::group(['prefix' => 'api/posts'], function () {
  Route::get('/', [PostsApiController::class, 'index']);
  Route::get('/{id}', [PostsApiController::class, 'show']);

  Route::get('/{id}/content', [PostsApiController::class, 'content']);

  Route::resource('/{slug}/comments', PostCommentsApiController::class);

  // Route::get('/{post_id}/comments', [
  //   PostCommentsApiController::class,
  //   'index'
  // ]);
  // Route::post('/{post_id}/comments', [
  //   PostCommentsApiController::class,
  //   'store'
  // ]);
  // Route::get('/{post_id}/comments/{comment_id}', [
  //   PostCommentsApiController::class,
  //   'show'
  // ]);
});
