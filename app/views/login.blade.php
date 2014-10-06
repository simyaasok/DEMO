<h1>Login page</h1>
{{Form::open(array("URL::route(login)"))}}
<table>
	<tr>
		<td>User Name</td>
		<td><input type="text" name="username" /></td></tr>
		<tr><td>password</td>
		<td><input type="text" name="password"></td>
		<tr>
			<td><input type="submit" name="login" value="login"></td></tr></table>
	{{ Form::close()}}