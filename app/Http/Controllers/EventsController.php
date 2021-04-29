<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class EventsController extends BaseController
{
    public function getEventsWithWorkshops() {
        //throw new \Exception('implement in coding task 1');

        $workshops = DB::table('workshop_events')->get();

        foreach ($workshops as $key => $events) {
        	$response[] = array(
        			"id" => $events->id,
        			"name" => $events->name,
        			"created_at" => $events->created_at,
        			"updated_at" => $events->updated_at,
        			"workshops" => array(
        				"id" => $events->id,
        				"start" => $events->start,
        				"end" => $events->end,
        				"event_id" => $events->event_id,
        				"name" => $events->name,
        				"created_at" => $events->created_at,
        				"updated_at" => $events->updated_at,
        			)
        	);
        	# code...
        }
        echo json_encode($response);
        exit();
    }

    public function getFutureEventsWithWorkshops() {
        throw new \Exception('implement in coding task 2');
    }
}
