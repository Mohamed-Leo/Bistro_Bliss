<?php

use App\Http\Controllers\AdminpanelController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MainPagesController;
use App\Mail\notifymail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// main pages controller routes----------------------------------
Route::controller(MainPagesController::class)->group(function() {
    Route::get('/' , 'homepage')->name('home.page');
    Route::get('about' , 'aboutpage')->name('about.page');
    // menu routes---
    Route::get('menu' , 'menupage')->name('menu.page');
    Route::get('menu-breakfast', 'menubreakpage')->name('menu.break.page');
    Route::get('menu-maindishes', 'menudishespage')->name('menu.dishes.page');
    Route::get('menu-drinks', 'menudrinkspage')->name('menu.drinks.page');
    Route::get('menu-dessert', 'menudessertpage')->name('menu.dessert.page');

    // blog page----
    Route::get('blogs' , 'blogspage')->name('blogs.page');

    // bookings routes---
    Route::post('bookaction' , 'bookaction')->name('book.action');
    Route::get('bookform' , 'bookform')->name('book.form');

    // my bookings routes------------------
    Route::get('my-bookings' , 'mybookingspage')->name('my.bookings');
    Route::get('cancel-bookings/{id}' , 'cancelbookimg')->name('cancel.booking');

    // contact us--------------
    Route::get('contactus' , 'contactform')->name('contact.form');

    // notifications routes------
    Route::get('notifications' , 'shownotifications')->name('notifications');
    Route::get('read-notification/{id}' , 'readnotification')->name('read.notification');
    Route::get('delete-notification/{id}' , 'deletenotify')->name('delete.notification');
});



// AdminpanelController with middleware-----------------------------------
Route::middleware('AdminPanelMiddleware')->group(function () {
    Route::controller(AdminpanelController::class)->group(function() {
        // show adminpage--
        Route::get('admin' , 'adminpage')->name('admin.page');
        // add menu routes--
        Route::get('addmenu' , 'addmenuform')->name('addmenu.form');
        Route::post('sendmenu' , 'addmenuaction')->name('addmenu.action');
        Route::get('showmenu' , 'showmenutable')->name('menu.table');

        // update menu routes--
        Route::get('updatemenuform/{id}' , 'updatemenuform')->name('updatemenu.form');
        Route::post('updatemenu/{id}', 'updatemenuaction')->name('updatemenu.action');

        // delete menu routes--
        Route::get('destroyitem/{id}' , 'destroy')->name('destroy.item');
        Route::get('showdeleted' , 'showdeleted')->name('show.deleted');
        Route::get('restoreitem/{id}' , 'restore')->name('restore.item');
        Route::get('forcedelete/{id}' , 'forcedelete')->name('force.delete');
        Route::get('deleteall' , 'deleteall')->name('delete.all');

        // show users------
        Route::get('show-users' , 'showusers')->name('show.users');

        // bokkings routes---
        Route::get('show-bookings' , 'showbookings')->name('show.bookings');
        Route::get('accept-booking/{id}' , 'acceptbooking')->name('accept.booking');
        Route::get('reject-booking/{id}' , 'rejectbooking')->name('reject.booking');

        // contact routes----
        Route::get('show-contacts' , 'showcontacts')->name('show.contacts');
    });
});


// contact form controller routes-----------------------------------
Route::controller(ContactFormController::class)->group(function () {
    Route::post('contact-message' , 'contactaction')->name('contact.action');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
        // return view('dashboard');
    })->name('dashboard');
});


// google login-----------
Route::controller(GoogleController::class)->group(function () {
    // google-------------
    Route::get('auth/google' , 'googleform')->name('google.login');
    Route::get('auth/google/callback' , 'googlelogin')->name('google.callback');

    // facebook-------------
    Route::get('auth/facebook' , 'facebookform')->name('facebook.login');
    Route::get('auth/facebook/callback' , 'facebooklogin')->name('facebook.callback');
});


// error route------
Route::get('error' , function() {
    return view('error');
})->name('error');


// mail--------
Route::get('sendmail' , function () {
    Mail::to(auth()->user()->email)->send(new notifymail());
    return view('home');
});


