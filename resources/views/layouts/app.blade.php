<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Bikemen App') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="style.css" media="screen" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

        <!-- Scripts -->
        <!-- jQuery UI CSS -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jQuery UI -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript">
            var siteUrl = "{{url('/')}}";
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">


            <!-- Page Heading -->
            @isset($header)
            <header>
                <nav class="navbar"></nav>
                <div class="header-middle" style="text-align: center;">
                    <div class="container">
                        <div class="header-middle-left">
                            <a href="{{ __('dashboard') }}">
                                <img src="https://bikemen.cdn.shoprenter.hu/custom/bikemen/image/cache/w600h80m00/bikemen-logo-600x80.png?v=1610795655" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-categories-wrapper">
                    <div class="container">
                        <div class="module-category-wrapper">
                            <div id="category" class="header-position">
                                <div class="module-body">
                                    <div id="category-nav">
                                        <ul class="category_menu sf-horizontal">
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Napi Bevétel</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="{{ __('worksheet_input') }}" class="category-list-link">
                                                    <h3 class="category-list-link-text">Munkafelvétel</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Regisztráció</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Javítások</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Keresések</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Beszerzés</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Napi Zárás</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Kassza</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Statisztikák</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Beosztás</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Emlékeztetők</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Könyvelőnek</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Tartozások</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Szerszám Igény</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text">Program Hibák</h3>
                                                </a>
                                            </li>
                                            <li class="category-list">
                                                <a href="" class="category-list-link">
                                                    <h3 class="category-list-link-text text-danger">Kilépés</h3>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <footer class="">
                <section class="footer-copyright">
                    <div class="">
                        <div class="copyright">
                            <div class="">
                                © 2024   Somy Design
                            </div>
                        </div>
                    </div>
                </section>
            </footer>
        </div>
    </body>
</html>
