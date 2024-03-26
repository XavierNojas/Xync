<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('user.index',compact('user'));
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
        
        $user = new User;
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->birthdate = $request->birthdate;
        $user->full_address = $request->full_address;
        $user->user_type_id = $request->user_type_id;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->branch_assigned = $request->branch_assigned;

        $user->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $user = User::find($request->id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user = User::find($request->id);

        $user->update([
        $user->first_name = $request->first_name,
        $user->middle_name = $request->middle_name,
        $user->last_name = $request->last_name,
        $user->birthdate = $request->birthdate,
        $user->full_address = $request->full_address,
        $user->user_type_id = $request->user_type_id,
        $user->email = $request->email,
        $user->password = $request->password,
        $user->branch_assigned = $request->branch_assigned,
    
        ]);
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }

}
