<?php

// Controller code (SubscribeController.php)

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:subscriptions',
        ]);

        // Create a new subscription
        $subscription = Subscription::create([
            'email' => $request->email,
        ]);

        if ($subscription) {
            // Subscription successful
            return response()->json(['success' => true, 'message' => 'Subscription successful']);
        } else {
            // Subscription failed
            return response()->json(['success' => false, 'message' => 'Subscription failed'], 500);
        }
    }
}


