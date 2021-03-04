<?php

use App\Http\Controllers\Accounting\AccountingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\Bank\BankController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Integration\IntegrationController;
use App\Http\Controllers\Invoice\InvoiceController;
use App\Http\Controllers\LandingController;

Route::group(['middleware' => 'guest'], function() {

    Route::get('/', [LandingController::class, 'index'])->name('landing');

    Route::get('authenticate', [AuthenticateController::class, 'index'])->name('auth.login');
    Route::post('authenticate', [AuthenticateController::class, 'authenticate'])->name('auth.authenticate');

    Route::get('register', [RegisterController::class, 'index'])->name('auth.register');
    Route::post('register', [RegisterController::class, 'store'])->name('auth.store');
});

Route::group(['middleware' => ['auth']], function () {

    // Dashboard
    Route::get('/overview', [DashboardController::class, 'index'])->name('overview');

    // Firma
    Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
    Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');
    Route::get('/{team}', [CompanyController::class, 'show'])->name('company.show');
    Route::post('/company/store', [CompanyController::class, 'store'])->name('company.store');

    // Invoice
    Route::get('/{team}/invocies', [InvoiceController::class, 'index'])->name('invoice.index');
    Route::get('/{team}/invocies/create', [InvoiceController::class, 'create'])->name('invoice.create');
    Route::post('/{team}/invocies/store', [InvoiceController::class, 'store'])->name('invoice.store');

    // Accounting
    Route::get('/{team}/accounting', [AccountingController::class, 'index'])->name('accounting.index');
    Route::get('/{team}/accounting/create', [AccountingController::class, 'create'])->name('accounting.create');
    Route::post('/{team}/accounting/store', [AccountingController::class, 'store'])->name('accounting.store');

    // Contact
    Route::get('/{team}/contacts', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/{team}/contacts/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/{team}/contacts/store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/{team}/contacts/{contact}', [ContactController::class, 'show'])->name('contact.show');

    // Bank
    Route::get('/{team}/bank', [BankController::class, 'index'])->name('bank.index');

    // Integrations
    Route::get('/{team}/integrations', [IntegrationController::class, 'index'])->name('integration.index');

    // Auth
    Route::post('logout', [AuthenticateController::class, 'logout'])->name('auth.logout');
});
