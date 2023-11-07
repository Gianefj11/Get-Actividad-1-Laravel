<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoCollection;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        //return new ProductoCollection(Producto::all());
       //return new ProductoCollection(Producto::orderBy('id','DESC')->paginate(3));
       //return new ProductoCollection(Producto::where('status',1)->orderBy('id','DESC')->paginate(3));
    
        if ($request->has('categoria')) {
            $category = $request->input('categoria');
            return new ProductoCollection(Producto::where("categoria_id", $category)->get());
        } 
        return new ProductoCollection(Producto::all());
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
        return $producto;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
