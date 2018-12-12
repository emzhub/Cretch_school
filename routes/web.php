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


// Social Auth
// Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');
Route::get('/clear-cache', function() {
    $exitCode = Illuminate\Support\Facades\Artisan::call('cache:clear');
    return $exitCode;
    // return what you want
});

Route::get('/','HomeController@index');

Auth::routes();


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

  Route::get('/admin', 'AdminController@admin')->middleware('admin')->name('admin');
// Route::get('/topic/{name?}/{id?}', 'HomeController@load_topic')->name('topic');
// Route::get('/comment/{name?}/{id?}', 'HomeController@load_comment')->name('comment');

//       Route::group(['prefix' => 'agent'], function($controller = 'HomeController@') {
//     Route::get('change_password', $controller.'show_change_password')->name('change_password');
//     Route::get('pay/success', $controller.'success');
//     Route::get('pay/failure', $controller.'failure');
//     Route::get('credits', $controller.'credits');
//     Route::get('checkout', $controller.'checkout');
// });

Route::group([ 'middleware' => [ 'auth'] ], function()
{
  //GET
	Route::get('/welcome', 'HomeController@home')->name('welcome');

  Route::get('/add-parent', 'HomeController@show_parent')->name('create_parent');
  Route::get('/add-child', 'HomeController@show_child')->name('create_parent_child');
  Route::get('/mailbox', 'HomeController@show_mail')->name('mailbox');
    Route::get('/history', 'HomeController@show_history')->name('history');
  Route::get('/change_password', 'HomeController@show_change_password')->name('change_password');
  Route::get('/account_settings', 'HomeController@show_account_settings')->name('update_profile');
  Route::get('/create_tournaments', 'HomeController@show_create_tournaments')->name('update_child_profile');

  //POST
  Route::get('/getToken/{id}', 'AdminController@gettoken')->name('branch.gettoken');
   Route::get('/parent/{id}', 'AdminController@destroy')->name('branch.destroy');
   Route::post('/send-Message', 'AdminController@sendEmail')->name('sendMail');
  Route::post('/save-parent', 'AdminController@save_add_console')->name('add_parent');
  Route::post('/save-child', 'AdminController@save_add_game')->name('add_child');
  Route::post('/pickup_token', 'AdminController@generatetokeNumber')->name('pickup_token');
  Route::post('/child_pickup', 'AdminController@generatePICKUP')->name('child_pickup');
     // Route::post('/store_match','HomeController@store_match')->name('up_profile');
     // Route::post('/store_tourna','HomeController@store_tourna')->name('up_child');
     // Route::post('/change password', 'HomeController@save_change_password')->name('changePassword');







// Route::get('/create_industry', 'AdminController@create_industry')->name('industry');
// Route::post('/store_industry','AdminController@store_industry')->name('store_industry');
// Route::get('/create_sub_industry', 'AdminController@create_sub_industry')->name('_industry');
// Route::post('/store_sub_industry','AdminController@store_sub_industry')->name('store_sub_industry');
// Route::post('/comment','CommentController@store_comment')->name('savecomment');
// Route::get('/create_topic', 'TopicController@index')->name('create_topic');
// Route::get('/create_company', 'TopicController@getview')->name('create_company');
// Route::get('/subinds/{id?}', 'TopicController@getSubindustry')->name('subinds');
// Route::post('/save_new_topic','TopicController@create')->name('save_new_topic');
// Route::post('rate', 'CommentController@rate')->name('rate');
// Route::post('/save_new_reply_comment','TopicController@createreply')->name('save_new_reply_comment');
//  Route::get('/update/{id?}', 'HomeController@updatepost')->name('update');
//  Route::get('/profile/{id?}', 'HomeController@updateprofile')->name('profile');
//   Route::get('/contact', 'HomeController@contact')->name('contact');
//     Route::post('/Update_profile', 'HomeController@Update_profile')->name('Update_profile');
//  Route::post('/like', ['uses' => 'HomeController@postLikePost','as' => 'like']);
//  Route::get('/img/{username}', ['uses' => 'HomeController@getUserImage','as' => 'account.image']);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
