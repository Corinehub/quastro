<?php

use App\Http\Controllers\CorineHub\AuthController;
use App\Http\Controllers\CorineHub\Dao_DocumentsController;
use App\Http\Controllers\CorineHub\Dao_PaymentsController;
use App\Http\Controllers\CorineHub\DaoController;
use App\Http\Controllers\CorineHub\DocumentsController;
use App\Http\Controllers\CorineHub\ProvidersController;
use App\Http\Controllers\CorineHub\SubscribeController;
use App\Http\Controllers\CorineHub\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware('auth')->group(function (){

    Route::get('/document',[ Dao_DocumentsController::class, "document"])->name('document');
    Route::get('/document/listdoc/{idDao}',[ Dao_DocumentsController::class, "list"])->name('document.list');
    Route::get('/dao/souscription/{id}',[ SubscribeController::class, "subscribe"])->name('dao.subscribe');


    // Route::get('/document/create',[ Dao_DocumentsController::class, "create"])->name('document.create');
    Route::get('/document/create/{id}',[ Dao_DocumentsController::class, "create"])->name('document.create');


    Route::post('/document/store',[ Dao_DocumentsController::class, "store"])->name('document.store');
    Route::get('/document/edit/{id}',[ Dao_DocumentsController::class, "edit"])->name('document.edit');

    Route::get('/document/show/{id}',[ Dao_DocumentsController::class, "show"])->name('document.show');
    Route::put('/document/update/{id}',[ Dao_DocumentsController::class, "update"])->name('document.update');
    // Route::delete('/document/destroy',[ Dao_DocumentsController::class, "destroy"])->name('document.destroy');
    Route::get('/document/delete/{id}',[ Dao_DocumentsController::class, "delete"])->name('document.delete');

    

    Route::get('/dao',[ DaoController::class, "Dao"])->name('dao');
    Route::get('dao/create',[ DaoController::class, "create"])->name('dao.create');
    Route::post('/dao/Store',[ DaoController::class, "store"])->name('dao.store');
    Route::get('/pages/corine/dao/Show/{id}',[ DaoController::class, "show"])->name('dao.show');
    Route::get('/dao/edit/{id}',[ DaoController::class, "edit"])->name('dao.edit');
    
    Route::get('/profile',[ AuthController::class, "profile"])->name('profile');
    Route::get('/profile/provider',[ AuthController::class, "profileProvider"])->name('profile.provider');

    Route::put('/dao/update/{id}',[ DaoController::class, "update"])->name('dao.update');

    
    Route::get('/dao/delete/{idDocument}',[ DaoController::class, "delete"])->name('dao.delete');
    Route::get('/document/download/{id}',[ Dao_DocumentsController::class, "download"])->name('download.document');

  

    Route::get('/mesPaiements', [Dao_PaymentsController::class, 'index'])->name('payment.index');
    Route :: get ( '/payment' , [ Dao_PaymentsController::class, "showPaymentForm"] )-> name ( 'payment.form' ); 
    Route :: post ( '/process-payment/{id}' , [Dao_PaymentsController::class,"processPayment"] )-> name ( 'process.payment' ); 
    Route :: get ( '/payment/success' , function () { 
        return  'Paiement réussi !' ; 
    })-> name ( 'payment.success' ); 
    Route :: get ( '/payment/failure' , function () { 
        return  'Paiement échoué !' ; 
    })-> name ( 'payment.failure' );

    


});
Route::get('/provider/dashboard',[ ProvidersController::class, "dashboard"])->name('provider.dashboard');
Route::get('/provider',[ ProvidersController::class, "index"])->name('provider.index');
Route::get('/dao/dashboard',[ DaoController::class, "dashboard"])->name('dao.dashboard');

Route::get('/dao/details/{id}',[ ProvidersController::class, "details"])->name('dao.details');
Route::get('/soumission/{dao}',[ ProvidersController::class, "soumission"])->name('soumission.dao');
Route::get('/messoumission',[ ProvidersController::class, "mesSoumission"])->name('messoumission.dao');

Route::post('/soumission/Store/{id}',[ ProvidersController::class, "soumissionDao"])->name('soumission.store');

Route::get('/souscription',[ DaoController::class, "listSouscription"])->name('list_souscription');
Route::get('/souscription/details/{id}',[ DaoController::class, "showSouscription"])->name('details.souscription');


Route::get('/',[ DaoController::class, "index"])->name('dashboard');
Route::get('/login',[ AuthController::class, "login"])->name('login');
Route::get('/login/provider',[ AuthController::class, "loginProvider"])->name('login.provider');



Route::get('/login/worker',[ AuthController::class, "loginWorker"])->name('loginworker');
Route::post('/login/work',[ AuthController::class, "loginWork"])->name('loginwork');
Route::post('/login/prov',[ AuthController::class, "loginProv"])->name('loginprov');

Route::put('/profile/update',[ AuthController::class, "profileUpdate"])->name('profile.update');



Route::get('/login/{idDao}',[ AuthController::class, "loginDao"])->name('login.dao');
Route::post('/loginuser/{dao}',[ AuthController::class, "loginUser"])->name('auth.loginuser');

Route::get('/soumission',[ SubscribeController::class, "soumission"]);
Route::post('/soumission/login',[ SubscribeController::class, "soumissionLogin"])->name('soumission.loginuser');
Route::put('/subscriptions/reject/{id}', [SubscribeController::class, 'reject'])->name('souscription.reject');
Route::put('/subscriptions/valider/{id}', [SubscribeController::class, 'valider'])->name('souscription.valider');

Route::get('/logout',[ AuthController::class, "logout"])->name('auth.logout');


Route::get('/register/{dao}',[ AuthController::class, "register"])->name('register');
Route::post('/store/{dao}',[ AuthController::class, "store"])->name('auth.store');











