<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;




// Return Home Page
Route::get('/', function () {
    return view('home');
});




// Return  Register Form
Route::get('/register',[RegisterController::class,'create'])
    ->name('register')
    ->middleware('guest');



// Store User in Database
Route::post('/register',[RegisterController::class,'store'])
    ->middleware('guest')
    ->name('register.store');



// Return Login Form
Route::get('/login',[SessionController::class,'create'])
    ->middleware('guest')
    ->name('login');




// Check User In Database and login
Route::post('/login',[SessionController::class,'store'])
    ->middleware('guest')
    ->name('login');




// User Logout
Route::post('/logout',[SessionController::class,'destroy'])
    ->middleware('auth')
    ->name('logout');




// store message from Contact form in Database
Route::post('/contact',[ContactController::class,'store'])
    ->name('contact');




// Return All Donors
Route::get('/donors',[DonorController::class,'index'])
    ->middleware('auth')
    ->name('donor.index');




// Return Donor Form
Route::get('/create',[DonorController::class,'create'])
    ->middleware('auth')
    ->name('donor.create');




// Store Donor in Database
Route::post('/donors',[DonorController::class,'store'])
    ->name('donor.store');



// find donor Form
Route::get('/find-donor',[CustomerController::class,'create'])
    ->middleware('auth')
    ->name('find-donor.create');



// Store Customers in Database
Route::post('/find-donor',[CustomerController::class,'store'])
    ->name('find-donor.store');




// Admin Home Page
Route::get('/admin',[AdminController::class,'home'])
    ->middleware('admin')
    ->name('admin.home');




// Get Contacts Table
Route::get('/contacts-admin',[ContactController::class,'admin'])
    ->middleware('admin')
    ->name('admin.contacts');


// delete Contact message
Route::delete('/contact/{contact}',[ContactController::class,'destroy'])
    ->middleware('admin')
    ->name('contact.delete');



// Get Donors Table
Route::get('/donors-admin',[DonorController::class,'admin'])
    ->middleware('admin')
    ->name('admin.donors');



//  delete donor
Route::delete('/donors/{donor}',[DonorController::class,'destroy'])
    ->middleware('admin')
    ->name('donors.destroy');



// Get Customers Table
Route::get('/customers-admin',[CustomerController::class,'admin'])
    ->middleware('admin')
    ->name('admin.customers');

// delete customer
Route::delete('/customers/{customer}',[CustomerController::class,'destroy'])
    ->middleware('admin')
    ->name('customer.destroy');
