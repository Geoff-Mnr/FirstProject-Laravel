<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        $title = 'Liste des clients';
        return view ('customers.index', compact('title','customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Créer un client';
        return view ('customers.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:255',
            'firstname' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'adress'=> 'required|min:3|max:255',
            'phonenumber'=> 'required|min:3|max:255',
            
        ]);

        $input = $request->all();
        $input['is_active'] = true;
        
        
        $customer = Customer::create($input);
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $title='Détails du client';
        return view('customers.show', compact('title','customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $title='Editez le client';
        return view('customers.edit', compact('title','customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'firstname' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'adress'=> 'required|min:3|max:255',
            'phonenumber'=> 'required|min:3|max:255',
            
        ]);

        $customer->update($request->all());

        if($customer->wasChanged()){
            return redirect()->route('customers.show', $customer)->with('success', 'Le produit a été modifié');
        }else{
            return redirect()->route('customers.show', $customer)->with('Attention', 'Aucune modification a été faite');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer ->delete();
        return redirect()->route('customers.index')->with('success', 'le produit a bien été supprimé');
        
    }
}
