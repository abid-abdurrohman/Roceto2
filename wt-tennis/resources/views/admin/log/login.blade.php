<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    
    <link rel="stylesheet" href="{{ URL::asset('admin/login/css/reset.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('admin/login/css/style.css') }}">
    
</head>
<body>
    <div class="container">
  <div class="info">
    <h1>LOGIN ADMIN</h1><span>Made with <i class="fa fa-heart"></i> by <a href="#">roceto</a></span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  {!! Form(['route' => ['admin.pro_login'], 'class'=>'login-form']) !!}
    <input type="text" placeholder="username" name="username" />
    <input type="password" placeholder="password" name="password" />
    <button>LOG IN</button>
  {!! Form::close() !!} 
</div>

<script src="{{ URL::asset('admin/login/js/index.js') }}"></script>

</body>
</html>
