<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserInfo;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $emp_details = UserInfo::where('id', Auth::user()->id)->first();        
        return inertia('Users/Profile', [
            'emp_details' => $emp_details,
        ]);
        
        
    }
}
