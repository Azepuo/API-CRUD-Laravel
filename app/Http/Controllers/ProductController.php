<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Liste
    public function index()
    {
        return Product::all();
    }

    // Ajouter
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    // Détails
    public function show(Product $product)
    {
        return $product;
    }

    // Modifier
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json($product, 200);
    }

    // Supprimer
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}
