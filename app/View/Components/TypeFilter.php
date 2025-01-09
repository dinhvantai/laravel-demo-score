<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TypeFilter extends Component
{
    /** @var array|string[] */
    public array $types = [
        'all' => 'Tất cả',
        'live' => 'Trực tiếp',
        'notStarted' => 'Lịch thi đấu',
        'ended' => 'Đã kết thúc',
    ];

    /** @var string  */
    public string $status;

    /**
     * Create a new component instance.
     */
    public function __construct(public int $total)
    {
        $this->status = request('status', 'live');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.type-filter');
    }
}
