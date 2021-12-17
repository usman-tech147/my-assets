<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\TopicController;

Route::get('/admin/login',[AdminLoginController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login',[AdminLoginController::class, 'login'])->name('admin.submit.login');
Route::post('/admin/logout',[AdminLoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/web-technologies',[AdminController::class, 'webTechnologies'])->name('admin.webTechnologies');


Route::get('/categories',[AdminController::class, 'categories'])->name('admin.categories');
Route::get('create/category',[AdminController::class, 'createCategory'])->name('admin.create.category');
Route::post('store/category',[AdminController::class, 'storeCategory'])->name('admin.store.category');
Route::get('edit/category',[AdminController::class, 'editCategory'])->name('admin.edit.category');
Route::post('update/category',[AdminController::class, 'updateCategory'])->name('admin.update.category');

Route::get('/subcategories',[AdminController::class, 'subcategories'])->name('admin.subcategories');
Route::get('/subcategories/{category}',[AdminController::class, 'getSubcategories'])->name('admin.getSubcategories');

Route::get('subcategory',[AdminController::class, 'createSubcategory'])->name('admin.create.subcategory');
Route::post('subcategory',[AdminController::class, 'storeSubcategory'])->name('admin.store.subcategory');
Route::get('edit/subcategory',[AdminController::class, 'editSubcategory'])->name('admin.edit.subcategory');
Route::post('update/subcategory',[AdminController::class, 'updateSubcategory'])->name('admin.update.subcategory');

Route::get('/topics/{subcategory}',[TopicController::class, 'getSubcategoryTopics'])->name('admin.getSubcategory.topics');

//topics
Route::get('/create/topic/{subcategory?}',[TopicController::class, 'createTopic'])->name('admin.create.topic');
Route::post('/store/topic',[TopicController::class, 'storeTopic'])->name('admin.store.topic');
Route::get('/edit/topic/{topic?}',[TopicController::class, 'editTopic'])->name('admin.edit.topic');
Route::post('/update/topic/',[TopicController::class, 'updateTopic'])->name('admin.update.topic');
Route::post('/topics/ajax',[TopicController::class, 'getSubcategoryTopicsAjax'])->name('admin.getSubcategory.topics.ajax');
Route::get('/view/topic/{topic?}',[TopicController::class, 'viewTopic'])->name('admin.view.topic');

//subtopics
Route::post('/subtopic',[TopicController::class, 'viewSubtopic'])->name('view.subtopic');
Route::get('/edit/subtopic/{id?}',[TopicController::class, 'editSubtopic'])->name('edit.subtopic');
Route::post('/update/subtopic/',[TopicController::class, 'updateSubtopic'])->name('update.subtopic');
