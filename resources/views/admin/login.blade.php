<!DOCTYPE html>
<html>
<head>
	<title>Admin Login / Gethome</title>
</head>
<body>

	<h1>Admin Login</h1>

	<form method="POST" action="{{ url('/admin') }}">

		 {{ csrf_field() }}


		
	<input type="email" name="e-mail" value="{{ old('email') }} "> <br>
	<input type="password" name="password"><br>

	<input type="submit" name="login">

	</form>

</body>
</html>