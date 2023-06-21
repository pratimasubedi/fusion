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

Route::get('/', 'Frontend\FusionController@index')->name('index');
Route::get('/header', 'Frontend\FusionController@header')->name('header');
Route::get('/footer', 'Frontend\FusionController@footer')->name('footer');
Route::get('/fair-hiring', 'Frontend\FusionController@fairHiring')->name('fairhiring');
Route::get('/fair-hiring-detail/{slug}', 'Frontend\FusionController@hiringDetail')->name('fairhiringDetail');

Route::get('/tips', 'Frontend\FusionController@Tip')->name('tips');
Route::get('/job-interview/{slug}', 'Frontend\FusionController@jobInterview')->name('job-interview');

Route::get('/about', 'Frontend\FusionController@About')->name('about');
Route::get('/event', 'Frontend\FusionController@Event')->name('event');
Route::get('/event-dynamic/{id}', 'Frontend\FusionController@eventDynamic')->name('event-dynamic');
Route::get('/galleries', 'Frontend\FusionController@Gallery')->name('gallery');


Route::get('/employment-retention', 'Frontend\FusionController@employmentRetention')->name('employmentretention');

Route::get('/main-category', 'Frontend\FusionController@mainCategory')->name('mainCategory');

Route::get('/categorydetail/{slug}', 'Frontend\FusionController@categoryDetail')->name('beautycenter');

Route::get('/sub-category', 'Frontend\FusionController@subCategory')->name('subCategory');
Route::get('/terms', 'Frontend\FusionController@Term')->name('terms');
Route::get('/training', 'Frontend\FusionController@Training')->name('training');
Route::get('/training-dynamic/{id}', 'Frontend\FusionController@trainingDynamic')->name('trainingdynamic');

Route::get('/album', 'Frontend\FusionController@Album')->name('album');
Route::get('/album-dynamic/{id}', 'Frontend\FusionController@albumDynamic')->name('albumdynamic');

Route::get('/contact', 'Frontend\FusionController@Contact')->name('contact');
Route::post('/storecontact', 'Backend\ContactController@storeContact')->name('store.contact');

Route::post('/search','Frontend\FusionController@Search')->name('search');

      
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'home',  'as' => 'home.'], function()
{
    Route::get('/userhome', 'HomeController@userHome')->name('user');

    Route::get('/usercategory', 'HomeController@usermainCategory')->name('usercategory');

    Route::get('/usercategorydetail/{slug}', 'HomeController@usercategoryDetail')->name('userbeautycenter');

    Route::post('/storeusercategory','HomeController@storeUsercategory')->name('storeusercategory');

    Route::get('/newjob','HomeController@newJob')->name('newjob');
    Route::post('/storenewjob','HomeController@storenewJob')->name('storenewjob');

    Route::post('/loginsearch','HomeController@loginSearch')->name('loginsearch');

    Route::get('/usercontact', 'HomeController@userContact')->name('usercontact');
    Route::post('/userstorecontact', 'HomeController@storeuserContact')->name('store.usercontact');

    Route::get('/userlogout', 'Auth\LoginController@userLogout')->name('userlogout');

});


