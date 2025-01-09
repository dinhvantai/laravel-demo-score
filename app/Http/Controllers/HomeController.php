<?php

namespace App\Http\Controllers;

use App\Models\MatchInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index(Request $request)
    {
        $query = MatchInfo::query();
        $status = $request->get('status', 'live');
        switch ($status) {
            case 'live':
                $query->where('status_id', '>', MatchInfo::STATUS_NOT_STARTED)
                    ->where('status_id', '<', MatchInfo::STATUS_END);
                break;
            case 'notStarted':
                $query->where('status_id', MatchInfo::STATUS_NOT_STARTED);
                break;
            case 'ended':
                $query->where('status_id', MatchInfo::STATUS_END);
                break;
        }

        $matches = $query->with('homeTeam.competition', 'awayTeam.competition', 'competition')
            ->with('homeTeam.country', 'awayTeam.country')
            ->orderBy('match_time', 'asc')
            ->get();


        return view('welcome', [
            'matches' => $matches->groupBy('competition_id'),
            'total' => $matches->count(),
        ]);
    }
}
