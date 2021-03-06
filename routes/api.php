<?php

use App\Article;
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

Route::get('/articles', function(Request $request) {
//    $pageSize = $request->size;
//    $size = $request->page;
   $articles = Article::paginate(15);//orderByDesc('created_at')->limit(15)->get();
   return response()->json(['articles' => $articles]);
});
