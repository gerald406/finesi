<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $posts = [
            ['id' => 1, 'nombre' => 'Producto 1', 'precio' => 100],
            ['id' => 2, 'nombre' => 'Producto 2', 'precio' => 200],
            ['id' => 3, 'nombre' => 'Producto 3', 'precio' => 300],
            ['id' => 4, 'nombre' => 'Producto 4', 'precio' => 400],
        ]; 
        $count = 10;
        return view('productos.index',compact('posts','count'));
    }

    public function create(){
        return view('productos.create');   
    }

    public function store(){
        return "Guarda el nuevo producto en la base de datos";
    }

    public function show($producto){
        /* return view('productos.show',[
            'producto' => $producto
        ]); */
        return view('productos.show',compact('producto'));
    }

    public function edit($producto){
        return view('productos.edit',[
            'producto' => $producto
        ]);
    }

    public function update($producto){
        return "Actualiza el producto con id: $producto en la base de datos";
    }

    public function destroy($producto){
        return "Elimina el producto con id: $producto de la base de datos";
    }


}
