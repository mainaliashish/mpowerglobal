<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\MessagesController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\SliderImageController;
use App\Http\Controllers\Backend\AnnouncementsController;
use App\Http\Controllers\Backend\ClientsController;

Auth::routes();

Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth'], 'prefix' => 'backend'], function () {
    Route::get('/pages/dashboard', function () { return view('backend.pages.dashboard'); })->name('backend.dashboard');

    // Announcements Routes
    Route::get('/announcements', [AnnouncementsController::class, 'index'])->name('backend.announcements');
    Route::get('/announcements/create', [AnnouncementsController::class, 'create'])->name('backend.announcements.create');
    Route::post('/announcements/store', [AnnouncementsController::class, 'store'])->name('backend.announcements.store');
    Route::get('/announcements/{announcement}/show', [AnnouncementsController::class, 'show'])->name('backend.announcements.show');
    Route::get('/announcements/{announcement}/edit', [AnnouncementsController::class, 'edit'])->name('backend.announcements.edit');
    Route::patch('/announcements/{announcement}/update', [AnnouncementsController::class, 'update'])->name('backend.announcements.update');
    Route::get('/announcements/{announcement}/delete', [AnnouncementsController::class, 'delete'])->name('backend.announcements.delete');

    // Update Password
    Route::get('/changepassword', [AccountController::class, 'password'])->name('backend.accounts.changepassword');
    Route::patch('/updatepassword', [AccountController::class, 'updateAccountPassword'])->name('backend.accounts.updatepassword');
    Route::get('/changeprofile', [AccountController::class, 'profile'])->name('backend.accounts.profile');
    Route::patch('/updateprofile', [AccountController::class, 'updateAccountProfile'])->name('backend.accounts.updateproflie');
    Route::get('/changeabout', [AboutController::class, 'aboutUs'])->name('backend.accounts.about');
    Route::patch('/updateabout/{about}', [AboutController::class, 'updateAboutUs'])->name('backend.accounts.updateabout');

    // Contacts Routes
    Route::get('/contacts', [ContactController::class, 'index'])->name('backend.contacts');
    Route::get('/contacts/create', [ContactController::class, 'create'])->name('backend.contacts.create');
    Route::post('/contacts/store', [ContactController::class, 'store'])->name('backend.contacts.store');
    Route::get('/contacts/{contact}/show', [ContactController::class, 'show'])->name('backend.contacts.show');
    Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('backend.contacts.edit');
    Route::patch('/contacts/{contact}/update', [ContactController::class, 'update'])->name('backend.contacts.update');
    Route::get('/contacts/{contact}/delete', [ContactController::class, 'delete'])->name('backend.contacts.delete');

    // Messages Routes
    Route::get('/messages', [MessagesController::class, 'index'])->name('backend.messages');
    Route::get('/messages/show/{id}', [MessagesController::class, 'show'])->name('backend.messages.show');
    Route::get('/messages/destroy/{id}', [MessagesController::class, 'destroy'])->name('backend.messages.destroy');

    // Services Routes
    Route::get('/services', [ServicesController::class, 'index'])->name('backend.services');
    Route::get('/services/create', [ServicesController::class, 'create'])->name('backend.services.create');
    Route::post('/services/store', [ServicesController::class, 'store'])->name('backend.services.store');
    Route::get('/services/show/{service}', [ServicesController::class, 'show'])->name('backend.services.show');
    Route::get('/services/edit/{service}', [ServicesController::class, 'edit'])->name('backend.services.edit');
    Route::patch('/services/update/{service}', [ServicesController::class, 'update'])->name('backend.services.update');
    Route::get('/services/destroy/{service}', [ServicesController::class, 'destroy'])->name('backend.services.destroy');

    // Team Routes
    Route::get('/teams', [TeamController::class, 'index'])->name('backend.teams');
    Route::get('/teams/create', [TeamController::class, 'create'])->name('backend.teams.create');
    Route::post('/teams/store', [TeamController::class, 'store'])->name('backend.teams.store');
    Route::get('/teams/show/{id}', [TeamController::class, 'show'])->name('backend.teams.show');
    Route::get('/teams/edit/{id}', [TeamController::class, 'edit'])->name('backend.teams.edit');
    Route::patch('/teams/update/{id}', [TeamController::class, 'update'])->name('backend.teams.update');
    Route::get('/teams/destroy/{id}', [TeamController::class, 'destroy'])->name('backend.teams.destroy');

    // Slider Images
    Route::get('/sliders', [SliderImageController::class, 'sliderImage'])->name('backend.sliders');
    Route::get('/sliders/show/{id}', [SliderImageController::class, 'showImage'])->name('backend.sliders.show');
    Route::get('/sliders/create', [SliderImageController::class, 'createImage'])->name('backend.sliders.create');
    Route::post('/sliders/store', [SliderImageController::class, 'storeImage'])->name('backend.sliders.store');
    Route::get('/sliders/edit/{id}', [SliderImageController::class, 'editImage'])->name('backend.sliders.edit');
    Route::patch('/sliders/update/{id}', [SliderImageController::class, 'updateImage'])->name('backend.sliders.update');
    Route::get('/sliderimages/destroy/{id}', [SliderImageController::class, 'destroyImage'])->name('backend.sliders.destroy');


    // Clients Section
    Route::get('/clients', [ClientsController::class, 'clients'])->name('backend.clients');
    Route::get('/clients/show/{id}', [ClientsController::class, 'showClient'])->name('backend.clients.show');
    Route::get('/clients/create', [ClientsController::class, 'createClient'])->name('backend.clients.create');
    Route::post('/clients/store', [ClientsController::class, 'storeClient'])->name('backend.clients.store');
    Route::get('/clients/edit/{id}', [ClientsController::class, 'editClient'])->name('backend.clients.edit');
    Route::patch('/clients/update/{id}', [ClientsController::class, 'updateClient'])->name('backend.clients.update');
    Route::get('/clients/destroy/{id}', [ClientsController::class, 'destroyClient'])->name('backend.clients.destroy');
});
