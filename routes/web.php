<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DkemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\SmsAppController;
use App\Http\Controllers\SubFormController;
use App\Http\Controllers\TikTakVipController;
use App\Http\Controllers\Alerte_autoController;
use App\Http\Controllers\ClusterBackController;
use App\Http\Controllers\HabilitationController;
use App\Http\Controllers\RecouvrementController;
use App\Http\Controllers\RapprochementController;
use App\Http\Controllers\StatementCorpController;
use App\Http\Controllers\RapprochementEbankingT24Controller;
use App\Http\Controllers\RapprochementVirementBankController;


Route::get('/', [HomeController::class, 'welcome'])->name('home');
Route::get('/signin', [AuthController::class, 'signin']);
Route::post('/signinLogin', [AuthController::class, 'signinLogin'])->name('signinLogin');
Route::get('/callback', [AuthController::class, 'callback']);
Route::get('/signout', [AuthController::class, 'signout']);


//DKEM APP TEST
Route::get('/dkem_test', [DkemController::class,'dkem'])->name('dkem');


// URL PORTAIL APP EXTERNE
Route::get('/dashboard',[HomeController::class, 'portal'])->name('portal');
Route::get('/freez', [HomeController::class, 'freeznew']);
Route::get('/habilitation', [HabilitationController::class, 'habilitation']);


///////////////////////////////////////// Datables Annuaire ////////////////////////////
Route::get('/helpdesk', [HomeController::class, 'helpdesk']);
Route::get('annuairedatables', [HomeController::class, 'annuairedatables'])->name('annuairedatables');
Route::get('annuairedata', [HomeController::class, 'annuairedata']);

//////////////////////////////////////////////////////////
