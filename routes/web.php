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

// Route::any('/', function () {
//     return view('welcome');
// });

/*************************** Frontend ***************************/


Route::any('/', 'WebLoginController@index')->name('index');
Route::any('/dash-board', 'DashboardController@index')->name('dash-board');
Route::any('/job', 'PagesController@job')->name('job');
Route::any('/job-question', 'PagesController@jobque')->name('job-question');
Route::any('/job-question/{id}', 'PagesController@jobque')->name('job-question-new');
Route::any('/job-question/{id}/{type}', 'PagesController@jobque')->name('reportselector');
Route::any('/questionsSubmitRequest', 'PagesController@questionsSubmitRequest')->name('questionsSubmitRequest');
Route::any('/uploadfiles', 'PagesController@uploadfiles')->name('uploadfiles');
Route::any('/calendar', 'PagesController@calendar')->name('calendar');
Route::any('/profile', 'PagesController@profile')->name('profile');
Route::any('/createPDF/{id}', 'PagesController@createPDF')->name('createPDF');
Route::any('/deleteimg', 'PagesController@deleteimg')->name('deleteimg');




/*************************** login logout***************************/

Route::post('/login/logincheck', 'WebLoginController@logincheck')->name('logincheck');
Route::any('/bpilogout', 'WebLoginController@logout')->name('bpilogout');

 /*************************** ***************************/


Route::any('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
	 return "Cache is cleared";
});
Route::group(['prefix'=>'csadmin', 'namespace'=>'Csadmin'], function(){
     Route::get('/', 'LoginController@adminLogin')->name('adminLogin');
     Route::post('/login/loginAdminProcess', 'LoginController@adminlogincheck')->name('adminlogincheck');
    
    /*************************** 
    * Developed By Harsh Lakhera
    * 06-07-2021
    * Routing For csadmin using middleware for admin session
    * Name - dashboard, adminLogout, manageInstitutes, manageCourses, categoriesA, categoriesB
    ***/
    Route::group(['middleware'=>'Adminsession'], function(){
       
        /******Dashboard Section*******/

        Route::any('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::any('/notification', 'DashboardController@notification')->name('notification');
        Route::any('/logout', 'LoginController@logout')->name('adminLogout');
        
        
      /******Technician Section*******/
        Route::any('/technician', 'TechnicianController@index')->name('technician');
        Route::any('/add-new-technician/{id?}', 'TechnicianController@addNewTechnician')->name('add-new-technician');
        Route::any('/technicianDelete/{id}', 'TechnicianController@technicianDelete')->name('technicianDelete');
        Route::any('/view-technician/{id?}', 'TechnicianController@viewtechnician')->name('view-technician');
        Route::any('/technicianStatus/{id}', 'TechnicianController@technicianStatus')->name('technicianStatus');
        Route::any('/technicianProccess', 'TechnicianController@technicianProccess')->name('technicianProccess');
        Route::any('/technician-group/{id?}', 'TechnicianController@techniciangroup')->name('technician-group');
        Route::any('/technician-groupdelete/{id?}', 'TechnicianController@techniciangroupdelete')->name('techniciangroupDelete');
        Route::any('/technician-role/{id?}', 'TechnicianController@techrole')->name('technician-role');
        Route::any('/roleproccess', 'TechnicianController@roleproccess')->name('roleproccess');
        Route::any('/roleStatus/{id}', 'TechnicianController@roleStatus')->name('roleStatus');
        Route::any('/permission/{id}', 'TechnicianController@techpermission')->name('permission');
        Route::any('/permissionProccess', 'TechnicianController@permissionProccess')->name('permissionProccess');
     

        /******Service Section*******/

        Route::any('/services/{id?}', 'ServicesController@services')->name('services');
        Route::any('/serviceproccess', 'ServicesController@serviceproccess')->name('serviceproccess');
        Route::any('/add-new-service/{id?}', 'ServicesController@addNewService')->name('add-new-service');
        Route::any('/servicesDelete/{id}', 'ServicesController@servicesDelete')->name('servicesDelete');



        /**********************Question Section ************************/
        Route::any('/childquestion/{id}', 'QuestionController@childquestion')->name('childquestion');
        Route::any('/add-new-question/{id}/{id1?}', 'QuestionController@addNewQuestion')->name('add-new-question');
        Route::any('/questionproccess', 'QuestionController@questionproccess')->name('questionproccess');
        Route::any('/deleteQuestion/{id}/{id1?}', 'QuestionController@deleteQuestion')->name('deleteQuestion');
        Route::any('/question/{id}', 'QuestionController@question')->name('question');
        Route::post('/question/updateorder', 'QuestionController@updateorder')->name('updateorder');


               
        /******Settings Section*******/
        Route::any('/store-setting', 'SettingsController@index')->name('store-setting');
        Route::any('/account-setting', 'SettingsController@accountSetting')->name('account-setting');
        Route::any('/accountProccess', 'SettingsController@accountProccess')->name('accountProccess');
        Route::any('/passProccess', 'SettingsController@passProccess')->name('passProccess');
        Route::any('/anycityajax', 'SettingsController@anycityajax')->name('anycityajax');
        Route::any('/storeProccess', 'SettingsController@storeProccess')->name('storeProccess');




        /*****Appreance Section******/
    Route::group(['prefix'=>'appreance'], function(){
        Route::any('/slider', 'AppreanceController@index')->name('slider');
        Route::any('/add-new-slider/{id?}', 'AppreanceController@addnewslider')->name('add-new-slider');
        Route::any('/sliderProccess', 'AppreanceController@sliderProccess')->name('sliderProccess');
        Route::any('/sliderDelete/{id}', 'AppreanceController@sliderDelete')->name('sliderDelete');
        Route::any('/sliderStatus/{id}', 'AppreanceController@sliderStatus')->name('sliderStatus');

    });
 
    /*******************/ 

    Route::group(['prefix'=>'appointment'], function(){
        Route::any('/', 'AppointmentController@index')->name('manageappointment');
        Route::any('/calender', 'AppointmentController@calender')->name('calender');
        Route::post('/serviceCatProccessAjex', 'AppointmentController@serviceCatProccessAjex')->name('serviceCatProccessAjex');
        Route::post('/getCustomerAddressAjex', 'AppointmentController@getCustomerAddressAjex')->name('getCustomerAddressAjex');
        Route::post('/editAppointmentAjex', 'AppointmentController@editAppointmentAjex')->name('editAppointmentAjex');
        Route::post('/addAppointmentProccess', 'AppointmentController@addAppointmentProccess')->name('addAppointmentProccess');
        Route::any('/statusChangeAppointment/{id}', 'AppointmentController@statusChangeAppointment')->name('statusChangeAppointment');
        Route::any('/deleteAppointment/{id}', 'AppointmentController@deleteAppointment')->name('deleteAppointment');
    });


    
    /*******************/



     /******Customer Section*******/
     Route::group(['prefix'=>'customer'], function(){
     Route::any('/', 'CustomerController@index')->name('managecustomer');
     Route::any('/customerProccess', 'CustomerController@customerProccess')->name('customerProccess');
     Route::any('/customerDelete/{id}', 'CustomerController@customerDelete')->name('customerDelete');

           
  });


             /*******************/ 

    });
});