<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('static/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('static/css/bootstrap-icons.css') }}" />
    <link href="{{ asset('static/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('static/css/swiper-bundle.min.css') }}" />

    <!-- Scripts -->
    <script src="https://cdn.tiny.cloud/1/yd7rg9859b0dq2ytm3xdc4ywsuojdmeyd4dth289yean8hu2/tinymce/6/tinymce.min.js"
        referrerpolicy="origin" defer></script>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            if (typeof tinymce !== 'undefined') {
                tinymce.init({
                    selector: '.text-editor',
                    height: 200,
                    plugins: 'lists link image table code',
                    toolbar: 'undo redo | bold italic underline | bullist numlist | alignleft aligncenter alignright alignjustify | code',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                });
            }
        });
    </script>

    <style>
        .contact-map-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            gap: 40px;
            font-family: sans-serif;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
        }

        .contact-info {
            flex: 1;
        }

        .contact-info p,
        .contact-info a {
            margin: 8px 0;
            text-decoration: none;
            color: #3F4E70;
            font-size: 16px;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .map {
            flex: 1;
        }

        .map iframe {
            width: 100%;
            height: 300px;
            border: 2px solid #ccc;
            border-radius: 8px;
        }

        .rounded-custom {
            border-collapse: separate;
            border-spacing: 0;
        }

        .rounded-custom thead tr:first-child th:first-child {
            border-top-left-radius: 2rem;
        }

        .rounded-custom thead tr:first-child th:last-child {
            border-top-right-radius: 2rem;
        }

        .rounded-custom tbody tr:last-child td:last-child {
            border-bottom-right-radius: 2rem;
        }

        .rounded-custom tbody tr:last-child td:first-child {
            border-bottom-left-radius: 2rem;
        }

        .paginator {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 50px;
            position: relative;
        }

        .page-number {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.3s;
        }

        .page-number.active {
            background: linear-gradient(to bottom, #ff8800, #cc5500);
            color: white;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .progress-bar {
            position: absolute;
            bottom: -5px;
            left: 0;
            height: 5px;
            background: linear-gradient(to right, #ff8800, #cc5500);
            transition: 0.3s;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table-header {
            font-weight: bold;
            font-size: 1.5rem;
            color: black !important;
        }

        .green-text {
            color: green !important;
        }

        .blue-text {
            color: blue !important;
        }

        .table a {
            text-decoration: none;
            color: black;
        }

        .table a:hover {
            color: blue;
        }
    </style>
</head>

<body>
    @include('front.layouts.nav')

    @yield('section')

    @include('front.layouts.footer')

    <!-- Scripts -->
    <script src="{{ asset('static/js/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('static/js/particles.js') }}" defer></script>
    <script src="{{ asset('static/js/app.js') }}" defer></script>
    <script src="{{ asset('static/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('static/js/script.js') }}" defer></script>
    <script src="{{ asset('static/js/paginator.js') }}" defer></script>
    <script src="{{ asset('static/js/likescript.js') }}" defer></script>
    <script src="{{ asset('static/js/calendar.js') }}" defer></script>
    <script src="{{ asset('static/js/lang.js') }}" defer></script>
</body>

</html>
