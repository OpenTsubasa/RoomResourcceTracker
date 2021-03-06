<!DOCTYPE html>
<head>
    <title>RTT</title>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jsoneditor/7.0.4/jsoneditor.min.js"
        integrity="sha256-Unl8JvClhiabi3Jws+GLYjx47DTS5y7PkDIK0y3GXCE="
        crossorigin="anonymous"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jsoneditor/7.0.4/jsoneditor.min.css"
        integrity="sha256-GK81dwcrOmy4XxYUe7SQQIwd9qQymkYx2vMjTNv4pRw="
        crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    <style>
        .json_editor{
            width: 100%;
            height: 400px;
            min-width: 400px;
        }
        .json_text{
            display: none
        }
        .no-btn{
            cursor: default;
        }
    </style>

</head>
<body>
    <div class="container">
        @include('crud-navbar')

        @yield('header')

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
