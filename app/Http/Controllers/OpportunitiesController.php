<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OpportunitiesSubscribers;
use \DB;

class OpportunitiesController extends Controller
{

    public function getOpportunities($account_id) {

        $result = OpportunitiesSubscribers::where('account_id', '=', $account_id)->get();

        if (empty($result[0])) {
            return response()->json(['error' => "The resource could not be found"], 404);
        } else {
            $subscriberResult = $result->toArray();
            return response()->json(['result' => $subscriberResult], 200);
        }

    }

    public function saveOpportunities(Request $request) {

        $opportunitiesSubscribers = OpportunitiesSubscribers::create([
            'account_id' => $request->account_id,
            'email' => $request->email,
            'first_name' => $request->first_name,
        ]);

        if ($opportunitiesSubscribers) {
            return response()->json(['account_id' => $opportunitiesSubscribers->account_id, 'email' => $opportunitiesSubscribers->email, 'first_name' => $opportunitiesSubscribers->first_name], 201);
        } else {
            return response()->json(['error' => "Problem with request body"], 400);
        }

    }

    public function deleteOpportunities($account_id) {

        $subscriberDeleted = OpportunitiesSubscribers::where('account_id', '=', $account_id)->delete();

        if ($subscriberDeleted) {
            return response()->json([], 204);
        } else {
            return response()->json(['error' => "The resource could not be found"], 404);
        }

    }

}
