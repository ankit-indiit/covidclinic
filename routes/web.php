<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\NearestLocationUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TermsConditionController;

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

Auth::routes();
Route::group(['middleware' => ['auth']], function() {

});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [HomeController::class, 'dashboard'])->name('admin');
});

Route::prefix('clinic')->group(function () {
    Route::get('/profile', [ClinicController::class, 'profile'])->name('clinic.profile');
    Route::post('/update-profile', [ClinicController::class, 'updateProfile'])->name('update-profile');
    Route::post('/update-password', [ClinicController::class, 'updatePassword'])->name('update-password');
    Route::post('/updateProfileImage', [ClinicController::class, 'updateProfileImage'])->name('updateProfileImage');
    Route::get('/patients', [ClinicController::class, 'patients'])->name('patients');
    Route::get('/clinic-patient', [ClinicController::class, 'clinicPatient'])->name('clinic-patient');
    Route::post('/add-patient', [ClinicController::class, 'addPatient'])->name('add-patient');
    Route::get('/edit-patient/{id}', [ClinicController::class, 'editPatient'])->name('edit-patient');
    Route::post('/update-patient', [ClinicController::class, 'updatePatient'])->name('update-patient');
    Route::get('/patient-reports/{id}', [ClinicController::class, 'patientReports'])->name('patient-reports');
    Route::get('/add-report-form/{id}', [ClinicController::class, 'addReportForm'])->name('add-report-form');
    Route::post('/add-patient-report', [ClinicController::class, 'addPatientReport'])->name('add-patient-report');
    Route::get('/edit-patient-report/{id}', [ClinicController::class, 'editPatientReport'])->name('edit-patient-report');
    Route::post('/update-patient-report', [ClinicController::class, 'updatePatientReport'])->name('update-patient-report');
    Route::get('/report-detail/{id}', [ClinicController::class, 'reportDetail'])->name('report-detail');
    Route::get('/download-pdf/{id}', [ClinicController::class, 'downloadPdf'])->name('download-pdf');
});

Route::prefix('patient')->group(function () {
    Route::get('/patient-reports', [PatientController::class, 'reports'])->name('reports');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/nearest-location.', [NearestLocationUsController::class, 'index'])->name('nearest-location');
Route::get('/patient-login-form', [PatientController::class, 'loginForm'])->name('patient-login');
Route::post('/patient-login', [PatientController::class, 'login'])->name('patient.login');
Route::get('/clinic', [ClinicController::class, 'index'])->name('clinic');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/terms-condition', [TermsConditionController::class, 'index'])->name('terms-condition');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');