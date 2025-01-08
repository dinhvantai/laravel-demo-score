<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class MatchInfo extends Model
{
    use HasUuids;

    /**
     * 1: Not started
     * 2: First half
     * 3: Half-time
     * 4: Second half
     * 5: Overtime
     * 6: Overtime(deprecated)
     * 7: Penalty Shoot-out
     * 8: End
     * 9: Delay
     */
    const STATUS_NOT_STARTED = 1;
    const STATUS_FIRST_HALF = 2;
    const STATUS_HALF_TIME = 3;
    const STATUS_SECOND_HALF = 4;
    const STATUS_OVERTIME = 5;
    const STATUS_OVERTIME_DEPRECATED = 6;
    const STATUS_PENALTY_SHOOTOUT = 7;
    const STATUS_END = 8;
    const STATUS_DELAY = 9;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'matches';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;

    /**
     * Away team score field description
     * example：[1, 0, 0, 0, -1, 0, 0]
     * Enum:
     * 0: "Score (regular time) (Integer type)"
     * 1: "Halftime score (Integer type)"
     * 2: "Red cards (Integer type)"
     * 3: "Yellow cards (Integer type)"
     * 4: "Corners，-1 means no corner kick data (Integer type)"
     * 5: "Overtime score (120 minutes，including regular time)，only available in overtime (Integer type)"
     * 6: "Penalty shootout score，only penalty shootout
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'competition_id',
        'home_team_id',
        'away_team_id',
        'status_id',
        'match_time',
        'home_scores',
        'away_scores',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'home_scores' => 'array',
            'away_scores' => 'array',
        ];
    }

    public function competition(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Competition::class);
    }

    public function homeTeam(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }
}
