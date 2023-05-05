<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\Confimation;
use App\Models\Pet;
use App\Models\User; 
use App\Models\ApplicationStatus;
use App\Models\Appointment;
use App\Http\Controllers\appointmentStatusController;
use App\Http\Controllers\ApplicationStatusController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ChangePasswordController;
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
//guest
Route::get('/', function () {
    $dataRandom = Pet::inRandomOrder()->limit(3)->get();
    return view('welcome')-> with('randoms', $dataRandom);
});
Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/about-us', function () {
    return view('about');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/services/adoption', function () {
    $pets = Pet::all();
    return view('adoption')-> with('pets', $pets);
    
});
Route::get('/services/grooming', function () {
    return view('grooming');
    
});
Route::get('/services/preventive-care', function () {
    return view('preventive');
});

// client
Auth::routes(['verify' => true]);
Route::get('/services/application',[App\Http\Controllers\ApplicationStatusController::class, 'index'])->name('application')->middleware(['auth']);
Route::post('/services/application',[App\Http\Controllers\ApplicationStatusController::class, 'store'])->name('appsubmit')->middleware(['auth']);
Route::get('/services/application{id}', [App\Http\Controllers\PetController::class, 'petId'])->name('applicationId')->middleware(['auth']);
Route::get('/appointment/book-appointment', [App\Http\Controllers\AppointmentStatusController::class, 'index'])->name('book-appointment')->middleware(['auth']);
Route::post('/appointment/book-appointment', [App\Http\Controllers\AppointmentStatusController::class, 'book'])->name('book-appointment')->middleware(['auth']);
Route::get('/home', function(){
    return view('home');
})->middleware(['auth', 'verified']);

Route::prefix('/home')->middleware(['auth', 'verified'])->group(function () {
Route::get('/user-profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user-profile', [App\Http\Controllers\UserController::class, 'userEditProfile'])->name('updateProfile');
Route::get('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'index']);
Route::post('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'changePassword'])->name('change-password');

});


//admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('dashboard/petlist', [App\Http\Controllers\PetController::class, 'index'])->name('petlist');
    Route::get('dashboard/petlist/delete/{id}', [App\Http\Controllers\PetController::class, 'destroy'])->name('deletePet');
    Route::get('dashboard/petlist/update/{id}', [App\Http\Controllers\PetController::class, 'updatePet'])->name('updatePet');
    Route::post('dashboard/petlist/save-update', [App\Http\Controllers\PetController::class, 'saveupdate'])->name('updatedPet');
    Route::post('dashboard/petlist', [App\Http\Controllers\PetController::class, 'store'])->name('addPet');
    Route::get('dashboard/client-info', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('/dashboard/client-applications/update{id}', [App\Http\Controllers\ApplicationStatusController::class, 'edit'])->name('updatedStatus');
    Route::get('/dashboard/appointment/update{id}', [App\Http\Controllers\appointmentStatusController::class, 'editStatus'])->name('bookingstatus');
    Route::post('/dashboard/appointment/update', [App\Http\Controllers\appointmentStatusController::class, 'update'])->name('savebookingstatus');
    Route::post('dashboard/client-application/update', [App\Http\Controllers\ApplicationStatusController::class, 'update'])->name('saveStatus');


    Route::resource('/dashboard/client-applications', ApplicationStatusController::class);
    Route::resource('/dashboard/appointment', appointmentController::class);  
});


     Route::get('/admin/dashboard/petlist', function(){
     $pets = Pet::all();
      return view('admin.dashboard-pets')-> with('pets', $pets);
  })->middleware(['auth', 'isAdmin']);


    Route::get('/admin/dashboard/client-info', function(){
        $users = User::all();
        return view('admin.dashboard-client')-> with('users', $users);
    })->middleware(['auth', 'isAdmin']);


    Route::get('/admin/dashboard/client-applications', function(){
        $applications_status = ApplicationStatus::all();
        $users = User::all();
        $pets = Pet::all();
        $data = [
            'status' => $applications_status,
            'users' => $users,
            'pets' => $pets
        ];
        return view('admin.dashboard-applications')-> with('applications', $data);
    })->middleware(['auth', 'isAdmin']);

    Route::get('/admin/dashboard/appointment', function(){
        $appointments = Appointment::all();
        $users = User::all();
        $book = [
            'sched' => $appointments,
            'users' => $users
            
        ];
        return view('admin.dashboard-appointment')-> with('bookings', $book);
    })->middleware(['auth', 'isAdmin']);



    //email
    Route::get('admin/dashboard/email', function(){
        return view('emails.confirmation');
    });

    