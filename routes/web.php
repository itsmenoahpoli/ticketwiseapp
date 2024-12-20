<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public_view');
})->name('publicview');

// Routes for Login Roles
Route::get('/dashboard/user', function () {
    return view('user-account.user_logged_in');
})->name('user.dashboard');

Route::get('/dashboard/terminal-manager', function () {
    return view('admin-account.admin_page');
})->name('admin.dashboard');


Route::get('/dashboard/conductor', function () {
    return view('conductor-account.conductor_page');
})->name('conductor.dashboard');

// End ///


// Routes for Register
Route::get('/create-account', function () {
    return view('admin-account.create_acc');
})->name('create_acc');

Route::get('/dashboard/register-conductor', function () {
    return view('conductor-account.register_conductor');
})->name('conductor.reg');

// End


Route::get('/howtobook', function () {
    return view('howtobook');
})->name('howtobook');

Route::get('/aboutus', function () {
    return view('about_us');
})->name('aboutus');

Route::get('/conductor-page', function () {
    return view('conductor-account.conductor_page');
})->name('conductor_page');

Route::get('/check-food', function () {
    return view('conductor-account.check_food');
})->name('check_food');

Route::get('/check-food-two', function () {
    return view('conductor-account.check_food_two');
})->name('check_food_two');

Route::get('/report-incident', function () {
    return view('conductor-account.report_incident');
})->name('report_incident');

Route::get('/manual-override', function () {
    return view('conductor-account.manual_override');
})->name('manual_override');

Route::get('/confirm-bus-arrival', function () {
    return view('conductor-account.confirm_ba');
})->name('confirm_ba');





Route::get('/dltb_bus', function () {
    return view('dltb_bus');
})->name('dltb_bus');

Route::get('/jam_bus', function () {
    return view('jam_bus');
})->name('jam_bus');

Route::get('/victory_bus', function () {
    return view('victory_bus');
})->name('victory_bus');

Route::get('/admin-page', function () {
    return view('admin-account.admin_page');
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

Route::get('/admin/approve-conductor', function () {
    return view('admin-account.approve_conductor');
})->name('admin.approve-conductor');

Route::get('/user/logged-in', function () {
    return view('user-account.user_logged_in');
})->name('user.logged_in');

Route::get('/user/booking-page', function () {
    return view('user-account.booking_page');
})->name('user.booking-page');

Route::get('/user/logged-in-bp', function () {
    return view('user-account.logged_in_bp');
})->name('user.logged-in-bp');

Route::get('/user/refund-page', function () {
    return view('user-account.refund_page');
})->name('user.refund-page');

Route::get('/user/bp-two', function () {
    return view('user-account.logged_in_bp_two');
})->name('user.bp-two');

Route::get('/user/bp-three', function () {
    return view('user-account.logged_in_bp_three');
})->name('user.bp-three');

Route::get('/user/bp-four', function () {
    return view('user-account.logged_in_bp_four');
})->name('user.bp-four');

Route::get('/user/bp-five', function () {
    return view('user-account.logged_in_bp_five');
})->name('user.bp-five');

Route::get('/user/notif-two', function () {
    return view('user-account.notif_two');
})->name('user.notif-two');

Route::get('/user/orderfood-hamburger-jb', function () {
    return view('user-account.orderfood.order_hamburger_jb');
})->name('user.order_hamburger_jb');

Route::get('/user/orderfood-coffee-jb', function () {
    return view('user-account.orderfood.order_coffee_jb');
})->name('user.order_coffee_jb');

Route::get('/user/orderfood-dessert-jb', function () {
    return view('user-account.orderfood.order_dessert_jb');
})->name('user.order_dessert_jb');

Route::get('/user/orderfood-drinks-jb', function () {
    return view('user-account.orderfood.order_drinks_jb');
})->name('user.order_drinks_jb');

Route::get('/user/orderfood-meal-jb', function () {
    return view('user-account.orderfood.orderfood_meal_jb');
})->name('user.order_meal_jb');

Route::get('/user/orderfood/viewpage', function () {
    return view('user-account.orderfood.view_page');
})->name('user.viewpage');



Route::get('/user/payment-confirmed', function () {
    return view('user-account.payment_confirmed');
})->name('user.payment-confirmed');



Route::get('/login', function () {
    return view('admin-account.login');
})->name('login');






