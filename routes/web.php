<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index'])->name('home');

//Admin
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome')->middleware();

Route::get('menucontent/{id}', [HomeController::class, 'menucontent'])->name('menucontent');
Route::get('homedetail/{id}', [HomeController::class, 'homedetail'])->name('homedetail');
Route::get('contentdetail/{id}', [HomeController::class, 'contentdetail'])->name('contentdetail');

//search
Route::get('contentlist/{search}', [HomeController::class, 'contentlist'])->name('contentlist');
Route::post('getcontent', [HomeController::class, 'getcontent'])->name('getcontent');
Route::get('content/{id}', [HomeController::class, 'content'])->name('content');


Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');


//hepsinin önüne admin yazmamak için prefix olarak ekledik.
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::middleware('admin')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
        //menu
        Route::get('/menu', [\App\Http\Controllers\Admin\MenuController::class, 'index'])->name('admin_menu');
        Route::get('/menu/add', [\App\Http\Controllers\Admin\MenuController::class, 'add'])->name('admin_menu_add');
        Route::post('/menu/create', [\App\Http\Controllers\Admin\MenuController::class, 'create'])->name('admin_menu_create');
        Route::get('/menu/edit/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'edit'])->name('admin_menu_edit');
        Route::post('/menu/update/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'update'])->name('admin_menu_update');
        Route::get('/menu/delete/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'destroy'])->name('admin_menu_delete');
        Route::get('/menu/show', [\App\Http\Controllers\Admin\MenuController::class, 'show'])->name('admin_menu_show');


        //Content
        Route::prefix('content')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ContentController::class, 'index'])->name('admin_contents');
            Route::get('create', [\App\Http\Controllers\Admin\ContentController::class, 'create'])->name('admin_content_add');
            Route::post('store', [\App\Http\Controllers\Admin\ContentController::class, 'store'])->name('admin_content_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'edit'])->name('admin_content_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'update'])->name('admin_content_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'destroy'])->name('admin_content_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ContentController::class, 'show'])->name('admin_content_show');
        });


        //comment
        Route::prefix('comment')->group(function () {
            Route::get('/', [CommentController::class, 'index'])->name('admin_comment');
            Route::post('update/{id}', [CommentController::class, 'update'])->name('admin_comment_update');
            Route::get('delete/{id}', [CommentController::class, 'destroy'])->name('admin_comment_delete');
            Route::get('show/{id}', [CommentController::class, 'show'])->name('admin_comment_show');

        });


        //Message
        Route::prefix('messages')->group(function () {
            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
        });

        //Image
        Route::prefix('image')->group(function () {
            Route::get('create/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });

        //Setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update/', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        //Faq
        Route::prefix('faq')->group(function () {
            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show/{id}', [FaqController::class, 'show'])->name('admin_faq_show');
        });


        //User
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::get('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles_store'])->name('admin_user_roles_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });

    }); //admin
}); //auth


Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myaccount');
    Route::get('/mycomments', [UserController::class, 'mycomments'])->name('mycomments');
    Route::get('/destroy/{id}', [CommentController::class, 'destroy'])->name('admin_comment_delete');
});


// hata verdiği için yapamadım. ******Tekrar bak********
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');

    Route::prefix('content')->group(function () {
        Route::get('/', [ContentController::class, 'index'])->name('user_contents');
        Route::get('create', [ContentController::class, 'create'])->name('user_content_add');
        Route::post('store', [ContentController::class, 'store'])->name('user_content_store');
        Route::get('edit/{id}', [ContentController::class, 'edit'])->name('user_content_edit');
        Route::post('update/{id}', [ContentController::class, 'update'])->name('user_content_update');
        Route::get('delete/{id}', [ContentController::class, 'destroy'])->name('user_content_delete');
        Route::get('show', [ContentController::class, 'show'])->name('user_content_show');
    });
    //Image
    Route::prefix('image')->group(function () {
        Route::get('create/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('user_image_show');
    });

});


//login
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


