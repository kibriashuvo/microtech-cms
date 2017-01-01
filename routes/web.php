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

//Route::get('/', function () {
  //  return view('welcome');
//});



Route::get('/dashboard', ['as'=>'dashboard.index', function () {
    return view('dashboard.index');
    // return view('layouts.admin');
}]);




Auth::routes();


//dashboard-products
Route::resource('/dashboard-products', 'ProductsController');
Route::get('/product-category',['as'=>'pdc.index','uses'=>'ProductsController@pdcindex']);
Route::get('/rename-product-category/{pdc}',['as'=>'pdc.rename','uses'=>'ProductsController@pdcrename']);
Route::post('/update-product-category/{pdc}',['as'=>'pdc.update','uses'=>'ProductsController@pdcupdate']);

//dashboard-projects
Route::resource('/dashboard-projects', 'ProjectsController');
Route::get('/project-category',['as'=>'pjc.index','uses'=>'ProjectsController@pjcindex']);
Route::get('/rename-project-category/{pjc}',['as'=>'pjc.rename','uses'=>'ProjectsController@pjcrename']);
Route::post('/update-project-category/{pjc}',['as'=>'pjc.update','uses'=>'ProjectsController@pjcupdate']);


Route::resource('/dashboard-gallery', 'ImageController');

Route::get('/home', 'HomeController@index');




Route::get('/', function () {
    return view('index');
});

Route::get('about_us',function(){
    return view('about_us');
});

Route::get('projects/',['as'=>'projects.sorted','uses'=>'ProjectsController@populate_public_page_projects']);

Route::get('services',function(){
    return view('services');
});


Route::get('products/{cat?}',['as'=>'products.catwise','uses'=>'ProductsController@populate_public_page_products']);




Route::get('career','CareerController@populate_public_page_job');



Route::get('career-cv',function(){
    return view('career-cv');
});



Route::get('internship','CareerController@populate_public_page_internship');




Route::get('gallery',function(){
    return view('gallery');
});


Route::get('contact-us',function(){
    return view('contact-us');
});


Route::post('drop_cv','CareerController@save_cv');


Route::post('message','MessageController@send_feedback');

Auth::routes();

Route::get('/home', 'HomeController@index');

//=======================CMS=======================


//=================MEssages=======================

Route::get('view_messages','MessageController@view_messages');

Route::post('view_message_button','MessageController@view_message_button');

Route::post('message_details_btn_action','MessageController@message_details_btn_action');

Route::post('send_mail',"MessageController@send_mail");

Route::post('back_to_view','MessageController@back_to_view');


//==================Career=====================


//-----------CV----------------------

Route::get('view_applicants','CareerController@view_applicants');

Route::post('cv_view_button','CareerController@cv_view_button');

//---------------JOB------------------------

Route::get('post_new_jobs','CareerController@post_new_jobs');

Route::post('save_job_details','CareerController@save_job_details');

Route::get('vacancy_list','CareerController@vacancy_list');

Route::post('vacancy_list_button','CareerController@vacancy_list_button');

Route::post('edit_job_details/{id}',['as'=>'job.edit','uses'=>'CareerController@edit_job_details']);

//-----------------Internship------------------------------------


Route::get('post_new_internship','CareerController@post_new_internship');

Route::get('internship_list','CareerController@internship_list');

Route::post('internship_list_button','CareerController@internship_list_button');

Route::post('save_internship_details','CareerController@save_internship_details');

Route::post('edit_internship_details/{id}',['as'=>'internship.edit','uses'=>'CareerController@edit_internship_details']);