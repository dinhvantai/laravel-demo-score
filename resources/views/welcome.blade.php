@php use Carbon\Carbon; @endphp

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @endif
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container">
    <div class="row mt-1">
        <x-type-filter :total="$total"/>

        <div class="col-12 matches-list mt-4">
            <table class="table">
                <tbody>
                @php
                    $now = Carbon::now();
                @endphp

                @foreach($matches as $matchGroup)
                    @foreach($matchGroup as $match)
                        @if($loop->first)
                            <x-match-heading :match="$match"/>
                        @endif

                        <x-match-item :match="$match" :now="$now"/>
                    @endforeach
                @endforeach

                @if(!$matches->count())
                    <tr class="table-secondary">
                        <td colspan="10">
                            <div class="d-flex align-item-center match-group justify-center">
                                Không có trận đấu nào phù hợp
                            </div>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>
