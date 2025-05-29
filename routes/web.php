<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/prueba', function () {
    //obtine todo los rgistros de la tabla users
    /* $users = User::get();
    return $users; */

    //obtine solo campos determinados de la tabla users
   /*  $users = User::select('id', 'name', 'email')->get();
    return $users; */
    /* $users = User::pluck('name');
    return $users; */

    //obtine el primer registro de la tabla users
    /* $users = User::first();
    return $users; */

    //obtine los registros de un usuario especifico
    /* $users = User::find(50);
    return $users; */

    //obtener los registros ordenados por un campo especifico
    /* $users = User::orderBy('id', 'asc')
            ->paginate(10);
    return $users; */

    //obtener el numero de registros
    /* $users = User::count();
    return $users; */

    //Obtine los usuarios cuyo ID sea mayor a 50
    /* $users = User::where('id', '>', 50)
            ->orderBy('id', 'asc')
            ->paginate(5);
    return $users; */


    ///**********Insertar registros */
    //Insertar un nuevo registro
    /* $user = new User();
    $user->name = "Pepito el trillo";
    $user->email = "pepito@admin.com";
    $user->password = bcrypt('12345678');
    $user->save();
    return $user; */

    //asignacion masiva  para la tabla category
        $data = [
            'name' => 'Categoria 1',
            'test' => 'Test de categoria 1',
        ];
        $category = Category::create($data);
        return $category;

});