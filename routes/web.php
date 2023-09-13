<?php

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
    return view('question.index');
});

Route::get('/oohome', function () {
    return view('question.index');
});

Route::get('/level', 'LevelController@index')->name('level');
// Home
Route::get('/menu', 'HomeController@index')->name('menu');
Route::group(['middleware' => 'auth'], function () {

});
// Question
Route::get('/question', 'QuestionController@index')->name('questions');
Route::get('/questions-details/{id}', 'QuestionController@detail')->name('questions-details');
Route::get('/ask-questions', 'QuestionController@ask')->name('ask-questions');

// Tags
Route::get('/tags', 'TagController@index')->name('tags');

// Communities
Route::group(['middleware' => 'level:1'], function () {
Route::get('/communities', 'CommunitiesController@index')->name('communities');
Route::get('/communitie/follows', 'CommunitiesController@follow')->name('communities-follow');
});

// Most Answered Qs
Route::get('/most-answered', 'MostAnsweredController@index')->name('most-answered');
Route::get('/most-answered-details', 'MostAnsweredController@detail')->name('most-answered-details');

// Unasnwered Qs
Route::get('/unanswered', 'UnansweredController@index')->name('unanswered');

// MostVisited Qs
Route::get('/most-visited', 'MostVisitedController@index')->name('most-visited');

// Polls
Route::get('/polls', 'PollsController@index')->name('polls');

// FAQ
Route::get('/faq', 'FaqController@index')->name('faq');

// Groups
Route::get('/groups', 'GroupsController@index')->name('groups');
Route::get('/groups/join', 'GroupsController@join')->name('groups-join');

// ------------------------------------------------------------

Route::get('/profile/edit', 'ProfileController@editShow')->name('edit.profile');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/answer/{id}','AnswerController@index')->name('answer');
Route::get('/quest/{data}','AnswerController@goToquest')->name('answer.search');

Auth::routes();

Route::get('/home', 'AuthController@index')->name('home');

// ADMIN
Route::get('/admindashboard','AdminDashboardController@index')->name('admindashboard');
Route::get('/adminquestion','AdminQuestionController@index')->name('adminquest');

// // Kelas
// Route::get('/adminkelas','AdminKelasController@index')->name('kelas');

// // Mapel
// Route::get('/adminmapel','AdminMapelController@index')->name('matapelajaran');

// Category
Route::get('/admincategory','AdminCategoryController@index')->name('category-admin');

// User
Route::get('/adminuser','AdminUserController@index')->name('user-admin');
Route::get('/adminuser/{adminuser}/edit','AdminUserController@edit')->name('editUser-admin');

// Question
Route::get('/adminquestion','AdminQuestionController@index')->name('quest-admin');
Route::get('/adminquestpending','AdminQuestionController@indexPending')->name('quest-admin-pending');

// Type
Route::get('/admintypes','AdminTypeController@index')->name('type-admin');

// Comunitty
Route::get('/admincomunitty','AdminCommunityController@index')->name('communities-admin');

// Answer
Route::get('/adminanswer','AdminAnswerController@index')->name('answer-admin');
Route::get('/adminanswerpending','AdminAnswerController@indexPending')->name('answer-admin-pending');

// Tag
Route::get('/admintag','AdminTagController@index')->name('tag-admin');




// // cek join
// Route::get('/cek-join', function () {
    
//     $result = DB::table('tbl_answers')
//         ->join('users', 'tbl_answers.id_user_dil' , '=' ,'users.id')
//         ->join('tbl_questions', 'tbl_answers.id_question' , '=' ,'tbl_questions.id')
//         ->select('tbl_answers.*' , 'users.name', 'tbl_questions.question')
//         ->get();

//     dd($result);

// });



// cek join quest
Route::get('/cek-join-quest', function () {
    
    $result = DB::table('users')
    ->leftjoin('tbl_questions', 'users.id' , '=' ,'tbl_questions.id')
    ->select('users.*' , 'tbl_questions.question')
    ->get();

    dd($result);

});


