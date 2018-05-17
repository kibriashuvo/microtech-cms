<html>

<head>
    <title>MicroTech | Register</title>
</head>
<body>
<div class="reg-page">

<div class="class=col-xs-4 col-xs-offset-4">
    <div class="class-xs-offset-4">
    <img src="{{asset('admin-assets/img/logo1.png')}}" style="width: 100%;">
    </div>
</div>

  <div class="form" >
    <form class="login-form" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

 {{--    <label><b>Name</b></label>
    <div class="brdr form-group{{ $errors->has('username') ? ' has-error' : '' }}">
      <input id="name" class="form-control" name="name" value="{{ old('username') }}" required autofocus placeholder="your name"/>
        @if ($errors->has('name'))
           <div class="container-fluid" style="margin-bottom: 10px;"> <span class="help-block">
                <strong style="color: #ff5454;">{{ $errors->first('name') }}</strong>
            </span></div>
        @endif
    </div> --}}



<div data-toggle="tooltip" title="Email should be valid and unique">
    <label class="labels brdr"><b>Email</b></label>
    <div class="brdr form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <input id="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="email"/>
        @if ($errors->has('email'))
           <div class="container-fluid" style="margin-bottom: 10px;"> <span class="help-block">
                <strong style="color: #ff5454;">{{ $errors->first('email') }}</strong>
            </span></div>
        @endif
    </div>
</div>

    <label class="labels brdr"><b>Username</b></label>

<div data-toggle="tooltip" title="Username can also be used for login">
    <div class="brdr form-group{{ $errors->has('username') ? ' has-error' : '' }}">
      <input id="username" class="form-control" name="username" value="{{ old('username') }}" required placeholder="username"/>
        @if ($errors->has('username'))
           <div class="container-fluid" style="margin-bottom: 10px;"> <span class="help-block">
                <strong style="color: #ff5454;">{{ $errors->first('username') }}</strong>
            </span></div>
        @endif
    </div>
</div>


<div data-toggle="tooltip" title="Password should be minimum 6 characters">
    <label class="labels brdr"><b>Password</b></label>
    <div class="brdr form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        
      <input id="password" type="password" class="form-control" name="password" required placeholder="password"/>
        @if ($errors->has('password'))
            <div class="container-fluid" style="margin-bottom: 10px;"> <span class="help-block">
                <strong style="color: #ff5454;">{{ $errors->first('password') }}</strong>
            </span></div>
        @endif
    </div>
</div>

<div data-toggle="tooltip" title="Enter the password again">
    <label class="labels brdr"><b>Confirm Password</b></label>
    <div class="brdr form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="enter password again"/>
        @if ($errors->has('password_confirmation'))
            <div class="container-fluid" style="margin-bottom: 10px;"> <span class="help-block">
                <strong style="color: #ff5454;">{{ $errors->first('password_confirmation') }}</strong>
            </span></div>
        @endif
    </div>
    <button type="submit">register</button>
    </form>
</div>

  </div>

</div>


<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.reg-page {
  width: 360px;
  padding: 0 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #164377;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.brdr{
text-shadow:
  -.2px -.2px 0 #000,  
  .2px -.2px 0 #000,
  -.2px .2px 0 #000,
  .2px .2px 0 #000;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #ffffff; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #ffffff, #ededed);
  background: -moz-linear-gradient(right, #ffffff, #ededed);
  background: -o-linear-gradient(right, #ffffff, #ededed);
  background: linear-gradient(to left, #ffffff, #ededed);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

.labels{
    color: white;
}
</style>
<script src="{{asset('admin-assets/js/bootstrap.js')}}"></script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
</body>
</html>