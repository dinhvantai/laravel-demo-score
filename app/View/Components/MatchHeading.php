<?php

namespace App\View\Components;

use App\Models\Competition;
use App\Models\Country;
use App\Models\MatchInfo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MatchHeading extends Component
{
    /** @var Country */
    public Country $country;

    /** @var Competition */
    public Competition $teamCompetition;

    /** @var Competition */
    public Competition $matchCompetition;

    /**
     * Create a new component instance.
     */
    public function __construct(public MatchInfo $match)
    {
        $this->country = $this->match['homeTeam']['country'];
        $this->teamCompetition = $this->match['homeTeam']['competition'];
        $this->matchCompetition = $this->match['competition'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.match-heading');
    }
}
