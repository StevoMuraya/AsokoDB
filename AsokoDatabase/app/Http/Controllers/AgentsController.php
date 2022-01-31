<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use Illuminate\Http\Request;

class AgentsController extends Controller
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
        $agents = Agents::where('deleted', '=', '0')->get();
        return view('agents.index', [
            'active' => ' agents',
            'agents' => $agents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agents.new-agent', [
            'active' => ' agents'
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
            'agent_code' => 'required|max:255|unique:agents,A_Code,except,ID',
            'firstname' => 'required|max:255',
            'othernames' => 'required|max:255',
            'id_num' => 'required|max:255',
            'phone' => 'required|max:10|regex:/(07)[0-9]{8}/',
            'percent' => 'required|max:3',
            'balance' => 'required|numeric|min:0|not_in:0',
            'location' => 'required',
            'datestarted' => 'required',
            'password' => 'required',
        ]);


        Agents::create([
            'A_Code' => $request->agent_code,
            'A_FirstName' => $request->firstname,
            'A_OtherNames' => $request->othernames,
            'A_IDNumber' => $request->id_num,
            'A_PhoneNumber' => $request->phone,
            'A_Percentage' => $request->percent,
            'A_balance' => $request->balance,
            'A_Location' => $request->location,
            'DateStarted' => $request->datestarted,
            'Password' => $request->datestarted,
        ]);

        return redirect()->route('agents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = Agents::find($id);

        return view('agents.edit-agent', [
            'active' => ' agents',
            'agent' => $agent,
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
        $this->validate($request, [
            'agent_code' => 'required|max:255',
            'firstname' => 'required|max:255',
            'othernames' => 'required|max:255',
            'id_num' => 'required|max:255',
            'phone' => 'required|max:10|regex:/(07)[0-9]{8}/',
            'percent' => 'required|max:3',
            'balance' => 'required|numeric|min:0|not_in:0',
            'location' => 'required',
            'datestarted' => 'required',
        ]);

        $agents = Agents::find($id);
        $agents->A_Code = $request->agent_code;
        $agents->A_FirstName = $request->firstname;
        $agents->A_OtherNames = $request->othernames;
        $agents->A_IDNumber = $request->id_num;
        $agents->A_PhoneNumber = $request->phone;
        $agents->A_Percentage = $request->percent;
        $agents->A_balance = $request->balance;
        $agents->A_Location = $request->location;
        $agents->DateStarted = $request->datestarted;
        $agents->save();

        return redirect()->route('agents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $agents = Agents::find($id);
        if ($request->delete_task == "delete") {
            $agents->deleted = 1;
            $agents->save();
        } else {
            $agents->deleted = 0;
            $agents->save();
        }
        return back();
    }

    public function deletedAgents()
    {
        $agents = Agents::where('deleted', '=', '1')->get();
        return view('agents.deleted-agents', [
            'active' => ' agents',
            'agents' => $agents,
        ]);
    }
}
