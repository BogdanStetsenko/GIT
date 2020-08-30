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
/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
 });
 
 Route::get('/menu', function () {
  
})->middleware('posrednik'::class);

 Route::get('/homepage',['as'=>'homepage',
 function(){
   return view('welcome');
 }]);
Route::get('/page',function(){

});
Route::group(['prefix'=>'admin/{id}'],function(){
  Route::get('/page/edit',function(){
    echo"hage edit";
  });
  Route::get('/page/create',function(){
  return redirect()->route('home');
  });
});
*/
//Route::get('/homepage',['as'=>'domstranica','middileware'=>'auth', 'uses'=>'Admin\Indexcontr@Authchek']);
//Route::get('/page/create',function(){
//})->middleware(['posrednik']);
Route::get('/pagetest','Admin\Indexcontr@Authchek');
Route::get('/menu',['as'=>'menu',function(){

}])->middleware(['posrednik']);
Route::get('/test', ['as'=>'dom','uses'=>'StranicaController@Link']);
 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/homepage','StranicaController@showhomepage');
 
 Route::get('/temp',function(){
   echo "articles list";
 });
 Route::get('/about/{id}',['uses'=>'AboutContr@Show','as'=>'about']);
