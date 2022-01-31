<?php

namespace App\Http\Controllers;

use App\Models\MpesaTransc;
use Illuminate\Http\Request;

class MpesaTransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = MpesaTransc::where('deleted', '=', '0')->where('phone', '!=', '')->get();
        return view('mpesa-transactions.index', [
            'active' => ' mpesa-transaction',
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $transactions = MpesaTransc::find($id);

        if ($request->delete_task == "delete") {
            $transactions->deleted = 1;
            $transactions->timestamps = false;
            $transactions->save();
            return back();
        } else {
            $transactions->deleted = 0;
            $transactions->timestamps = false;
            $transactions->save();
            return redirect()->route('mpesa-transactions.index');
        }
    }

    public function deletedMpesaTransactions()
    {
        $transactions = MpesaTransc::where('deleted', '=', '1')->get();
        return view('mpesa-transactions.deleted-mpesa', [
            'active' => ' mpesa-transaction',
            'transactions' => $transactions,
        ]);
    }
}
