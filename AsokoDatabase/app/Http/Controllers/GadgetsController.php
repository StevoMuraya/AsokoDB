<?php

namespace App\Http\Controllers;

use App\Models\Gadgets;
use Illuminate\Http\Request;

class GadgetsController extends Controller
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
        $gadgets = Gadgets::where('deleted', '=', '0')->get();
        return view('gadgets.index', [
            'active' => ' gadgets',
            'gadgets' => $gadgets,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gadgets.new-gadget', [
            'active' => ' gadgets'
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
            'account' => 'required|max:255|unique:gadgets,Account,except,ID',
            'phone' => 'required|max:10|regex:/(07)[0-9]{8}/',
            'command1' => 'required|max:255',
            'command2' => 'required|max:255',
            'narration' => 'required|max:255',
            'count' => 'required|numeric|min:0|not_in:0',
            'offerCmd' => 'required|max:255',
            'AccAmount' => 'required|numeric',
            'manager' => 'required|numeric|min:0|not_in:0',
            'password' => 'required',
        ]);
        Gadgets::create([
            'Account' => $request->account,
            'gPhone' => $request->phone,
            'Command1' => $request->command1,
            'Command2' => $request->command2,
            'Password' => $request->password,
            'Narration' => $request->narration,
            'Count' => $request->count,
            'OfferCmd' => $request->offerCmd,
            'AccAmount' => $request->AccAmount,
            'Manager' => $request->manager,
        ]);
        return redirect()->route('gadgets.index');
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
        $gadget = Gadgets::find($id);
        return view('gadgets.edit-gadget', [
            'active' => ' gadgets',
            'gadget' => $gadget,
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
        Gadgets::find($id)->update([
            'Account' => $request->account,
            'gPhone' => $request->phone,
            'Command1' => $request->command1,
            'Command2' => $request->command2,
            'Password' => $request->password,
            'Narration' => $request->narration,
            'Count' => $request->count,
            'OfferCmd' => $request->offerCmd,
            'AccAmount' => $request->AccAmount,
            'Manager' => $request->manager,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $gadgets = Gadgets::find($id);
        if ($request->delete_task == "delete") {
            $gadgets->deleted = 1;
            $gadgets->timestamps = false;
            $gadgets->save();
            return back();
        } else {
            $gadgets->deleted = 0;
            $gadgets->timestamps = false;
            $gadgets->save();
            return redirect()->route('gadgets.index');
        }
    }

    public function deletedGadgets()
    {
        $gadgets = Gadgets::where('deleted', '=', '1')->get();
        return view('gadgets.deleted-gadgets', [
            'active' => ' gadgets',
            'gadgets' => $gadgets,
        ]);
    }
}
