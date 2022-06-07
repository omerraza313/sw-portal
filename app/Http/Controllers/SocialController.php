<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
use Auth;

class SocialController extends Controller
{
    
    public function update(Request $request){

        $newUser = Social::updateOrCreate([   
            'user_id'   => Auth::user()->id,
            ],
            [

            'facebook'  => $request->facebook,
            'twitter'  => $request->twitter,
            'google_plus'  => $request->google_plus,
            'linkedin'  => $request->linkedin,
            'pinterest'  => $request->pinterest,
            'youtube'  => $request->youtube,
            'whatsapp'  => $request->whatsapp,
            

            ]);

        return redirect()->back()->with('msg', 'Social Media Links has been updated');

    }

    
}
