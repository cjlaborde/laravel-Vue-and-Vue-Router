<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessTokenController extends Controller
{
    // settings/access
    public function show()
    {
        return view('settings.token.show');
    }

    public function update()
    {
        // die('hello'); # checks if endpont working
        request()->user()->fill([
            'api_token' => $token = str_random(60)
            # if you going to hash it use below.
            // 'api_token' => hash('sha256', str_random(60))
        ])->save();
        // die($token);
        return back()->with('message', $token);
    }


}