<tr class="match">
    <td class="icon text-center">
        <div class="d-flex align-item-center justify-center">
            <i class="bi bi-star text-secondary"></i>
        </div>
    </td>
    <td class="status-time text-center">
        <div class="d-flex align-item-center justify-center">
            <div class="time">
                 <span class="text-secondary">
                    {{ $matchTime->format('H:i') }}
                </span>
            </div>
            <div class="d-flex flex-grow-1 justify-center status">
                <x-match-status :match="$match" :diff="$diff"/>
            </div>
        </div>
    </td>
    <td class="team-score">
        <div class="d-flex align-item-center justify-center">
            <div class="home-team d-flex justify-end align-item-center">
                <span class="me-3">
                    {{ $match['homeTeam']['name'] }}
                </span>
                <div class="team-logo">
                    <img src="{{ $match['homeTeam']['logo'] }}"
                         alt="{{ $match['homeTeam']['name'] }}"
                         class="logo"
                    />
                </div>
            </div>

            <div class="score text-center">
                <strong class="text-danger">
                    @if($showDefault)
                        {{ '0 - 0' }}
                    @else
                        {{$match['home_scores'][0] ?? 0}} - {{$match['away_scores'][0] ?? 0}}
                    @endif
                </strong>
            </div>

            <div class="away-team d-flex align-item-center">
                <div class="team-logo">
                    <img src="{{ $match['awayTeam']['logo'] }}"
                         alt="{{ $match['awayTeam']['name'] }}"
                         class="logo"/>
                </div>
                <span class="ms-3">
                    {{ $match['awayTeam']['name'] }}
                </span>
            </div>

        </div>
    </td>
    <td class="statistic text-secondary">
        <div class="d-flex align-item-center justify-end">
            <div class="half-time">
                HT
                @if($showDefault)
                    {{ '0-0' }}
                @else
                    {{$match['home_scores'][1] ?? 0}}-{{$match['away_scores'][1] ?? 0}}
                @endif
            </div>
            <div class="corner ms-2">
                <img src="/imgs/icons/corner-flag.svg" alt="corner-flag" class="icon me-1"/>
                @if($showDefault)
                    {{ '0-0' }}
                @else
                    {{$match['home_scores'][4] ?? 0}}-{{$match['away_scores'][4] ?? 0}}
                @endif
            </div>
        </div>
    </td>
</tr>
