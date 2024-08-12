<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;



// Common Resource Routes:
// index - Show all listings
// show - show single listing
// create - show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class,'store']);

// Show Edit Form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit']);


// Single Listing
Route::get('/listings/{listing}', [ListingController::class,'show']);