<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\LoginSocialiteController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetsController;

Route::middleware('guest')->group(function () {
    Route::get('/login/{driver}/redirect', [LoginSocialiteController::class, 'validator'])
                ->name('login.social.redirect');
    
    Route::get('/auth/{driver}/callback', [LoginSocialiteController::class, 'callback']);

    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/meusPets', [PetsController::class, 'index'])->name('meusPets.index');
    Route::get('/meusPets/criar', [PetsController::class, 'create'])->name('meusPets.create');
    Route::post('/meusPets/salvar', [PetsController::class, 'store'])->name('meusPets.store');
    Route::get('/meusPets/{pets}/edit', [PetsController::class, 'edit'])->name('meusPets.edit');
    Route::put('/meusPets/atualizar/{id}', [PetsController::class, 'update'])->name('meusPets.update');
    Route::delete('/meusPets/excluir/{id}', [PetsController::class, 'destroy'])->name('meusPets.destroy');
    Route::get('/pet/{id}', [PetsController::class, 'show'])->name('meusPets.show');
});

Route::middleware(['auth', 'verified'])->group(function (){
    Route::get('/pet/contato/{id}', [MailController::class, 'contact'])->name('pet.contact');
    Route::post('/pet/mensagem/{id}', [MailController::class, 'formMessage'])->name('mensagem.formMessage');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
