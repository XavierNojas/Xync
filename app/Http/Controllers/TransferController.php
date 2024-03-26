<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transfer;

class TransferController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transfer = Transfer::all();
        return view('transfer.index',compact('transfer'));
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
        
        $transfer = new Transfer;
        $transfer->reference_number = $request->reference_number;
        $transfer->sender_name = $request->sender_name;
        $transfer->sender_contact = $request->sender_contact;
        $transfer->recipient_name = $request->recipient_name;
        $transfer->recipient_contact = $request->recipient_contact;
        $transfer->transaction_type = $request->transaction_type;
        $transfer->amount_local_currency = $request->amount_local_currency;
        $transfer->currency_conversion_code = $request->currency_conversion_code;
        $transfer->amount_converted = $request->amount_converted;
        $transfer->transaction_status = $request->transaction_status;
        $transfer->branch_sent = $request->branch_sent;
        $transfer->branch_recieved = $request->branch_recieved;


        $transfer->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(transfer $transfer)
    {
        //
        return view('transfer.show', compact('transfer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $transfer = Transfer::find($request->id);
        return view('transfer.edit', compact('transfer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transfer $transfer)
    {
        $transfer = Transfer::find($request->id);

        $transfer->update([
            'reference_number' => $request->reference_number,
            'sender_name' => $request->sender_name,
            'sender_contact' => $request->sender_contact,
            'recipient_name' => $request->recipient_name,
            'recipient_contact' => $request->recipient_contact,
            'transaction_type' => $request->transaction_type,
            'amount_local_currency' => $request->amount_local_currency,
            'currency_conversion_code' => $request->currency_conversion_code,
            'amount_converted' => $request->amount_converted,
            'transaction_status' => $request->transaction_status,
            'branch_sent' => $request->branch_sent,
            'branch_recieved' => $request->branch_recieved,
    
        ]);
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $transfer = Transfer::find($request->id);
        $transfer->delete();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transfer $transfer)
    {
        //
    }

}
