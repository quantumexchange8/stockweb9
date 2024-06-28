<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Index');
})->name('index');

Route::prefix('/about')->group(function() {
    Route::get('/about', function () {
        return view('about/About');
    })->name('about');

    Route::get('/mission', function () {
        return view('about/Mission');
    })->name('mission');

    Route::get('/code_of_conduct', function () {
        return view('about/CodeOfConduct');
    })->name('code_of_conduct');

    Route::get('/conflict_of_interest', function () {
        return view('about/ConflictOfInterest');
    })->name('conflict_of_interest');

    Route::get('/executive_management', function () {
        return view('about/ExecutiveManagement');
    })->name('executive_management');
});

Route::get('/services', function () {
    return view('services/Services');
})->name('services');

Route::get('/corporate_governance', function () {
    return view('CorporateGovernance');
})->name('corporate_governance');

Route::get('/environmental_policy', function () {
    return view('EnvironmentalPolicy');
})->name('environmental_policy');

Route::get('/privacy_statement', function () {
    return view('PrivacyStatement');
})->name('privacy_statement');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/contact', function () {
    return view('Contact');
})->name('contact');
