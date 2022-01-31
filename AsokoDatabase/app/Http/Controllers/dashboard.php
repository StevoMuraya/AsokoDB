<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Models\Gadgets;
use App\Models\MpesaTransc;
use Illuminate\Http\Request;
use App\Models\AstrackClients;
use Illuminate\Support\Facades\DB;
use App\Models\AstrackTransactions;

class dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->Middleware('auth');
    }

    public function index()
    {

        $astrack_clients = AstrackClients::where('deleted', '=', '0')->get();
        $agents = Agents::where('deleted', '=', '0')->get();
        $astrack_transactions2 = AstrackTransactions::where('deleted', '=', '0')->get();
        $astrack_transactions =
            AstrackTransactions::where('deleted', '=', '0')->select("firstname", DB::raw("SUM(amount) as total"))
            ->groupBy("firstname")
            ->offset(1)
            ->orderByRaw('SUM(amount) DESC')
            ->limit(5)
            ->get();
        $gadgets = Gadgets::get();
        $mpesatransc = MpesaTransc::get();

        // dd($astrack_transactions);

        return view('dashboard.index', [
            'active' => ' dashboard',
            'astrack_clients' => $astrack_clients,
            'agents' => $agents,
            'astrack_transactions' => $astrack_transactions,
            'astrack_transactions2' => $astrack_transactions2,
            'gadgets' => $gadgets,
            'mpesatransc' => $mpesatransc,
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
    public function destroy($id)
    {
        //
    }
}
