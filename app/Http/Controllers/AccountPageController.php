<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Boost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountPageController extends Controller
{
    public function retrieveProjects()
    {
        $user = Auth::user();
        $boosts = $user->boosts;
        $users = [$user];
        return view('account', compact('boosts', 'users'));
    }

    public function boostDetails($id)
    {
        $boosts = Boost::find($id);
        return view('boost-details', compact('boosts'));

    }
}
