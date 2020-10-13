<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(
    ['prefix' => 'blogs'],
    function () {
        Route::get('/', \App\Blog\Actions\GetBlogsAction::class);
        Route::get('/{blog}', \App\Blog\Actions\ShowBlogAction::class);
        Route::post('/', \App\Blog\Actions\CreateBlogAction::class);
        Route::put('/{blog}', \App\Blog\Actions\UpdateBlogAction::class);
        Route::delete('/{blog}', \App\Blog\Actions\DeleteBlogAction::class);
    }
);
