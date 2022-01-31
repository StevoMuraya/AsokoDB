<?php

namespace App\Http\Controllers;

use App\Models\AstrackTransactions;
use Illuminate\Http\Request;

class TransactionssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = AstrackTransactions::where('deleted', '=', '0')->get();

        return view('transactions.index', [
            'active' => ' transactions',
            'transactions' => $transactions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaction = AstrackTransactions::find($id);

        return view('transactions.edit-transactions', [
            'active' => ' transactions',
            'transaction' => $transaction,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        AstrackTransactions::find($id)->update([
            'accnumber' => $request->accnumber,
            'amount' => $request->amount,
        ]);

        return redirect()->route('transactions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $transactions = AstrackTransactions::find($id);
        if ($request->delete_task == "delete") {
            $transactions->deleted = 1;
            $transactions->save();
            return back();
        } else {
            $transactions->deleted = 0;
            $transactions->save();
            return redirect()->route('transactions.index');
        }
    }

    public function deletedTransactions()
    {
        $transactions = AstrackTransactions::where('deleted', '=', '1')->get();
        return view('transactions.delete-transactions', [
            'active' => ' transactions',
            'transactions' => $transactions,
        ]);
    }
}
