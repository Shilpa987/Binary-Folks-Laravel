<!DOCTYPE html>
<html>
<head>
    <title>Hotel Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>>

    <!-- Styles -->
    <style type="text/css">
        div{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>
</head>
<body>
    <br/>
    <div class="container box">
        <h3 align="center">Hotel Management System</h3><br/>

        @if(isset(Auth::user()->email))
            <div class="alert alert-danger success-block">
                <strong>
                    Welcome{{Auth::user->email}}
                </strong>
                <br/>
                <a href="{{url('/main/logout')}}">Logout</a>
            </div>
            else
            <script>window.location="/main";</script>

        @endif

</div>

</body>
</html>


