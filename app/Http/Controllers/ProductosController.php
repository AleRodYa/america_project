<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{
    public function productos()
    {
        $productos = Productos::all();
        return view('productos', compact('productos'));
    }
    public function detail($id)
    {
        $producto = Productos::find($id);
        return view('detail')->with ('producto', $producto);
    }

    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $producto = Productos::find($id);
        $cart = session()->get('cart');

        
        if(!$cart){

            $cart = [
                $id => [
                    "nombre" => $producto->nombre,
                    "cantidad" => 1,
                    "precio" => $producto->precio,
                    "foto" => $producto->foto
                ] 
             ];

            session()->put('cart', $cart);
            return redirect()->back()->with('success', "Agregado a Carrito!" );
        }
        if(isset($cart[$id])){
                 $cart[$id]['cantidad']++;
                 session()->put('cart', $cart);
                 return redirect()->back()->with('success', "Agregado a Carrito!");
        }
        $cart = [
            $id => [
                "nombre" => $producto->nombre,
                "cantidad" => 1,
                "precio" => $producto->precio,
                "foto" => $producto->foto
            ] 
         ];

        session()->put('cart', $cart);
        return redirect()->back()->with('success', "Agregado a Carrito!" );
        
        
    }
}
