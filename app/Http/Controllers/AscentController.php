<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AscentSubscribers;
use \DB;

class AscentController extends Controller
{

//    public function index() {
//
//        return view('ascent-form');
//
//    }

    public function getAscent($account_id) {

        $result = DB::table('ascent_receivers')->where('account_id', '=', $account_id)->get();

        if (empty($result[0])) {
            return response()->json(['error' => "The resource could not be found"], 404);
        } else {
            $SubscriberResult = $result->toArray();
            return response()->json(['result' => $SubscriberResult], 200);
        }

    }

    public function saveAscent(Request $request, $account_id) {

        $ascentSubscribers = AscentSubscribers::create([
            'account_id' => $request->account_id,
            'email' => $request->email,
            'first_name' => $request->first_name,
        ]);

        if ($ascentSubscribers) {
            return response()->json(['account_id' => $ascentSubscribers->account_id, 'email' => $ascentSubscribers->email, 'first_name' => $ascentSubscribers->first_name], 201);
        } else {
            return response()->json(['error' => "Problem with request body"], 400);
        }

    }

    public function deleteAscent($account_id) {

        $subscriberDeleted = AscentSubscribers::where('account_id', '=', $account_id)->delete();

        if ($subscriberDeleted) {
            return response()->json([], 204);
        } else {
            return response()->json(['error' => "The resource could not be found"], 404);
        }

    }

}
