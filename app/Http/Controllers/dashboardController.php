<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Http\Requests\StoreDashboardRequest;
use App\Http\Requests\UpdateDashboardRequest;
use PHPUnit\TextUI\Configuration\Php;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Dashboard::latest()->first();
        return view('website.index', compact('setting'));
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
    public function store(StoreDashboardRequest $request)
    {
        $name = time() . rand() . '.' . $request->image1->extension();
        $request->image1->move(public_path('uploads'), $name);

        $name2 = time() . rand() . '.' . $request->image2->extension();
        $request->image2->move(public_path('uploads'), $name2);

        $name3 = time() . rand() . '.' . $request->image3->extension();
        $request->image3->move(public_path('uploads'), $name3);

        $name4 = time() . rand() . '.' . $request->image4->extension();
        $request->image4->move(public_path('uploads'), $name4);

        $name5 = time() . rand() . '.' . $request->image5->extension();
        $request->image5->move(public_path('uploads'), $name5);

        $name6 = time() . rand() . '.' . $request->image6->extension();
        $request->image6->move(public_path('uploads'), $name6);

        $name7 = time() . rand() . '.' . $request->image7->extension();
        $request->image7->move(public_path('uploads'), $name7);

        $media = new Dashboard();

        $media->email = $request->input('email');
        $media->phone = $request->input('phone');
        $media->facebook = $request->input('facebook');
        $media->instagram = $request->input('instagram');
        $media->twitter = $request->input('twitter');
        $media->linkedin = $request->input('linkedin');
        $media->title = $request->input('title');
        $media->detail = $request->input('detail');
        $media->info = $request->input('info');
        $media->description = $request->input('description');
        $media->infoa = $request->input('infoa');
        $media->descriptiona = $request->input('descriptiona');
        $media->infob = $request->input('infob');
        $media->descriptionb = $request->input('descriptionb');
        $media->infoc = $request->input('infoc');
        $media->descriptionc = $request->input('descriptionc');
        $media->head = $request->input('head');
        $media->heading = $request->input('heading');
        $media->detaill = $request->input('detaill');
        $media->bar1 = $request->input('bar1');
        $media->bar2 = $request->input('bar2');
        $media->bar3 = $request->input('bar3');
        $media->bar4 = $request->input('bar4');
        $media->bar5 = $request->input('bar5');
        $media->bar6 = $request->input('bar6');
        $media->icon1 = $request->input('icon1');
        $media->icon2 = $request->input('icon2');
        $media->icon3 = $request->input('icon3');
        $media->icon4 = $request->input('icon4');
        $media->headd = $request->input('headd');
        $media->atitle = $request->input('atitle');
        $media->adetail = $request->input('adetail');
        $media->btitle = $request->input('btitle');
        $media->bdetail = $request->input('bdetail');
        $media->ctitle = $request->input('ctitle');
        $media->cdetail = $request->input('cdetail');
        $media->dtitle = $request->input('dtitle');
        $media->ddetail = $request->input('ddetail');
        $media->etitle = $request->input('etitle');
        $media->edetail = $request->input('edetail');
        $media->ftitle = $request->input('ftitle');
        $media->fdetail = $request->input('fdetail');
        $media->name = $request->input('name');
        $media->designation = $request->input('designation');
        $media->company = $request->input('company');
        $media->hard = $request->input('hard');
        $media->namea = $request->input('namea');
        $media->designationa = $request->input('designationa');
        $media->nameb = $request->input('nameb');
        $media->designationb = $request->input('designationb');
        $media->namec = $request->input('namec');
        $media->designationc = $request->input('designationc');
        $media->named = $request->input('named');
        $media->designationd = $request->input('designationd');
        $media->price = $request->input('price');
        $media->dollar = $request->input('dollar');
        $media->dollara = $request->input('dollara');
        $media->dollarb = $request->input('dollarb');
        $media->dollarc = $request->input('dollarc');
        $media->address = $request->input('address');
        $media->image1 = $name;
        $media->image2 = $name2;
        $media->image3 = $name3;
        $media->image4 = $name4;
        $media->image5 = $name5;
        $media->image6 = $name6;
        $media->image7 = $name7;

        $media->save();

        return back()->with('success', 'Data added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDashboardRequest $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
