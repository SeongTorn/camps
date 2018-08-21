<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\ParentDetail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\PostController;

class CampsController extends Controller
{
  private $postController;

  public function __construct()
  {
    $this->postController = new PostController();
  }

  public function index()
  {
    return view('camps.create-account');
  }

  public function postCampDetails(Request $request, $id)
  {
    $camp = DB::table('camps')
                  ->join('locations', 'locations.id', '=', 'camps.venue_id')
                  ->join('ages', 'camps.age_id', '=', 'ages.id')
                  ->join('workshops', 'camps.workshop_id', '=', 'workshops.id')
                  ->leftJoin('enrolments', 'enrolments.camp_id', '=', 'camps.id')
                  ->select('locations.name',
                            'camps.*',
                            DB::raw('DATEDIFF(camps.start_date, camps.end_date) as days'),
                            DB::raw('TIME_FORMAT(camps.start_time, "%h:%i%p") as startTime'),
                            DB::raw('TIME_FORMAT(camps.end_time, "%h:%i%p") as endTime'),
                            DB::raw('TIME_FORMAT(camps.kids_arrive_time, "%h:%i%p") as arriveTime'),
                            DB::raw('TIME_FORMAT(camps.kids_depart_time, "%h:%i%p") as departTime'),
                            'ages.age_desc as ages',
                            'workshops.name as topic',
                            'workshops.content',
                            'workshops.short_desc',
                            'workshops.long_desc',
                            'workshops.why_attend',
                            'workshops.image',
                            DB::raw('COUNT(enrolments.id) as sold'))
                  ->where('camps.id', $id)
                  ->groupBy('camps.id')
                  ->get();
    return view('camps.campdetails')->with('camp', $camp[0]);
  }

  public function postRegister(Request $request, $id)
  {
    return view('camps.parentdetails1')->with('id', $id);
  }

  public function postRegister2(Request $request)
  {
    $pDetail = new ParentDetail;
    $pDetail->first_name = $request->get('first_name');
    $pDetail->last_name = $request->get('last_name');
    $pDetail->email = $request->get('email');
    $pDetail->phone = $request->get('phone');
    $pDetail->save();
    //return view('camps.parentdetails2');
  }

  public function toNoCampPage(Request $request)
  {
    $postcode = $request->get('postcode');
    return redirect('https://url.learncode.com.au/no-camps-in-area/?lead-postcode='.$postcode);
  }

  public function postSearch(Request $request)
  {
    $post_id = $request->get('post_id');
    $post = $this->postController->getCoordinate($post_id);
    $closet_locations = array();
    $count = 0;
    if ($post) {
      $locations = DB::table('locations')->get();
      foreach($locations as $location) {
        $lat2 = $location->address_latitude;
        $lon2 = $location->address_longitude;
        $dist = $this->postController->calc_dist($post->getData()->lat, $post->getData()->lon, $lat2, $lon2);

        if ($dist > 50 || $count >= 5) {
          continue ;
        }
        $count++;
        $location->dist = $dist;
        $location->from = $post->getData();
        $closet_locations[] = $location;
      }
    }

    usort($closet_locations, function($first,$second){
      return $first->dist < $second->dist;
    });

    //print_r($closet_locations);
    $i = 0;
    $camps = array();
    foreach($closet_locations as $location) {
      $camp_data = DB::table('locations')
                  ->join('camps', 'locations.id', '=', 'camps.venue_id')
                  ->join('ages', 'camps.age_id', '=', 'ages.id')
                  ->join('workshops', 'camps.workshop_id', '=', 'workshops.id')
                  ->leftJoin('enrolments', 'enrolments.camp_id', '=', 'camps.id')
                  ->select('locations.name',
                            'camps.*',
                            DB::raw('DATEDIFF(camps.start_date, camps.end_date) as days'),
                            DB::raw('TIME_FORMAT(camps.start_time, "%h:%i%p") as startTime'),
                            DB::raw('TIME_FORMAT(camps.end_time, "%h:%i%p") as endTime'),
                            DB::raw('TIME_FORMAT(camps.kids_arrive_time, "%h:%i%p") as arriveTime'),
                            DB::raw('TIME_FORMAT(camps.kids_depart_time, "%h:%i%p") as departTime'),
                            'ages.age_desc as ages',
                            'workshops.name as topic',
                            'workshops.short_desc as topicDesc',
                            'workshops.image as topicImage',
                            DB::raw('COUNT(enrolments.id) as sold'))
                  ->where('locations.id', $location->id)
                  ->groupBy('camps.id')
                  ->get();

        $camp_data = array_filter($camp_data, function($item){
          date_default_timezone_set("Australia/Sydney");
          $today = date('Y-m-d');
          $now_time = date('H');

          if ($item->start_date > $today) {
            return true;
          } else if ($item->start_date == $today && $now_time <= 8) {
            return true;
          }
          return false;
        });
        if (count($camp_data)) {
          $camps[] = array(
            'location' => $location,
            'data' => $camp_data
          );
        }
    }

    if (!$camps || !count($camps)) {
      return redirect('no-camps')->with('postcode', $post->getData()->postcode);
    } else {
      return view('camps.results', compact('camps'));
    }
	}
}
