<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use App\Http\Requests;
use App\Http\Responses;

class PostController extends Controller
{
  /*public function getGeoData($address)
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
  }*/
  public function autocomplete(Request $request)
  {
    $term = $request->get('term');
    $results = array();
    $queries = DB::table('postcodes')
              ->where('postcode', 'LIKE', '%'.$term.'%')
              ->orWhere('suburb', 'LIKE', '%'.$term.'%')
              ->take(10)->get();
    foreach ($queries as $query) {
      $results[] = [ 'id' => $query->id, 'value' => $query->suburb.' '.$query->postcode ];
    }
    return response()->json($results);
  }

  public function getCoordinate($id)
  {
    $result = DB::table('postcodes')->where('id', $id)->get();
    if (count($result)) {
      return response()->json($result[0]);
    }
    return null;
  }

  function calc_dist($latitude1, $longitude1, $latitude2, $longitude2)
  {
    $diff = $longitude1 - $longitude2;
    $dist = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($diff)));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $dist_unit = 111.325; // Kilometers per degree latitude constant
    $dist = $dist * $dist_unit;
    return (round($dist));
  }

  //Calculates distance in KM between postcodes
  function postcode_dist($postcode1,$postcode2, $suburb1 = '', $suburb2 = '')
  {
    //Get lat and lon for postcode 1
    $extra = "";
    if ($suburb1 != '') {
      $extra = " and suburb = '$suburb1'";
    }
    $loc1 = DB::table('postcodes')
                ->where('lat', '<>', 0)
                ->andWhere('lon', '<>', 0)
                ->andWhere('postcode', $postcode1)
                ->andWhere('suburb', $suburb1)
                ->get();

    $extra = "";
    if ($suburb2 != '') {
      $extra = " and suburb = '$suburb2'";
    }

    $loc2 = DB::table('postcodes')
                ->where('lat', '<>', 0)
                ->andWhere('lon', '<>', 0)
                ->andWhere('postcode', $postcode2)
                ->andWhere('suburb', $suburb2)
                ->get();

    if ($loc1.length != 0 && $loc2.length != 0) {
      //proceed
      $dist = calc_dist($loc1[0].lat, $loc1[0].lon, $loc2[0].lat, $loc2[0].lon);
      if (is_numeric($dist)) {
        return $dist;
      } else {
        return "Unknown";
      }
    } else {
      return "Unknown";
    }
  }
}
