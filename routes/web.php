<?php

use App\Models\Article;
use App\Models\Cgy;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('user')->group(function () {
    Route::get('/{id}', 'App\Http\Controllers\UserController@show'); //由class傳入再回傳
    Route::get('/{name}', function ($name) {
        return "User $name";
    });

});
//Route::get('/users/{id}', 'App\Http\Controllers\UserController@show'); //由class傳入再回傳
Route::namespace ('App\Http\Controllers')->group(function () {
    Route::get('users/{id?}', function ($id = 200) {
        return 'User ' . $id; //可輸可不輸入有預設參數
    });
    Route::get('/users/{id}/sex/{sex}', function ($id, $sex) {
        return "User $id, Sex $sex"; //多參數
    });

});

Route::middleware(['auth'])->group(function () {
    Route::get('/hello', 'App\Http\Controllers\SiteController@hello');
});

Route::get('/admin', 'App\Http\Controllers\SiteController@dashboard');

Route::get('/homework', 'App\Http\Controllers\HomeworkController@social_dashboard');

Route::get('/demo', 'App\Http\Controllers\TestController@demo');

// Route::apiResource('posts', 'App\Http\Controllers\Api\PostController'); //自動生成對應5個function

Route::get('/nav1', 'App\Http\Controllers\HomeworkController@navbar');
// Route::get('/grid', 'App\Http\Controllers\HomeworkController@grid_layout');

Route::get('/nav2', 'App\Http\Controllers\NavController@nav');

Route::resource('/posts', 'App\Http\Controllers\PostController');
Route::resource('/articles', 'App\Http\Controllers\ArticleController');

//  Route::post('/posts', 'App\Http\Controllers\Api\PostController@store');
Route::post('/items', 'App\Http\Controllers\Api\ItemController@store');
Route::get('/itemsindex', 'App\Http\Controllers\Api\ItemController@index');
// Route::get('/demo', function () {
//     return route('AAdemo');
// })->name('AAdemo'); //取別名也可以取得路徑

Route::get('/url', function () {
    // return url('posts');
    // return action([TestController::class, 'demo']);
    // return url()->current();
});

Route::post('/getfile', 'App\Http\Controllers\TestController@dogetFile');
Route::get('/config', function () {
    // dd(config('database.default'));
    dd(config('database.connections.mysql.database'));
});
Route::get('/newcgy', function () {
    $cgy = new Cgy([
        'title' => '標題',
        'enabled' => true,
        'enabled_at' => now(),
        'sort' => 1,
    ]);
    $cgy->save();
    // $cgy->title = '標題';
    // $cgy->enabled = true;
    // $cgy->enabled_at = now();
    // $cgy->sort = 1;
    // $cgy->save();

});
Route::get('/newarticle', function () {
    $article = new Article([
        'subject' => '標題',
        'content' => 'dafadgfadf',
        'cgy_id' => 1,
        'enabled' => true,
        'enabled_at' => now(),
        'sort' => 1,
    ]);
    dd($article);
    $article->save();

});
Route::get('/changecgy', function () {
    $cgy = Cgy::find(1);
    $cgy->title = '新分類';
    $cgy->save();
});
Route::get('/delcgy/{cgy}', function (Cgy $cgy) { //測試,真正的寫在controller
    // $cgy->delete();
    Cgy::destroy($cgy->id);
});