<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\AvailedService;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session, DB;

class ServiceController extends Controller
{   
    public function AvailedServices(){
        if(Auth::check()) {
           $user = User::where('id', Auth::user()->id)->first();

           $availed_services = AvailedService::where('account_id', $user->account_id)->get();

           return response()->json([
                'message' => 'Services',
                'services' => $availed_services,
           ]);
        }

        return response()->json([
            'message' => 'No Service availed yet.'
        ]);
    }
}
