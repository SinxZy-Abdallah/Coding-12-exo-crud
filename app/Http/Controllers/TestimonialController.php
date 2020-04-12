<?php

namespace App\Http\Controllers;

use App\testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
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
       return view ('create.testimonial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $testimonials = new testimonial();
       $testimonials -> img_profil = request ('img_profil');
       $testimonials -> commentaire = request ('commentaire');
       $testimonials -> name = request ('name');
       $testimonials -> description = request ('description');
       $testimonials -> save();
       return redirect()-> route('testimonial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(testimonial $testimonial)
    {
       $testimonials = testimonial::all();
       return view ('backOffice.testimonialedit', compact('testimonials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonials = testimonial::find($id);
        return view ('edit.testimonial', compact('testimonials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $testimonials = testimonial::find($id);
        $testimonials -> img_profil = request('img_profil');
        $testimonials -> commentaire = request('commentaire');
        $testimonials -> name = request('name');
        $testimonials -> description = request('description');
        $testimonials -> save();
        return redirect()->route('testimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        testimonial::find($id)->delete(); 
        return redirect()->back();   
    }
}
