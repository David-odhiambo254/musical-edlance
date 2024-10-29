<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});


//freelancer routes

Route::get('/freelancelog', function () {
    return view('freetDash');
});

Route::get('/create-project', function () {
    return view('create-project');
});

Route::get('/my-orders', function () {
    return view('my-orders');
});

Route::get('/flproposal', function () {
    return view('freelance-proposal');
});

Route::get('/ticket-support', function () {
    return view('ticket-support');
});

Route::get('/wallet', function () {
    return view('freelancer-wallet');
});

Route::get('/chat', function () {
    return view('live-chat');
});

Route::get('/profile', function () {
    return view('freelancer-profile-setting');
});

Route::get('/freelance-setup', function () {
    return view('freelanc-account-setup');
});

Route::get('/profile-Details', function () {
    return view('profile-Details');
});

Route::get('/change-password', function () {
    return view('change-password');
});

Route::get('/account-delete', function () {
    return view('account-delete');
});


// Client Routes:

Route::get('/clientlog', function () {
    return view('clientDash');
});

Route::get('/create', function () {
    return view('create-job');
});

Route::get('/posted-jobs', function () {
    return view('posted-jobs');
});

Route::get('/posted-orders', function () {
    return view('client-orders');
});

Route::get('/user-wallet', function () {
    return view('freelancer-wallet');
});

Route::get('/user-ticket', function () {
    return view('user-ticket');
});

Route::get('/client-profile-set', function () {
    return view('client-profile-seting');
});
