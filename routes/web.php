<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin-account.login');
})->name('admin.login');


Route::get('/admin-page', function () {
    return view('admin-account.admin-page');
})->name('admin-page');



Route::get('/admin/incident_report', function () {
    return view('admin-account.incident_report');
})->name('admin.incident_report');

Route::get('/admin/ir_two', function () {
    return view('admin-account.ir_two');
})->name('admin.ir_two');

Route::get('/admin/rating_and_feedback', function () {
    return view('admin-account.rating_and_feedback');
})->name('admin.rating_and_feedback');

Route::get('/admin/bus-arrival', function () {
    return view('admin-account.bus-arrival');
})->name('admin.bus-arrival');

Route::get('/admin/ba_two', function () {
    return view('admin-account.ba_two');
})->name('admin.ba_two');

Route::get('/admin/dashcam', function () {
    return view('admin-account.dashcam');
})->name('admin.dashcam');

Route::get('/admin/sales-report', function () {
    return view('admin-account.sales_report');
})->name('admin.sales-report');









