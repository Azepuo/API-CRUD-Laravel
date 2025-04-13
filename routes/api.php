<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Routes API CRUD Produits
Route::apiResource('products', ProductController::class);
