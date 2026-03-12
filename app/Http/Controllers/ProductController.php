<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required|string|max:255|min:3',
            'proveedor' => 'required|string|max:255|min:3',
            'galeria' => 'required|string|max:255|min:3',
            'desperdicio' => 'required|numeric|min:0.1',
            'costo' => 'required|numeric|min:0.1',
        ]);

        product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}