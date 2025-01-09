<?php

namespace App\View\Components;

use App\Models\MatchInfo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MatchStatus extends Component
{
    /** @var string */
    public string $statusText;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public MatchInfo $match,
        public int       $diff,
    ) {
        $this->statusText = $this->convertToTextStatus();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.match-status');
    }

    protected function convertToTextStatus(): string
    {
        return match ($this->match['status_id']) {
            MatchInfo::STATUS_NOT_STARTED => 'Chưa bắt đầu',
            MatchInfo::STATUS_FIRST_HALF => $this->diff . "'",
            MatchInfo::STATUS_HALF_TIME => 'Nghỉ giữa hiệp',
            MatchInfo::STATUS_SECOND_HALF => ($this->diff - 15) . "'",
            MatchInfo::STATUS_OVERTIME => ($this->diff - 15 - 5) . "'",
            MatchInfo::STATUS_PENALTY_SHOOTOUT => 'Đá luân lưu',
            MatchInfo::STATUS_END => 'Kết thúc',
            MatchInfo::STATUS_DELAY => 'Trận đấu đang bị trễ',
            default => '',
        };
    }
}
