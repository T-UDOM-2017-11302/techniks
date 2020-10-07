<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Service;
use App\Partner;
use App\Home;
use App\Work_operation;
use App\Faq;
use App\Performer;
use App\partner_page;
use App\Event;
use App\Quality;
use App\QualityList;
use App\CareerPage;
use App\Career;
use App\Testimonials;

class StaticController extends BaseController{

    function index() {
    	$home = Home::first();
    	$partner = Partner::all();
    	$performer = Performer::all();
    	$testimonials = Testimonials::all();
        $event = Event:: where('id', 1)->first();
        $services = Service::all('service_header');
        $totalpartner = Partner::all('partner_name')->count();
        $totalevents = Event::all('event_name')->count();
       
    	return view('index', ['home'=>$home, 'partner'=>$partner, 'testimonials'=>$testimonials, 'performer'=>$performer, 'event'=>$event, 'services'=>$services, 'totalpartner'=>$totalpartner, 'totalevents'=>$totalevents]);
    }


 function business() {

   $services = Service::all();

 	return view('business', ['services'=>$services]);
    }


 function consultancy() {

   $services = Service::all();

 	return view('consultancy', ['services'=>$services]);
    }




}


?>