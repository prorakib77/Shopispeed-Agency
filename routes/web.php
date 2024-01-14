<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MembershipPlaneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;

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

// frontend 
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('membership/{plane_id}', [FrontendController::class,'membership_details'])->name('membership.details');
Route::get('/billing/{plane_id}', [BillingController::class, 'billing'])->name('billing');
Route::post('billing/all_billing', [BillingController::class, 'all_billing'])->name('billing.all');
Route::get('orderdetails', [FrontendController::class, 'orderdetails'])->name('orderdetails');
Route::post('/key_confirmation', [BillingController::class, 'key_confirmation'])->name('key_confirmation');

// frontend 
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    // Membership Plane part 
    Route::resource('membership', MembershipPlaneController::class);
    // Membership Plane part 

    // service part 
    Route::resource('service', ServiceController::class);
    // service part 

});

require __DIR__.'/auth.php';
