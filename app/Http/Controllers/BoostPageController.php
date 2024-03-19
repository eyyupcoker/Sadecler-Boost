<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class BoostPageController extends Controller
{
    public function boostpage() {
        return view ('/boostpage');
    }
    public function postboost(Request $request)
    {
        $currentLeague = $request->input('currentLeague');
        switch ($currentLeague) {
            case 'iron':
                $currentLeague = 'Demir';
                break;
            case 'bronze':
                $currentLeague = 'Bronz';
                break;
            case 'silver':
                $currentLeague = 'Gümüş';
                break;
            case 'gold':
                $currentLeague = 'Altın';
                break;
            case 'platinum':
                $currentLeague = 'Platin';
                break;
            case 'diamond':
                $currentLeague = 'Elmas';
                break;
            case 'ascendant':
                $currentLeague = 'Yücelik';
                break;
            default:
                // Eğer beklenmeyen bir değer gelirse, currentLeague'i olduğu gibi kullanıyoruz
                break;
        }
        $leagueDivision = $request->input('leagueDivision');
        $leaguePoints = $request->input('leaguePoints');
        $targetLeague = $request->input('targetLeague');
        switch ($targetLeague) {
            case 'iron':
                $targetLeague = 'Demir';
                break;
            case 'bronze':
                $targetLeague = 'Bronz';
                break;
            case 'silver':
                $targetLeague = 'Gümüş';
                break;
            case 'gold':
                $targetLeague = 'Altın';
                break;
            case 'platinum':
                $targetLeague = 'Platin';
                break;
            case 'diamond':
                $targetLeague = 'Elmas';
                break;
            case 'ascendant':
                $targetLeague = 'Yücelik';
                break;
            default:
                // Eğer beklenmeyen bir değer gelirse, currentLeague'i olduğu gibi kullanıyoruz
                break;
        }
        $targetLeagueDivision = $request->input('targetLeagueDivision');
        $price = $request->input('price');
        $extraWin = $request->input('extraWin');
        $liveStream = $request->input('liveStream');
        $offlineMod = $request->input('offlineMod');
        $user_id = Auth::id();
        $data = array('currentLeague' => $currentLeague, 'leagueDivision' => $leagueDivision, 'leaguePoints' => $leaguePoints, 'targetLeague' => $targetLeague, 'targetLeagueDivision' => $targetLeagueDivision, 'price' => $price, 'user_id' => $user_id, 'extraWin' => $extraWin, 'liveStream' => $liveStream, 'offlineMod' => $offlineMod);
        DB::table('boosts')->insert($data);
        return redirect('boost')->with('status', 'boost post form data has been inserted');
    }
}
