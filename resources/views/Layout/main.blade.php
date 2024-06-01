<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bimbel Smart - Payroll</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body>
    <div id="main">
        <div class="side-container">
            <div class="sidebar">
                <div class="head">
                    <div class="user-img">
                        <img src="{{ asset('assets/img/LogoSmart.png') }}" alt="">
                    </div>
                    <div class="user-details">
                        <p class="title">Bimbel Smart Payroll</p>
                        <p class="name">`#nama`</p>
                    </div>
                </div>
                <div class="side-nav">
                    <div class="menu">
                        <p class="title">For Admin</p>
                        <ul>
                            <li class="active">
                                <a href="/user">
                                    <i class="icon ph-bold ph-user"></i>
                                    <span class="text">Data User</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/role">
                                    <i class="icon ph-bold ph-identification-badge"></i>
                                    <span class="text">Data Role</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/siswa">
                                    <i class="icon ph-bold ph-file-text"></i>
                                    <span class="text">Data Siswa</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/kelas">
                                    <i class="icon ph-bold ph-house-simple"></i>
                                    <span class="text">Data Kelas</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/slip-admin">
                                    <i class="icon ph-bold ph-file-text"></i>
                                    <span class="text">Data Slip Gaji</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/reimburse-admin">
                                    <i class="icon ph-bold ph-money"></i>
                                    <span class="text">Reimburse</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#">
                                    <i class="icon ph-bold ph-calendar-blank"></i>
                                    <span class="text">Data Presensi</span>
                                </a>
                        </ul>
                    </div>
                    <div class="menu">
                        <p class="title">For Tutor</p>
                        <ul>
                            <li class="">
                                <a href="#">
                                    <i class="icon ph-bold ph-user"></i>
                                    <span class="text">Presensi Siswa</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/slip-tutor">
                                    <i class="icon ph-bold ph-file-text"></i>
                                    <span class="text">Slip Gaji Pribadi</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/reimburse-tutor">
                                    <i class="icon ph-bold ph-money"></i>
                                    <span class="text">Reimburse</span>
                                </a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            @yield('content')
        </div>
    </div>

    {{-- JQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- Bootstrap Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
