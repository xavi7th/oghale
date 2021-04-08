<?php

use Illuminate\Support\Facades\Route;
use App\Modules\SuperAdmin\Http\Controllers\SuperAdminController;

Route::prefix('superadmin')->group(function() {
    Route::get('/', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
});
