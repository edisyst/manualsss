<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/compiled-4.20.0.min.css">

    <link href="{{ asset('css/bootstrap.show.styles.css') }}" rel="stylesheet" />
    @stack('stylesheets')
</head>
<body>
<div class="d-flex" id="wrapper">

    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <div class="mr-2">
                @yield('sidebar_menu')
            </div>
        </div>
    </div>

    <!-- Page content wrapper-->
    <div id="page-content-wrapper">

        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light border-bottom mb-2" style="background-color: #F9E5F0">
            <div class="container-fluid">
                <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                <h1>@yield('title')</h1>
            </div>
        </nav>

        <!-- Page content-->
        <div class="container-fluid">
            @yield('content_body')
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/sidebarToggle.js') }}"></script>
{{--    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>--}}
@stack('scripts')
</body>
</html>
