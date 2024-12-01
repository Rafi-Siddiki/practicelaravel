<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = auth()->user();

    // Redirect based on user role
    switch ($user->role) {
        case 'admin':
            return redirect()->route('admin.dashboard');
        case 'employee':
            return redirect()->route('employee.dashboard');
        case 'customer':
            return redirect()->route('customer.dashboard');
        default:
            // Handle unknown roles
            return abort(403, 'Unauthorized access');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware(['auth', 'verified'])->group(function (){
    route::get('admin/dashboard',[AdminController::class,'index'])-> middleware(['auth','admin'])->name('admin.dashboard');
    route::get('employee/dashboard',[EmployeeController::class,'index'])-> middleware(['auth','employee'])->name('employee.dashboard');
    route::get('customer/dashboard',[CustomerController::class,'index'])-> middleware(['auth','customer'])->name('customer.dashboard');
});