//admin
Route::group(['prefix' => 'admin',  'as' => 'admin.'], function()
{
    //forlogin admin fusion
    Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('logout');
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');

    //change password
    Route::get('/changepass', 'AdminController@showChangePassword')->name('changepassword');
    Route::post('/resetpass', 'AdminController@ChangePassword')->name('changepassword.submit');

    //important links
    Route::get('/viewjobcategory','Backend\CategoryController@viewCategory')->name('viewjobcategory');
    Route::get('/createjobcategory','Backend\CategoryController@createCategory')->name('createjobcategory');
    Route::post('/storejobcategory','Backend\CategoryController@storeCategory')->name('storejobcategory');
    Route::get('/editjobcategory&{id}','Backend\CategoryController@editCategory')->name('editjobcategory');
    Route::post('/updatejobcategory&{id}','Backend\CategoryController@updateCategory')->name('updatejobcategory');
    Route::get('/deletejobcategory&{id}','Backend\CategoryController@deleteCategory')->name('deletejobcategory');

    //blog
    Route::get('/viewblog','Backend\BlogController@viewBlog')->name('viewblog');
    Route::get('/createblog','Backend\BlogController@createBlog')->name('createblog');
    Route::post('/storeblog','Backend\BlogController@storeBlog')->name('storeblog');
    Route::get('/editblog&{id}','Backend\BlogController@editBlog')->name('editblog');
    Route::post('/updateblog&{id}','Backend\BlogController@updateBlog')->name('updateblog');
    Route::get('/deleteblog&{id}','Backend\BlogController@deleteBlog')->name('deleteblog');

    //about
    Route::get('/viewabout','Backend\AboutController@viewAbout')->name('viewabout');
    Route::get('/createabout','Backend\AboutController@createAbout')->name('createabout');
    Route::post('/storeabout','Backend\AboutController@storeAbout')->name('storeabout');
    Route::get('/editabout&{id}','Backend\AboutController@editAbout')->name('editabout');
    Route::post('/updateabout&{id}','Backend\AboutController@updateAbout')->name('updateabout');
    Route::get('/deleteabout&{id}','Backend\AboutController@deleteAbout')->name('deleteabout');

    //service
    Route::get('/viewservice','Backend\ServiceController@viewService')->name('viewservice');
    Route::get('/createservice','Backend\ServiceController@createService')->name('createservice');
    Route::post('/storeservice','Backend\ServiceController@storeService')->name('storeservice');
    Route::get('/editservice&{id}','Backend\ServiceController@editService')->name('editservice');
    Route::post('/updateservice&{id}','Backend\ServiceController@updateService')->name('updateservice');
    Route::get('/deleteservice&{id}','Backend\ServiceController@deleteService')->name('deleteservice');
    //event
    Route::get('/viewevent','Backend\EventController@viewEvent')->name('viewevent');
    Route::get('/createevent','Backend\EventController@createEvent')->name('createevent');
    Route::post('/storeevent','Backend\EventController@storeEvent')->name('storeevent');
    Route::get('/editevent&{id}','Backend\EventController@editEvent')->name('editevent');
    Route::post('/updateevent&{id}','Backend\EventController@updateEvent')->name('updateevent');
    Route::get('/deleteevent&{id}','Backend\EventController@deleteEvent')->name('deleteevent');
    //gallery
    Route::get('/viewgallery','Backend\GalleryController@viewGallery')->name('viewgallery');
    Route::get('/creategallery','Backend\GalleryController@createGallery')->name('creategallery');
    Route::post('/storegallery','Backend\GalleryController@storeGallery')->name('storegallery');
    Route::get('/editgallery&{id}','Backend\GalleryController@editGallery')->name('editgallery');
    Route::post('/updategallery&{id}','Backend\GalleryController@updateGallery')->name('updategallery');
    Route::get('/deletegallery&{id}','Backend\GalleryController@deleteGallery')->name('deletegallery');

    //associate companies
    Route::get('/viewassociatecompany','Backend\LinkedController@viewCompany')->name('viewassociatecompany');
    Route::get('/createassociatecompany','Backend\LinkedController@createCompany')->name('createassociatecompany');
    Route::post('/storeassociatecompany','Backend\LinkedController@storeCompany')->name('storeassociatecompany');
    Route::get('/editassociatecompany&{id}','Backend\LinkedController@editCompany')->name('editassociatecompany');
    Route::post('/updateassociatecompany&{id}','Backend\LinkedController@updateCompany')->name('updateassociatecompany');
    Route::get('/deleteassociatecompany&{id}','Backend\LinkedController@deleteCompany')->name('deleteassociatecompany');

    //important links
    Route::get('/viewlink','Backend\ImportantController@viewLink')->name('viewlink');
    Route::get('/createlink','Backend\ImportantController@createLink')->name('createlink');
    Route::post('/storelink','Backend\ImportantController@storeLink')->name('storelink');
    Route::get('/editlink&{id}','Backend\ImportantController@editLink')->name('editlink');
    Route::post('/updatelink&{id}','Backend\ImportantController@updateLink')->name('updatelink');
    Route::get('/deletelink&{id}','Backend\ImportantController@deleteLink')->name('deletelink');

    //contact
    Route::get('/viewcontact','Backend\ContactController@viewContact')->name('viewcontact');
    Route::get('/deletecontact&{id}','Backend\ContactController@deleteContact')->name('deletecontact');

    //get recently applied job by user or job seeker
    Route::get('viewpostedjob','Backend\ContactController@postedJob')->name('viewpostedjob');
    Route::get('/deletejob&{id}','Backend\ContactController@deleteJob')->name('deletejob');

    Route::get('/viewjobapproval','Backend\ContactController@jobApproval')->name('viewjobapproval');

    //album
    Route::get('/viewalbum','Backend\AlbumController@viewAlbum')->name('viewalbum');
    Route::get('/createalbum','Backend\AlbumController@createAlbum')->name('createalbum');
    Route::post('/storealbum','Backend\AlbumController@storeAlbum')->name('storealbum');
    Route::get('/editalbum&{id}','Backend\AlbumController@editAlbum')->name('editalbum');
    Route::post('/updatealbum&{id}','Backend\AlbumController@updateAlbum')->name('updatealbum');
    Route::get('/deletealbum&{id}','Backend\AlbumController@deleteAlbum')->name('deletealbum');

    //photos
    Route::get('/viewphoto','Backend\PhotoController@viewPhoto')->name('viewphoto');
    Route::get('/createphoto','Backend\PhotoController@createPhoto')->name('createphoto');
    Route::post('/storephoto','Backend\PhotoController@storePhoto')->name('storephoto');
    Route::get('/editphoto&{id}','Backend\PhotoController@editPhoto')->name('editphoto');
    Route::post('/updatephoto&{id}','Backend\PhotoController@updatePhoto')->name('updatephoto');
    Route::get('/deletephoto&{id}','Backend\PhotoController@deletePhoto')->name('deletephoto');

    //training
    Route::get('/viewtraining','Backend\TrainingController@viewTraining')->name('viewtraining');
    Route::get('/createtraining','Backend\TrainingController@createTraining')->name('createtraining');
    Route::post('/storetraining','Backend\TrainingController@storeTraining')->name('storetraining');
    Route::get('/edittraining&{id}','Backend\TrainingController@editTraining')->name('edittraining');
    Route::post('/updatetraining&{id}','Backend\TrainingController@updateTraining')->name('updatetraining');
    Route::get('/deletetraining&{id}','Backend\TrainingController@deleteTraining')->name('deletetraining');


});

