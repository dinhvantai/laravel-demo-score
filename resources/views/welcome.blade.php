<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @endif
</head>
<body>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <button class="btn btn-secondary me-3">Tất cả</button>
            <button class="btn btn-secondary me-3">
                <i class="bi bi-broadcast"></i>
                Trực tiếp
            </button>
            <button class="btn btn-secondary me-3">Đã kết thúc</button>
            <button class="btn btn-secondary">Lịch thi đấu</button>
        </div>
        <div class="col-12 matches-list mt-4">
            <table class="table">
                <tbody>
                <tr class="table-secondary">
                    <td colspan="8">
                        <div class="d-flex align-item-center">
                            <i class="bi bi-star me-3"></i>
                            <img src="/" alt="Vietnam" class="me-3">
                            <span class="text-gray-50 me-2">Vietnam</span>
                            <strong class="ms-1">dfasdfasfsddsa</strong>
                            <span class="ms-1">- Bang dau A</span>
                        </div>

                    </td>
                </tr>
                <tr class="match">
                    <td class="icon text-center">
                        <i class="bi bi-star text-secondary"></i>
                    </td>
                    <td class="start-time text-center">
                        <span class="text-secondary">
                            16:00
                        </span>
                    </td>
                    <td class="time text-center">
                        <span class="text-danger">56'</span>
                    </td>
                    <td class="home-team text-right">
                        Clb Test
                        <i class="bi bi-star"></i>
                    </td>
                    <td class="score text-center">
                        <strong class="text-danger">
                            1-0
                        </strong>
                    </td>
                    <td class="away-team text-left">
                        <i class="bi bi-star"></i>
                        Clb Test
                    </td>
                    <td class="half-time text-right text-secondary">
                        HT 1-0
                    </td>
                    <td class="corner text-right text-secondary">
                        <img src="/imgs/icons/corner-flag.svg" alt="corner-flag" class="icon" />
                        1-0
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</html>
