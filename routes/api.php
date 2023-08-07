<?php

use App\Http\Controllers\API\PostController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'v1',
    'as'     => 'v1.',
], function () {
    Route::group([
        'prefix' => 'posts',
        'as'     => 'posts.',
    ], function () {

        //Route: /v1/posts
        //Name: v1.posts.all
        Route::get('/', [PostController::class, 'index'])->name('all');

        //Route: /v1/posts/{id}
        //Name: v1.posts.show
        Route::get('/{id}', [PostController::class, 'show'])
            ->where(['id' => '[0-9]+'])
            ->name('show');

        //Route: /v1/posts/{id}
        //Name: v1.posts.update
        Route::put('/{id}', [PostController::class, 'update'])
            ->where(['id' => '[0-9]+'])
            ->name('update');

    });
});
