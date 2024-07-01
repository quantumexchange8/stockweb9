<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Index');
})->name('index');

Route::prefix('/about')->group(function() {
    Route::get('/', function () {
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

Route::prefix('/services')->group(function() {
    Route::get('/', function () {
        return view('services/Services');
    })->name('services');

    Route::get('/investment_management_philosophy', function() {
        return view('services.InvestmentManagementPhilosophy');
    })->name('investment_management_philosophy');

    Route::get('/bespoke_financial_planning', function() {
        return view('services.BespokeFinancialPlanning');
    })->name('bespoke_financial_planning');

    Route::get('/retirement_planning', function() {
        return view('services.RetirementPlanning');
    })->name('retirement_planning');

    Route::get('/corporate_solutions', function() {
        return view('services.CorporateSolutions');
    })->name('corporate_solutions');

    Route::get('/risk_management', function() {
        return view('services.RiskManagement');
    })->name('risk_management');
    
    Route::get('/alternative_investments', function() {
        return view('services.AlternativeInvestments');
    })->name('alternative_investments');

    Route::get('/asset_diversification', function() {
        return view('services.AssetDiversification');
    })->name('asset_diversification');

});

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
