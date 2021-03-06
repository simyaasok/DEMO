 
	<html>

<head>

  <meta charset="UTF-8">

  <title>Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form method="post" action="{{ URL::route('login') }}" >
  @if($errors->has('username'))
		<p>{{$errors->first('username')}}</p>
		@endif
    <input type="text" name="username" placeholder="Username">
    @if($errors->has('password'))
		<p>{{$errors->first('password')}}</p>
		@endif
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
</form>

  <div class="login-help">
    {{ HTML::linkRoute('register','signup',null) }}
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>