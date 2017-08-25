<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <base href="/"/>

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden" ng-app="TaskMeApp">
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button">☰</button>
</header>

<div class="app-body" ng-controller="LayoutController">
@include('partials/sidebar')

<!-- Main content -->
    <main class="main">


        <div class="container-fluid">

            <ng-view></ng-view>

        </div>
        <!-- /.conainer-fluid -->
    </main>


</div>

<footer class="app-footer">
    <a href="http://coreui.io">CoreUI</a> © 2017 creativeLabs.
    <span class="float-right">Powered by <a href="http://coreui.io">CoreUI</a>
        </span>
</footer>


<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script src="{{ asset('taskme/app/taskme.module.js') }}"></script>
<script src="{{ asset('taskme/app/taskme.routing.js') }}"></script>

<script src="{{ asset('taskme/app/layout/LayoutController.js') }}"></script>

</body>
</html>