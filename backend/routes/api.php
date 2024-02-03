<?php


use App\Http\Controllers\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// region Suppliers

Route::post('suppliers', Supplier\StoreController::class)->name('suppliers.store');
Route::put('suppliers/{supplier}', Supplier\UpdateController::class)->name('suppliers.update');
// endregion



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
