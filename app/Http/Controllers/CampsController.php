<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CampsController extends Controller
{
  public function index()
  {
    return view('camps.create-account');
  }

  public function postCampDetails(Request $request, $id)
  {
    $camp = DB::table('workshops')
                  ->join('venues', 'venues.id', '=', 'workshops.venueId')
                  ->join('topics', 'topics.topicId', '=', 'workshops.topicId')
                  ->where('workshops.id', $id)
                  ->select('venues.name',
                            'workshops.*',
                            DB::raw('DATEDIFF(workshops.startDate, workshops.endDate) as days'),
                            DB::raw('TIME_FORMAT(workshops.startTime, "%h:%i%p") as startTime'),
                            DB::raw('TIME_FORMAT(workshops.endTime, "%h:%i%p") as endTime'),
                            DB::raw('TIME_FORMAT(workshops.kidsArrive, "%h:%i%p") as arriveTime'),
                            DB::raw('TIME_FORMAT(workshops.kidsDepart, "%h:%i%p") as departTime'),
                            'topics.*')
                  ->get();
    return view('camps.campdetails')->with('camp', $camp[0]);
  }
/*
  public function show(Request $request, $view)
	{
    switch ($view) {
      case 'login':
        return view('auth.login');
        break;
      case 'register':
        return view('camps.parentdetails1');
        break;
      case 'details':
        return view('camps.campdetails');
        break;
    }
    return view('errors.404');
  }
*/
  public function postRegister2(Request $request)
  {
    return view('camps.parentdetails2');
  }

  public function postRegister(Request $request)
  {
    return view('camps.parentdetails1');
  }

  public function postSearch(Request $request)
  {
    /*
    $venues = DB::table('venues')->get();
    $postcode1 = '2126';
    foreach($venues as $venue) {
      $source = $this->getPostcodeLongitudeLatitude($postcode1);
      $dest = $this->getPostcodeLongitudeLatitude($venue->postcode);
      $distance = $this->vincentyDistance($source->lat, $source->lng, $dest->lat, $dest->lng);
      print($postcode1." - ".$venue->postcode);
      print('<br>');
      print($distance);
      print('<br>');
    }*/
    /*$url = 'https://maps.googleapis.com/maps/api/geocode/json?address=2111,AU';
    $result = @file_get_contents($url);
    print($result);
    $object = json_decode($result);
    print($object->status);*/
    $post_code = $request->post_code;
    $camps = DB::table('venues')
                  ->join('workshops', 'venues.id', '=', 'workshops.venueId')
                  ->join('topics', 'topics.topicId', '=', 'workshops.topicId')
                  ->where('venues.postcode', $post_code)
                  ->orWhere('venues.suburb', $post_code)
                  ->select('venues.name',
                            'workshops.*',
                            DB::raw('DATEDIFF(workshops.startDate, workshops.endDate) as days'),
                            DB::raw('TIME_FORMAT(workshops.startTime, "%h:%i%p") as startTime'),
                            DB::raw('TIME_FORMAT(workshops.endTime, "%h:%i%p") as endTime'),
                            DB::raw('TIME_FORMAT(workshops.kidsArrive, "%h:%i%p") as arriveTime'),
                            DB::raw('TIME_FORMAT(workshops.kidsDepart, "%h:%i%p") as departTime'),
                            'topics.topicname as topic',
                            'topics.shortDesc as topicDesc',
                            'topics.age_groups as ages',
                            'imageUrl as topicImage')
                  ->limit(5)
                  ->get();

    return view('camps.results', compact('camps'));
	}
}
