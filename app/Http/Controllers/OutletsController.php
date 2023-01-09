<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\User;
use App\Http\Requests\OutletStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OutletsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->wantsJson()) {
            return response(
                Outlet::all()
            );
        }
        $outlets = Outlet::latest()->paginate(10);
        return view('outlets.index')->with('outlets', $outlets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outlets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OutletStoreRequest $request)
    {
        $outlet = Outlet::create([
            'outlet_name' => $request->outlet_name,
            'hotline' => $request->hotline,
            'email' => $request->email,
            'address' => $request->address,
            'user_id' => $request->user()->id,
        ]);

        if (!$outlet) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while creating outlet.');
        }
        return redirect()->route('outlets.index')->with('success', 'Success, outlet has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        $user = User::find($outlet->user_id);
        return view('outlets.show', compact('outlet', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Outlet $outlet)
    {
        return view('outlets.edit', compact('outlet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet)
    {
        $outlet->outlet_name = $request->outlet_name;
        $outlet->hotline = $request->hotline;
        $outlet->email = $request->email;
        $outlet->address = $request->address;

        if (!$outlet->save()) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while updating outlet.');
        }
        return redirect()->route('outlets.index')->with('success', 'Success, your outlet have been updated.');
    }

    public function destroy(Outlet $outlet)
    {
        $outlet->delete();

       return response()->json([
           'success' => true
       ]);
    }
}
