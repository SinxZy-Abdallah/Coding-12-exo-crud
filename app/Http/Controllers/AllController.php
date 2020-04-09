<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use App\contact;
use App\footer;
use App\hero;
use App\portofolio;
use App\services;
use App\subscribe;
use App\team;
use App\testimonial;
use App\Titre;


class AllController extends Controller
{
    public function show(){
        $abouts = about::all();
        $contacts = contact::all();
        $footers = footer::all();
        $heros = hero::all();
        $portofolios = portofolio::all();
        $servicess = services::all();
        $subscribes = subscribe::all();
        $teams = team::all();
        $testimonials = testimonial::all();
        $titres = Titre::all();


        return view('/index', compact('abouts', 'contacts', 'footers', 'heros', 'portofolios', 'servicess', 'subscribes', 'teams', 'testimonials', 'titres'));
      
    }
}
