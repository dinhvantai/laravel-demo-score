<div class="col-12">
    @foreach($types as $type => $typeText)
        @php
            $isActive = $type === $status;
        @endphp
        <a
            class="btn btn-{{ $isActive ? 'danger' : 'secondary' }} me-3 mt-3"
            href="?status={{ $type }}"
        >
            {{ $typeText }}
            @if($isActive)
                <span class="me-1">({{ $total }})</span>
            @endif
        </a>
    @endforeach
</div>
