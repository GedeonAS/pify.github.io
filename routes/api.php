<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;

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

Route::get('/my','XampleController@my');
Route::get('/ex', function () {
    return view('ex_edit.index'); 
});

// API Menu
Route::get('menu/show','HomeController@show');
Route::post('menu/store','HomeController@store');
Route::put('menu/update','HomeController@update');
Route::delete('menu/delete','HomeController@delete');
// API Question
Route::get('quest/show','QuestionController@show');
Route::get('quest/search','QuestionController@search');
Route::get('quest/fillter-community','QuestionController@fillter');
Route::get('quest/likedislike','QuestionController@likedislike');
Route::post('quest/likedislikestore','QuestionController@likedislikestore');
Route::post('quest/store','QuestionController@store');
Route::post('quest/vote','QuestionController@vote');
Route::put('quest/update','QuestionController@update');
Route::delete('quest/delete','QuestionController@delete');
// API Tag
Route::get('tag/show','TagController@show');
Route::get('tag/search','TagController@search');
// Communities
Route::get('community/show/follow', 'CommunitiesController@showfollow');
Route::get('community/show/unfollow', 'CommunitiesController@showunfollow');
Route::get('community/show/search', 'CommunitiesController@search');
Route::post('community/un_follow', 'CommunitiesController@un_follow');
// Groups
Route::get('group/show/joined', 'GroupsController@showjoin');
Route::get('group/show/public', 'GroupsController@showunjoin');
Route::get('group/show/search', 'GroupsController@search');
Route::post('group/un_join', 'GroupsController@un_join');
// Sidebar
Route::get('community/show', 'SidebarController@show');
// Most-Visited
Route::get('most-visited/show', 'MostVisitedController@show');
Route::get('most-visited/search','MostVisitedController@search');
Route::get('most-visited/fillter-community','MostVisitedController@fillter');
// ----------------------------------------------------------

// Route::get('/data/filter','DashboardController@filter');

// Route::get('/data/search','XampleController@search');

// API Profile
Route::get('/data/profile/question','ProfileController@showQuest');
Route::post('/data/profile/store','ProfileController@storeProfile');
// API Dashboard
Route::post('/data/store','DashboardController@store');
Route::get('/data/question','DashboardController@show_question');
// API Answer
Route::get('/answer/show','AnswerController@show_answer');
Route::get('/answer/likedislike','AnswerController@likedislike');
Route::post('/answer/likedislikestore','AnswerController@likedislikestore');
Route::post('/answer/store','AnswerController@store');
Route::post('/data/store/coment','AnswerController@storeComent');
Route::get('/data/show/coment','AnswerController@showComment');

// ADMIN

// User
Route::get('/data/admin/user','AdminUserController@showUser');
Route::get('/data/admin/edit/user','AdminUserController@dataEdit');
Route::get('/data/admin/user/show','AdminUserController@showDetail');
Route::post('data/admin/user/update','AdminUserController@update');
Route::delete('data/admin/user/delete/{id}','AdminUserController@destroy');

// Question
Route::get('/data/admin/quest','AdminQuestionController@showQuest');
Route::get('/data/admin/quest/show','AdminQuestionController@showDetail');
Route::get('/data/admin/quest/pending','AdminQuestionController@questPending');
Route::post('/data/admin/quest/pending/update','AdminQuestionController@statusUpdate');
Route::delete('/data/admin/quest/pending/{id}','AdminQuestionController@destroy');
Route::post('data/admin/quest/pending/update','AdminQuestionController@statusUpdate');
Route::post('/data/admin/edit/question','AdminQuestionController@editQuest');
Route::delete('/data/admin/quest/{id}','AdminQuestionController@destroy');

// Answer
Route::get('/data/admin/answer','AdminAnswerController@showAnswer');
Route::post('/data/admin/edit/answer','AdminAnswerController@editQuest');
Route::delete('/data/admin/answer/{id}','AdminAnswerController@destroy');

// Tags
Route::get('/data/admin/tag','AdminTagController@showTag');
Route::get('/data/admin/edit/tag','AdminTagController@dataEdit');
Route::post('data/admin/tag/update','AdminTagController@update');
Route::post('data/admin/tag/store','AdminTagController@store');
Route::delete('data/admin/tag/delete/{id}','AdminTagController@destroy');

// Mapel
Route::get('/data/admin/mapel','AdminMapelController@showMapel');
Route::delete('/data/admin/mapel/{id}','AdminMapelController@destroy');

// Communites
Route::get('/data/admin/commu','AdminCommunityController@showCommunities');
Route::get('/data/admin/commu/show','AdminCommunityController@showDetail');
Route::post('/data/admin/commu/store','AdminCommunityController@store');
Route::get('/data/admin/commu/edit','AdminCommunityController@dataEdit');
Route::post('data/admin/commu/update','AdminCommunityController@update');
Route::delete('data/admin/commu/delete/{id}','AdminCommunityController@destroy');

// Type
Route::get('/data/admin/type','AdminTypeController@showType');
Route::post('/data/admin/type/store','AdminTypeController@store');
Route::get('/data/admin/type/edit','AdminTypeController@dataEdit');
Route::post('data/admin/type/update','AdminTypeController@update');
Route::delete('data/admin/type/delete/{id}','AdminTypeController@destroy');

// Kelas
Route::get('/data/admin/kelas','AdminKelasController@showKelas');
Route::delete('/data/admin/kelas/{id}','AdminKelasController@destroy');


// Route::post('login', 'API\UserController@login');
// Route::post('register', 'API\UserController@register');
// Route::group(['middleware' => 'auth:api'], function(){
//     Route::post('details', 'API\UserController@details');
//     Route::get('/my','DashboardController@my');
// });
