<tr class="table-secondary">
    <td class="icon text-center">
        <div class="d-flex align-item-center justify-center">
            <i class="bi bi-star text-secondary"></i>
        </div>
    </td>
    <td colspan="9">
        <div class="d-flex align-item-center match-group">
            <img src="{{ $country['logo'] }}" alt="{{ $country['name'] }}"
                 class="me-3 logo"/>
            <span class="text-gray-50 me-2">{{ $country['name'] }}:</span>
            <strong class="ms-1">{{ $teamCompetition['name'] }}</strong>
            @if($teamCompetition['id'] !== $matchCompetition['id'])
                <span class="mx-1"> - </span>
                <span>{{ $matchCompetition['name'] }}</span>
            @endif
        </div>
    </td>
</tr>
