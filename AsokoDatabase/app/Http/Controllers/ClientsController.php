<?php

namespace App\Http\Controllers;

use App\Models\AstrackClients;
use Illuminate\Http\Request;

class ClientsController extends Controller
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
        $astrackClients = AstrackClients::where('deleted', '=', '0')->get();
        return view('clients.index', [
            'active' => ' clients',
            'astrackClients' => $astrackClients,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.new-client', [
            'active' => ' clients',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:10|regex:/(07)[0-9]{8}/',
            'account_number' => 'required|max:255',
            'referrername' => 'required',
            'referrerphone' => 'required',
            'datestarted' => 'required',
            'assetdescr' => 'required',
        ]);


        AstrackClients::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'accnumber' => $request->account_number,
            'referrername' => $request->referrername,
            'referrerphone' => $request->referrerphone,
            'assetdescr' => $request->assetdescr,
            'accbal' => 0,
            'category' => '0',
            'cumulativeamt' => 0,
            'fullamount' => 0,
            'baseamount' => 0,
            'baseamount' => 0,
            'datestarted' => $request->datestarted,
            'trackerIMEI' => '0',
            'trackerphone' => '0',
        ]);

        return redirect()->route('clients.index');
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
        $client = AstrackClients::find($id);

        // dd($client->phone);
        return view('clients.edit-client', [
            'active' => ' clients',
            'client' => $client,
        ]);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:10|regex:/(07)[0-9]{8}/',
            'referrername' => 'required|max:255',
            'referrerphone' => 'required',
            'account_number' => 'required|max:255',
            'category' => 'required|max:255',
            'cumulativeamt' => 'required|max:255',
            'fullamount' => 'required|max:255',
            'baseamount' => 'required|max:255',
            'datestarted' => 'required|max:255',
            'trackerIMEI' => 'required|max:255',
            'trackerphone' => 'required|max:255',
            'assetdesc' => 'required'
        ]);



        $clients = AstrackClients::find($id);
        $clients->firstname = $request->firstname;
        $clients->lastname = $request->lastname;
        $clients->email = $request->email;
        $clients->phone = $request->phone;
        $clients->accnumber = $request->account_number;
        $clients->referrername = $request->referrername;
        $clients->referrerphone = $request->referrerphone;
        $clients->category = $request->category;
        $clients->cumulativeamt = $request->cumulativeamt;
        $clients->fullamount = $request->fullamount;
        $clients->baseamount = $request->baseamount;
        $clients->datestarted = $request->datestarted;
        $clients->trackerIMEI = $request->trackerIMEI;
        $clients->trackerphone = $request->trackerphone;
        $clients->assetdescr = $request->assetdesc;
        $clients->timestamps = false;
        $clients->save();


        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $clients = AstrackClients::find($id);
        if ($request->delete_task == "delete") {
            $clients->deleted = 1;
            $clients->timestamps = false;
            $clients->save();
        } else {
            $clients->deleted = 0;
            $clients->timestamps = false;
            $clients->save();
        }
        return back();
    }

    public function deletedClients()
    {
        $astrackClients = AstrackClients::where('deleted', '=', '1')->get();
        return view('clients.deleted-clients', [
            'active' => ' clients',
            'astrackClients' => $astrackClients,
        ]);
    }
}
