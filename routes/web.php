<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadDocuments;
use App\Http\Controllers\UserManagement\UserController;
use App\Http\Controllers\PropertyListingController;
use App\Http\Controllers\AdminPropertyController;
use App\Models\Agent;
use App\Models\UserRole;
use App\Models\User;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostsApiController;
use App\Http\Controllers\PostCommentsApiController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\DeleteRequestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ReasonController;
use App\Http\Controllers\UserManagement\AccountController;







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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', ['as' => 'home_path', 'uses' => function () {
    return view('welcome');
}]);
Route::any('/property/findbyid', [PropertyListingController::class, 'findbyid'])->name('property.findbyid');
Route::any('/property/searchkeyall', [PropertyListingController::class, 'searchkeyall'])->name('property.searchkeyall');
Route::any('/property/findBySearchKeyAll', [PropertyListingController::class, 'findBySearchKeyAll'])->name('property.findBySearchKeyAll');

Route::get('/',[HomeController::class, 'index'])->name('welcome');
Route::any('/property/searchkeyall',[PropertyListingController::class, 'searchkeyall'])->name('property.searchkeyall');

// Route::get('/test',[MessagesController::class, 'index'])->name('messages.list');
// Route::get('/test', function () {

//     return auth()->user()->unreadCount();
// });

Route::get('/upload-documents', [UploadDocuments::class, 'createForm']);
Route::post('/upload-documents', [UploadDocuments::class, 'fileUpload'])->name('file-upload');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});
Route::Post('/block-user',[userController::class, 'blockUser'])->name('block-user');
Route::Get('/blockedAgent',[AgentController::class, 'blockedAgent'])->name('blockedAgent');
Route::Post('/blockedAgent',[AgentController::class, 'blockedAgent'])->name('blockedAgent');

Route::Get('/request-deletion',[DeleteRequestController::class, 'create'])->name('account.delete');
Route::Post('/request-deletion',[DeleteRequestController::class, 'store'])->name('account.store');

Route::Get('/reason/{type}/{status}/{id}',[ReasonController::class, 'create'])->name('reason.create');
Route::Post('/reason/{type}/{status}/{id}',[ReasonController::class, 'store'])->name('reason.store');

Route::group(['middleware' =>['auth','user_status']], function(){
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

    Route::view('userprofile','userprofile')->name('userprofile');

    Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/userDashboard', function () {
        return view('userDashboard');
    })->name('userDashboard');






Route::get('personalinfo',[AccountController::class, 'create'])->name('personalinfo');
Route::put('personalinfo',[AccountController::class, 'update'])->name('personalinfo');
Route::view('becomeAgent','becomeAgent')->name('becomeAgent');
Route::view('reqDeleteAccount','reqDeleteAccount')->name('reqDeleteAccount');
Route::any('/property/reject/{property}',[PropertyListingController::class, 'reject'])->name('property.reject');
Route::any('/property/approve/{property}',[PropertyListingController::class, 'approve'])->name('property.approve');
Route::any('/property/unlist/{property}',[PropertyListingController::class, 'unlist'])->name('property.unlist');
Route::any('/property/reviewlist',[PropertyListingController::class, 'reviewlist'])->name('property.reviewlist');
Route::any('/property/del/{property}',[PropertyListingController::class, 'delete'])->name('property.delete');
Route::get('/my/property',[PropertyListingController::class, 'myListing'])->name('property.my');
Route::get('/mysold/property',[PropertyListingController::class, 'mySoldListing'])->name('property.mysold');
Route::get('/soldall/property',[PropertyListingController::class, 'soldAllListing'])->name('property.soldall');

Route::resource('property', PropertyListingController::class);
Route::resource('AdminProperty', AdminPropertyController::class);
Route::view('agentsDetail','agentsDetail')->name('agentsDetail');
Route::view('docsView','docsView')->name('docsView');
Route::view('requestDeletion','requestDeletion')->name('requestDeletion');
Route::view('verifyDocs','verifyDocs')->name('verifyDocs');
Route::view('verificationRequest','verificationRequest')->name('verificationRequest');
Route::view('requestsAccountDelete','requestsAccountDelete')->name('requestsAccountDelete');
Route::view('deletedAgent','deletedAgent')->name('deletedAgent');
Route::view('propertyAlerts','propertyAlerts')->name('propertyAlerts');

    Route::resource('pass-reset', PasswordController::class)->only([
        'index', 'store'
    ]);
    Route::resource('roles', RoleController::class);
    Route::Delete('/users/del/{user}',[userController::class, 'delete'])->name('users.delete');
    Route::get('/users/deleted',[userController::class, 'deleted'])->name('users.deleted');
    Route::put('/users/restore/{user}',[userController::class, 'restore'])->name('users.restore');
    Route::Get('/users/blocked',[userController::class, 'blocked'])->name('users.blocked');
    Route::any('/users/block/{user}',[userController::class, 'block'])->name('users.block');
    Route::any('/users/unblock/{user}',[userController::class, 'unblock'])->name('users.unblock');
    Route::any('/users/find/',[userController::class, 'findBySearchKeyAll'])->name('users.findBySearchKeyAll');

    Route::resource('users', UserController::class);
    Route::any('/agent/doc/{agent}',[AgentController::class, 'doc'])->name('doc.view');
    Route::any('/agent/approve/{agent}',[AgentController::class, 'approve'])->name('agent.approve');
    Route::any('/agent/reject/{agent}',[AgentController::class, 'reject'])->name('agent.reject');

    Route::Get('/agent/list',[AgentController::class, 'agentListView'])->name('agent.list');
    Route::resource('agent', AgentController::class);


    Route::post('message/{id}',[MessagesController::class,'sendMessage'])->name('message.send');
    Route::Get('message/{id}',[MessagesController::class,'createMessage'])->name('message.create');

    Route::post('/become-agent',[AgentController::class, 'registerAgent'])->name('agent.register');
    Route::get('/become-agent',[AgentController::class, 'registerForm'])->name('agent.form');
    Route::resource('agent', AgentController::class);
    Route::get('reports',[ReportsController::class, 'reports'])->name('reports');


});



Route::post('appeal',[AccountController::class, 'unblockAppeal'])->name('unblock.appeal');

Route::get('appeal',[AccountController::class, 'appeal'])->name('appeal.success');

    // Route::view('blockedaccount','blockedaccount')->name('accountblocked');
    Route::get('newsletter',[NewsletterController::class, 'create'])->name('newsletter');
    Route::post('newsletter',[NewsletterController::class, 'store'])->name('newsletter');


require __DIR__.'/auth.php';
require __DIR__.'/blog.php';
