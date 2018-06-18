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
Route::get('/', 'PageController@getHome')->name('homepage');
Route::get('/resources/partnersncollaborators', 'PageController@partnersncollaborators')->name('partnersncollaborators');
Route::get('/resources/newsnpublication', 'PageController@newsnpublication')->name('newsnpublication');
Route::get('/resources/media', 'PageController@media')->name('media');
Route::get('/resources/healthupdates', 'PageController@healthupdates')->name('healthupdates');
Route::get('/volunteer', 'PageController@volunteer')->name('volunteer');
Route::get('/donation', 'PageController@donation')->name('donation');
Route::get('/ourvision', 'PageController@ourvision')->name('ourvision');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/ourvision', 'PageController@ourvision')->name('ourvision');
Route::get('/mission', 'PageController@mission')->name('mission');
Route::get('/ourvalues', 'PageController@ourvalues')->name('ourvalues');
Route::get('/philosophies', 'PageController@philosophies')->name('philosophies');
Route::get('/ourgoals', 'PageController@ourgoals')->name('ourgoals');
Route::get('/strategicplan', 'PageController@strategicplan')->name('strategicplan');
Route::get('/paymentsuccess', 'PageController@paymentsuccess')->name('paymentsuccess');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/ourgallery', 'PageController@gallery')->name('gallery');
Route::get('/staff', 'PageController@staff')->name('staff');
Route::get('/board', 'PageController@board')->name('board');
Route::get('/singlestaff/{id}', 'PageController@singlestaff')->name('singlestaff');
Route::get('/singlemember/{id}', 'PageController@singleboardmember')->name('singleboardmember');


Route::get('/clinicalcare/goals', 'PageController@goals')->name('goals');
Route::get('/clinicalcare/vision', 'PageController@vision')->name('vision');
Route::get('/clinicalcare/centres', 'PageController@centres')->name('centres');


Route::get('/communityengagement/program', 'PageController@program')->name('program');
Route::get('/communityengagement/training', 'PageController@training')->name('training');
Route::get('/communityengagement/collaborationpartnership', 'PageController@collaborationpartnership')->name('collaborationpartnership');

//Route::get('/healthpolicyadvocacy/manuscriptpublication', 'PageController@manuscriptpublication')->name('manuscriptpublication');


Route::get('/preventivehealthcareservices/program', 'PageController@phcsprogram')->name('phcsprogram');
Route::get('/preventivehealthcareservices/outreach', 'PageController@outreach')->name('outreach');
Route::get('/preventivehealthcareservices/services', 'PageController@services')->name('services');


Route::get('/healthcareresearch/priorities', 'PageController@priorities')->name('priorities');
Route::get('/healthcareresearch/manuscriptandpublications', 'PageController@manuscriptandpublications')->name('manuscriptandpublications');
Route::get('/healthcareresearch/research', 'PageController@research')->name('research');


Route::get('/healthpolicyadvocacy/priorities', 'PageController@advocacypriorities')->name('advocacypriorities');
Route::get('/healthpolicyadvocacy/policy', 'PageController@policy')->name('policy');
Route::get('/healthpolicyadvocacy/advocacy', 'PageController@advocacy')->name('advocacy');

Route::get('/eventdetails/{id}', 'PageController@eventdetails')->name('eventdetails');
Route::get('/listdetails/{id}', 'PageController@listdetails')->name('listdetails');

Route::post('/savevolunteer', 'VolunteerController@savevolunteer')->name('savevolunteer');
Route::post('/savecontact', 'ContactController@savecontact')->name('savecontact');



//Route::get('cms/event', 'EventController@advocacy')->name('advocacy');

Route::get('cms/event/create', 'EventController@create')->name('cms/eventcreate');
Route::post('cms/event/store', 'EventController@store')->name('cms/event.store');
Route::get('cms/event/show/{id}', 'EventController@show')->name('cms/event.show');
Route::post('cms/event/update/{id}', 'EventController@update')->name('cms/event.update');
Route::get('cms/event/edit/{id}', 'EventController@edit')->name('cms/event.edit');
Route::get('cms/event/delete/{id}', 'EventController@destroy')->name('cms/event.delete');
Route::get('cms/event', 'EventController@index')->name('cms/event');

Route::get('cms/list/create', 'LinkController@create')->name('cms/listcreate');
Route::post('cms/list/store', 'LinkController@store')->name('cms/list.store');
Route::get('cms/list/show/{id}', 'LinkController@show')->name('cms/list.show');
Route::post('cms/list/update/{id}', 'LinkController@update')->name('cms/list.update');
Route::get('cms/list/edit/{id}', 'LinkController@edit')->name('cms/list.edit');
Route::get('cms/list/delete/{id}', 'LinkController@destroy')->name('cms/list.delete');
Route::get('cms/list', 'LinkController@index')->name('cms/list');


Route::get('cms/member/create', 'MemberController@create')->name('cms/membercreate');
Route::post('cms/member/store', 'MemberController@store')->name('cms/member.store');
Route::get('cms/member/show/{id}', 'MemberController@show')->name('cms/member.show');
Route::post('cms/member/update/{id}', 'MemberController@update')->name('cms/member.update');
Route::get('cms/member/edit/{id}', 'MemberController@edit')->name('cms/member.edit');
Route::get('cms/member/delete/{id}', 'MemberController@destroy')->name('cms/member.delete');
Route::get('cms/member', 'MemberController@index')->name('cms/member');


Route::get('cms/title/create', 'TitleController@create')->name('cms/titlecreate');
Route::post('cms/title/store', 'TitleController@store')->name('cms/title.store');
Route::get('cms/title/show/{id}', 'TitleController@show')->name('cms/title.show');
Route::post('cms/title/update/{id}', 'TitleController@update')->name('cms/title.update');
Route::get('cms/title/edit/{id}', 'TitleController@edit')->name('cms/title.edit');
Route::get('cms/title/delete/{id}', 'TitleController@destroy')->name('cms/title.delete');
Route::get('cms/title', 'TitleController@index')->name('cms/title');


Route::get('cms/gallery/create', 'GalleryController@create')->name('cms/gallerycreate');
Route::post('cms/gallery/store', 'GalleryController@store')->name('cms/gallery.store');
Route::get('cms/gallery/show/{id}', 'GalleryController@show')->name('cms/gallery.show');
Route::post('cms/gallery/update/{id}', 'GalleryController@update')->name('cms/gallery.update');
Route::get('cms/gallery/edit/{id}', 'GalleryController@edit')->name('cms/gallery.edit');
Route::get('cms/gallery/delete/{id}', 'GalleryController@destroy')->name('cms/gallery.delete');
Route::get('cms/gallery', 'GalleryController@index')->name('cms/gallery');


Route::get('cms/setting/create', 'SettingController@create')->name('cms/settingcreate');
Route::post('cms/setting/store', 'SettingController@store')->name('cms/setting.store');
Route::get('cms/setting/show/{id}', 'SettingController@show')->name('cms/setting.show');
Route::post('cms/setting/update/{id}', 'SettingController@update')->name('cms/setting.update');
Route::get('cms/setting/edit/{id}', 'SettingController@edit')->name('cms/setting.edit');
Route::get('cms/setting/delete/{id}', 'SettingController@destroy')->name('cms/setting.delete');
Route::get('cms/setting', 'SettingController@index')->name('cms/setting');



Route::get('cms/volunteer', 'VolunteerController@index')->name('cms/volunteer');
Route::get('cms/contact', 'ContactController@index')->name('cms/contact');


//Route::get('cms', 'PageController@cms')->name('cms');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
