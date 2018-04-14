<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Bootstrap core CSS-->

</head>
<body >
<!-- Navigation-->
  @auth
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-1">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">{{ config('app.name') }}</a>

    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Sign out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</nav>
    <div class="container-fluid">
        <div class="row">
          @include('partials.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
           @yield('content')
        </main>
    </div>

</div>
@endauth
@guest
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
@endguest

    <!-- /.container-fluid-->

    <!-- /.content-wrapper-->

    <!-- Bootstrap core JavaScript-->

    <!-- Scripts -->
<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
jq
<script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script>

</script>
    <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
