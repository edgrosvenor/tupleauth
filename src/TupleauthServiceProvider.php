<?php

namespace Tupleauth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

class TupleauthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('web');
        Route::post('login', [LoginController::class, 'login'])->middleware('web');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('web');
        Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('web');
        Route::post('register', [RegisterController::class, 'register'])->middleware('web');
        Route::get('password/reset', [ForgotPasswordController::class, 'showLinkReqeustForm'])->name('password.request')->middleware('web');
        Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email')->middleware('web');
        Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset')->middleware('web');
        Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update')->middleware('web');
        Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice')->middleware('web');
        Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware('web');
        Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend')->middleware('web');
    }
}
