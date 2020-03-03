<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.header')
</head>

<body>
    <div class="d-flex" id="wrapper">

    @include('partials.sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper">

        @include('partials.navbar')

        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    @include('partials.footer')

    @yield('script')

</body>

</html>