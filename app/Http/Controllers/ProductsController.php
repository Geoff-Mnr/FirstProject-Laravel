<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        
        $title = 'List of products';
        
        return view ('products.index', compact('title','products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Créer un produit';
        return view ('products.create', compact('title'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255|unique:products,name',
            'description' => 'required|min:3|max:255',
            'price' => 'required|numeric|between:100,400',
            /*'stock' => 'required|numeric',
            'is_active' => 'required|boolean',*/
        ]);


        $input = $request->all();
        $input['is_active'] = true;
        $input['stock'] = 0;

        $product = Product::create($input);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $title='Détails du produit';
        return view('products.show', compact('title','product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $title='Editez le produit';
        return view('products.edit', compact('title','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'price' => 'required|numeric|between:0,2500',
            
        ]);
        /*dd($request->all());*/
        $product->update($request->all());

        if($product->wasChanged()){
            return redirect()->route('products.show', $product)->with('success', 'Le produit a été modifié');
        }else{
            return redirect()->route('products.show', $product)->with('Attention', 'Aucune modification a été faite');
        }

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product ->delete();
        return $product;
    }
}
