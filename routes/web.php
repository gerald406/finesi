<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/prueba', function () {
    $users = DB::table('users')
            ->select('id', 'name', 'email')
            //->where('id', '>', 95)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->offset(10)
            ->get();
    return $users;
});