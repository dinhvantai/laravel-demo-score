<?php

namespace App\View\Components;

use App\Models\MatchInfo;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MatchItem extends Component
{
    /** @var Carbon */
    public Carbon $matchTime;

    /** @var int */
    public int $diff;

    public bool $showDefault;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public MatchInfo $match,
        protected Carbon $now,
    ) {
        $this->matchTime = Carbon::parse($match['match_time']);
        $this->diff = (int)$this->matchTime->diffInMinutes($now);
        $this->showDefault = $this->match['status_id'] <= MatchInfo::STATUS_NOT_STARTED
            || $this->match['status_id'] >= MatchInfo::STATUS_DELAY;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.match-item');
    }
}
