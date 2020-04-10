<?php

namespace App\Http\Controllers;

use App\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.service');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $services = new services();
        $services -> titre = request('titre');
        $services -> description = request('description');
        $services -> logo = request('logo');
        $services -> save();
        return redirect()->route('service');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(services $services)
    {
        $services = services::all();
        return view('backOffice.servicedit', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(services $services)
    {
        $services = services::find($id);
        return view('edit.services', compact('services'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $services = services::find($id);
        $services -> titre=request('titre');
        $services -> description = request('description');
        $services -> logo =request('logo');
        $services ->save();
        return redirect()->route('service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        services::find($id)->delete();
        return redirect()->back();
    }
}
