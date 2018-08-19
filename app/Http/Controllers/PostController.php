<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
  public function getGeoData($address)
  {
    $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=2111,AU';
    $result = @file_get_contents($url);
    $data = json_decode($result);
    if ($data->status == 'OK') {
      return $data;
    }
  }

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
}
