<?php

namespace App\Http\Controllers;

use App\Models\Tab;
use App\Http\Requests\StoreTabRequest;
use App\Http\Requests\UpdateTabRequest;

class TabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tab::all();
        return view('tab.index', compact('data'));
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
    public function store(StoreTabRequest $request)
    {
        $tabs = new Tab();

        $tabs->title = $request->input('title');
        $tabs->desc = $request->input('desc');
        $tabs->save();
        return back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tab $tab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tab $tab)
    {
        return view('tab.edit', compact('tab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTabRequest $request, Tab $tab)
    {
        $tab->title = $request->input('title');
        $tab->desc = $request->input('desc');
        $tab->save();
        return redirect()->route('tab.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tab $tab)
    {
        $tab->delete();
        return back()->with('success', 'Data Deleted Successfully');
    }
}
