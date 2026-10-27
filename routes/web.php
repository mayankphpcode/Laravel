
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Admission;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;


// auth routes
Route::get('register',function(){
return view('Auth.register');
})->name('userRegister');

Route::get('login',function(){
return view('Auth.login');
})->name('login');


Route::post('/users', [
    AuthController::class,
    'store'
])->name('users.store');

Route::post('login', [AuthController::class,'login'])->name('login.request');

Route::get('logout', [AuthController::class,'logout'])->name('logout');


// adminn routes
Route::group(['middleware' => ['auth'], 'prefix'=>'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});



// publix routes
Route::group(['prefix' => '/'], function(){
    Route::get('/', function () {
        return view('frontend.home');
    })->name('home');

    Route::post('/admission-enquiry', [
        StudentController::class,
        'store'
    ])->name('students.store');

    Route::get('students', [StudentController::class,'index'])->name('students.index');

    Route::get('edit/{id}', [StudentController::class,'edit'])->name('students.edit');

    Route::put('update/{id}', [StudentController::class,'update'])->name('students.update');

    Route::get('delete/{id}', [StudentController::class,'destroy'])->name('students.delete');




});
