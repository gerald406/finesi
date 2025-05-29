<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        return view('posts.index');
    }

    function create(){
        return view('posts.create');
    }

    function store(){
        return "Aquí se procesaro la informacion para guardará un nuevo post";
    }

    function show($id){
        return view('posts.show', compact('id'));
    }

    function edit($id){
        return view('posts.edit', compact('id'));
    }

    function update($id){
        return "Aquí se procesaro la informacion para actualizar el post con ID: $id";
    }

    function destroy($id){
        return "Aquí se procesaro la informacion para eliminar el post con ID: $id";
    }
}
