<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MountLoverController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\TourController;

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

Route::get('/',[MountLoverController::class,'index'])->name('home');
Route::get('/about',[MountLoverController::class,'about'])->name('about');
Route::get('/contact',[MountLoverController::class,'contact'])->name('contact');
Route::get('/package',[MountLoverController::class,'package'])->name('package');
Route::get('/service',[MountLoverController::class,'service'])->name('service');
Route::get('/destination',[MountLoverController::class,'destination'])->name('destination');
Route::get('/booking',[MountLoverController::class,'booking'])->name('booking');
Route::get('/team',[MountLoverController::class,'team'])->name('team');
Route::get('/detail/{id}', [AdminController::class, 'detail'])->name('show-detail');
Route::post('/confirm-booking/{id}', [CartController::class, 'addCart'])->name('add.cart');
Route::get('/confirm-booking', [CartController::class, 'cart'])->name('show-cart');



Route::get('/book-now/{id}',[BookingController::class,'index'])->name('book-now');

Route::get('/customer-login',[CustomerAuthController::class,'loginView'])->name('customer-login');
Route::get('/customer-reg',[CustomerAuthController::class,'registerView'])->name('customer-register');
Route::post('/customer-login',[CustomerAuthController::class,'login'])->name('cus-login');
Route::post('/customer-register',[CustomerAuthController::class,'register'])->name('cus-register');
Route::get('/customer-register',[CustomerAuthController::class,'cusDashboard'])->name('cus-dashboard');
Route::get('/customer-logout',[CustomerAuthController::class,'logout'])->name('cus-logout');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    //Place
    Route::get('/add-place',[PlaceController::class,'add'])->name('add.place');
    Route::post('/create-place',[PlaceController::class,'create'])->name('create.place');
    Route::get('/manage-place',[PlaceController::class,'manage'])->name('manage.place');
    Route::get('/edit-place/{id}',[PlaceController::class,'edit'])->name('edit.place');
    Route::post('/update-place/{id}',[PlaceController::class,'update'])->name('update.place');
    Route::get('/delete-place/{id}',[PlaceController::class,'delete'])->name('delete.place');
    //Spot
    Route::get('/add-spot',[SpotController::class,'add'])->name('add.spot');
    Route::post('/create-spot',[SpotController::class,'create'])->name('create.spot');
    Route::get('/manage-spot',[SpotController::class,'manage'])->name('manage.spot');
    Route::get('/edit-spot/{id}',[SpotController::class,'edit'])->name('edit.spot');
    Route::post('/update-spot/{id}',[SpotController::class,'update'])->name('update.spot');
    Route::get('/delete-spot/{id}',[SpotController::class,'delete'])->name('delete.spot');
    //Tour
    Route::get('/tour/get-spots-by-place',[TourController::class,'getSpotByPlace'])->name('tour.get-spots-by-place');
    Route::get('/add-tour',[TourController::class,'add'])->name('add.tour');
    Route::post('/create-tour',[TourController::class,'create'])->name('create.tour');
    Route::get('/manage-tour',[TourController::class,'manage'])->name('manage.tour');
    Route::get('/edit-tour/{id}',[TourController::class,'edit'])->name('edit.tour');
    Route::post('/update-tour/{id}',[TourController::class,'update'])->name('update.tour');
    Route::get('/delete-tour/{id}',[TourController::class,'delete'])->name('delete.tour');
});
