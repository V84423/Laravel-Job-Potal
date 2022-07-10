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

    Route::get('/','HomeController@index')->name('home');
    
    Route::get('projects','HomeController@projects')->name('projects');
    
    Route::get('details/{id}','HomeController@details')->name('details');
    Route::get('details/talent/{id}','HomeController@talentDetails')->name('talent_details');
    Route::get('details/company/{id}','HomeController@companyDetails')->name('company_details');


    Route::get('search','HomeController@search')->name('search');
    Route::post('project/search','HomeController@projectSearch')->name('project_search');
    Route::post('search/project','HomeController@searchProject')->name('search_project');


    Route::get('client', 'HomeController@client')->name('client');
    Route::post('search/company', 'HomeController@searchCompany')->name('search_company');


    Route::get('service','HomeController@service')->name('service');




    Route::get('agreement','HomeController@agreement')->name('agreement');
    Route::get('privacy-policy','HomeController@privacy_policy')->name('privacy-policy');





    Route::get('company', 'HomeController@company')->name('company');
    Route::get('talent', 'HomeController@talent')->name('talent');
    Route::get('contract', 'HomeController@contract')->name('contract');

    Route::get('notification', 'HomeController@notification')->name('notification');
    Route::get('download/{filepath}/{filename}','HomeController@download')->name('download');


    Route::get('user/register', 'Auth\LoginController@showRegistrationForm')->name('user_register');
    Route::post('registration-mailer','Auth\RegisterController@create')->name('registration-mailer');
    Route::get('user/info/{token}','Users\UsersController@addUserInfo');
    Route::post('registration-skills','Users\UsersController@skills')->name('registration-skills');
    Route::get('user/info','Users\UsersController@showUserInfo')->name('user_info');
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('login-mailer','Auth\LoginController@login')->name('login-mailer');
    Route::post('registration-info','Users\UsersController@info')->name('registration-info');


    Route::post('user/profile/image','Users\UsersController@profileImageUpload')->name('profile_image_upload');

    Route::get('company/register', 'Auth\LoginController@showCompanyRegistrationForm')->name('company_register');
    Route::post('registration-company','Auth\RegisterController@company')->name('registration-company');
    Route::get('company/info/{token}','Users\UsersController@addCompanyInfo');
    Route::get('company/info','Users\UsersController@showCompanyInfo')->name('company_info');
        

    Route::get('company/post','Users\UsersController@showCompanyPost')->name('company_post');
    Route::post('registration-project','Users\UsersController@post')->name('registration-project');
    Route::get('company/projects','Users\UsersController@showCompanyProjects')->name('company_projects');
    Route::get('company/projects/delete/{id}','Users\UsersController@delCompanyProjects')->name('company_del_projects');

    Route::get('projects/apply/{id}/{client}','Users\UsersController@apply')->name('job_apply');
    Route::get('user/send','Users\UsersController@showUserSend')->name('user_send');
    Route::post('post-mail','Users\UsersController@postMail')->name('post-mail');
    Route::get('user/sent/list','Users\UsersController@showUserSentList')->name('user_sentList');    
    Route::get('user/message/{id}','Users\UsersController@showUserMessage')->name('user_message');
    Route::get('user/receive/list','Users\UsersController@showUserReceiveList')->name('user_receiveList');
    Route::get('user/footprint','Users\UsersController@showUserFootprint')->name('user_footprint');
    Route::get('user/view','Users\UsersController@showUserReview')->name('user_review');
    Route::get('user/setting','Users\UsersController@showUserSetting')->name('user_setting');
    Route::get('user/plan','Users\UsersController@showUserPlan')->name('user_plan');

    Route::get('user/change','Users\UsersController@showUserChange')->name('user_change');
    Route::get('user/photo','Users\UsersController@showUserPhoto')->name('user_photo');
    Route::get('user/social','Users\UsersController@showUserSocial')->name('user_social');
    Route::get('user/link','Users\UsersController@showUserLink')->name('user_link');
    Route::get('user/email','Users\UsersController@showUserEmail')->name('user_email');
    Route::get('user/password','Users\UsersController@showUserPassword')->name('user_password');
    Route::get('user/private','Users\UsersController@showUserPrivate')->name('user_private');
    Route::get('user/close','Users\UsersController@showUserClose')->name('user_close');


    Route::get('company/setting','Users\UsersController@showCompanySetting')->name('company_setting');
    Route::get('company/receive/list','Users\UsersController@showCompanyReceiveList')->name('company_receiveList');
    Route::get('company/sent/list','Users\UsersController@showCompanySentList')->name('company_sentList');   
    Route::get('company/message/{id}','Users\UsersController@showCompanyMessage')->name('company_message');
    Route::get('company/footprint','Users\UsersController@showCompanyFootprint')->name('company_footprint');
    Route::get('company/view','Users\UsersController@showCompanyReview')->name('company_review');
    Route::get('company/plan','Users\UsersController@showCompanyPlan')->name('company_plan');

    Route::get('company/change','Users\UsersController@showCompanyChange')->name('company_change');
    Route::get('company/photo','Users\UsersController@showCompanyPhoto')->name('company_photo');
    Route::get('company/social','Users\UsersController@showCompanySocial')->name('company_social');
    Route::get('company/link','Users\UsersController@showCompanyLink')->name('company_link');
    Route::get('company/email','Users\UsersController@showCompanyEmail')->name('company_email');
    Route::get('company/password','Users\UsersController@showCompanyPassword')->name('company_password');
    Route::get('company/private','Users\UsersController@showCompanyPrivate')->name('company_private');
    Route::get('company/close','Users\UsersController@showCompanyClose')->name('company_close');

    Route::post('change/user/password','Users\UsersController@changeUserPassword')->name('user_change_password');
    Route::post('change/company/password','Users\UsersController@changeCompanyPassword')->name('company_change_password');



