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
<br />
<div class="container box">
    <h3 align="center">Hotel Management System</h3><br/>

    @if(isset(Auth::user()->email))
        <script>window.location="/main/successlogin";</script>
    @endif

    @if($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <form method="post" action="{{url('/main/checklogin')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label>Enter Email</label>
            <input type="email" name="email" class="form-control" />
        </div>
        <div class="form-group">
            <label>Enter Password</label>
            <input type="password" name="password" class="form-control" />
        </div>
        <div class="form-group">
            <input align="center" type="submit" name="login" class="btn btn-primary" value="Login"/>
        </div>
    </form>
</div>

</body>
</html>

