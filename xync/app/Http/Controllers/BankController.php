<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;

class BankController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Bank::all();
        return view('bank.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $bank = new Bank;
        $bank->first_name = $request->first_name;
        $bank->middle_name = $request->middle_name;
        $bank->last_name = $request->last_name;
        $bank->birthdate = $request->birthdate;
        $bank->full_address = $request->full_address;
        $bank->user_type_id = $request->user_type_id;
        $bank->email = $request->email;
        $bank->password = $request->password;
        $bank->branch_assigned = $request->branch_assigned;

        $bank->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(bank $bank)
    {
        //
        return view('phonebook.show', compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $bank = Bank::find($request->id);
        return view('bank.edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bank $bank)
    {
        $bank = Bank::find($request->id);

        $bank->update([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'birthdate' => $request->birthdate,
            'full_address' => $request->full_address,
            'user_type_id' => $request->user_type_id,
            'email' => $request->email,
            'password' => $request->password,
            'branch_assigned' => $request->branch_assigned,
    
        ]);
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $bank = Bank::find($request->id);
        $bank->delete();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bank $bank)
    {
        //
    }

}
