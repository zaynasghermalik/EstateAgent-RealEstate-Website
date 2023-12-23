<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\PropertyController;
use App\Http\Controllers\Frontend\MailController;
use App\Http\Controllers\Frontend\EmailController;
use App\Http\Controllers\Frontend\PlotController;
use App\Http\Controllers\Frontend\SellerController;
use App\Http\Controllers\Frontend\HouseController;
use App\Http\Controllers\Frontend\FileController;








use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;



// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [HomeController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/property', [PropertyController::class, 'index']);
Route::any('/mail', [MailController::class, 'show'])->name('mail');
Route::any('/mailcreate', [EmailController::class, 'create'])->name('mailcreate');

Route::any('/mailsend', [MailController::class, 'sendMail'])->name('mailsend');

Route::any('/frontend/contact', [MailController::class, 'sendMail'])->name('frontend.contact');


Route::any('/email', [EmailController::class, 'sendEmail'])->name('email');
Route::any('/plots/add', [PlotController::class, 'showAdd'])->name('plotsadd');
Route::any('/plots/read', [PlotController::class, 'read'])->name('plots');
Route::any('/sellers/add', [SellerController::class, 'create'])->name('sellersread');
Route::any('/sellers/read', [SellerController::class, 'read'])->name('sellersread');
Route::any('/houses/add', [HouseController::class, 'showAdd'])->name('housesread');
Route::any('/houses/read', [HouseController::class, 'read'])->name('housesread');
Route::any('/file', [FileController::class, 'files'])->name('file');

// Add this to your web.php or routes.php file

Route::any('/sellers/search', [SellerController::class, 'search'])->name('sellers.search');























Route::get('user/homepage', function () {
    return view('user.homepage');
});


//==========================Search Route===========================================

Route::get('search','App\Http\Controllers\SearchController@show');

Route::any('search/search','App\Http\Controllers\SearchController@search')->name('search.search');

//==========================Files Route===========================================
Route::get('file/file','App\Http\Controllers\FileController@files');
Route::get('file/create','App\Http\Controllers\FileController@create')->name('file.create');
Route::post('file/store','App\Http\Controllers\FileController@store')->name('file.store');
Route::resource('files', 'App\Http\Controllers\FileController');
Route::get('file/{uuid}/download', 'App\Http\Controllers\FileController@download')->name('file.download');
Route::get('file/{id}/delete', 'App\Http\Controllers\FileController@delete')->name('file.delete');


//--------------------------Plot--------------------------------------------
Route::get('plot/add','App\Http\Controllers\PlotController@showAdd');
Route::post('plot/store','App\Http\Controllers\PlotController@store')->name('plot.store');
Route::get('plot/read','App\Http\Controllers\PlotController@read');
Route::get('plot/userread','App\Http\Controllers\PlotController@userread');
Route::get('plot/delete/{id}','App\Http\Controllers\PlotController@delete');
Route::get('plot/update/{id}', 'App\Http\Controllers\PlotController@update');
Route::post('plot/saveUpdatedData/{id}', 'App\Http\Controllers\PlotController@saveUpdatedData')->name('plot.saveUpdatedData');

//--------------------------Houses--------------------------------------------
Route::get('house/add','App\Http\Controllers\HouseController@showAdd');
Route::post('house/store','App\Http\Controllers\HouseController@store')->name('house.store');
Route::get('house/read','App\Http\Controllers\HouseController@read');
Route::get('house/userread','App\Http\Controllers\HouseController@userread');
Route::get('house/delete/{id}','App\Http\Controllers\HouseController@delete');
Route::get('house/update/{id}', 'App\Http\Controllers\HouseController@update');
Route::post('house/saveUpdatedData/{id}', 'App\Http\Controllers\HouseController@saveUpdatedData')->name('house.saveUpdatedData');

//--------------------------Seller--------------------------------------------
Route::get('seller/add','App\Http\Controllers\SellerController@create');
Route::post('seller/store','App\Http\Controllers\SellerController@store')->name('seller.store');
Route::get('seller/read','App\Http\Controllers\SellerController@read');
Route::get('seller/delete/{id}','App\Http\Controllers\SellerController@delete');
Route::get('seller/update/{id}', 'App\Http\Controllers\SellerController@update');
Route::post('seller/saveUpdatedData/{id}', 'App\Http\Controllers\SellerController@saveUpdatedData')->name('seller.saveUpdatedData');
Route::get('seller/userread','App\Http\Controllers\SellerController@userread');




//--------------Mail Routes-----------------------------------------
Route::get('testGmail','App\Http\Controllers\MailController@sendMail');
Route::get('mail/mail','App\Http\Controllers\MailController@show');
Route::get('/front/contact.php', 'App\Http\Controllers\Backend\MailController@email);
');



//-------------Blade Mail Routes---------------------------------
Route::get('mail/mail', 'App\Http\Controllers\EmailController@create');
Route::post('mail/mail', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');

// Email Integration Route 



//==========================Admin Auth Routes================================================
Route::post('/admin/save',[AdminController::class, 'save'])->name('admin.save');
Route::post('/admin/check',[AdminController::class, 'check'])->name('admin.check');
Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

Route::group(['middleware'=>['AdminCheck']], function(){
    Route::get('/admin/login',[AdminController::class, 'login'])->name('admin.login');
    Route::get('/admin/register',[AdminController::class, 'register'])->name('admin.register');

    Route::get('/admin/dashboard',[AdminController::class, 'dashboard']);
});

//==========================User Auth Routes================================================
Route::post('/user/save',[UserController::class, 'usersave'])->name('user.save');
Route::post('/user/check',[UserController::class, 'usercheck'])->name('user.check');
Route::get('/user/logout',[UserController::class, 'userlogout'])->name('user.logout');

Route::group(['middleware'=>['UserCheck']], function(){
    Route::get('/user/login',[UserController::class, 'userlogin'])->name('user.login');
    Route::get('/user/register',[UserController::class, 'userregister'])->name('user.register');

    Route::get('/user/view',[UserController::class, 'userview'])->name('user.view');
    Route::get('/user/homepage',[UserController::class, 'userhomepage'])->name('user.homepage');

    

    
});

