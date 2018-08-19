<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CampsController extends Controller
{
  public function getPostcodeLongitudeLatitude($postcode, $country = 'AUS')
  {
    // Form the API url
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?address=' .
        intval($postcode) . '+' . $country . '&sensor=false';

    // Make the API call
    $result = @file_get_contents($url);
    $geoDetails = json_decode($result);

    // If a successful call, fetch the long/lat
    if ($geoDetails->status === 'OK' &&
        isset($geoDetails->results[0]->geometry->location))
    {
        return $geoDetails->results[0]->geometry->location;
    }
  }

  public function vincentyDistance($latFrom, $longForm, $latTo, $longTo, $earthRadius = 6371000)
  {
    // Convert the longitude and latitude from degrees to radians
    $latFrom = deg2rad($latFrom);
    $lonFrom = deg2rad($longForm);
    $latTo = deg2rad($latTo);
    $lonTo = deg2rad($longTo);

    // Mathematics calculations
    $lonDelta = $lonTo - $lonFrom;
    $angle = atan2(
      sqrt(pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2) + pow(cos($latTo) * sin($lonDelta), 2)),
      sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta)
    );

    return $angle * $earthRadius;
  }

  public function postSearch(Request $request) 
  {
    $post_code = $request->post_code;
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
    }
    $camps = DB::table('venues')
                  ->join('workshops', 'venues.id', '=', 'workshops.venueId')
                  ->join('topics', 'topics.topicId', '=', 'workshops.topicId')
                  ->where('venues.postcode', $post_code)
                  ->orWhere('venues.suburb', $post_code)
                  ->select('venues.name', 'workshops.*', DB::raw('DATEDIFF(workshops.startDate, workshops.endDate) as days'),'topics.topicname as topic', 'topics.shortDesc as topicDesc', 'topics.age_groups as ages', 'imageUrl as topicImage')
                  ->limit(5)
                  ->get();
    foreach($camps as $camp) {
      $camp->days = $camp->days + 1;
      if ($camp->days == 1) {
        $camp->days = '('.$camp->days.' day camp'.')';
      } else {
        $camp->days = '('.$camp->days.' days camp'.')';
      }      
    }
    //return view('camps.results', compact('camps'));
	}
}
