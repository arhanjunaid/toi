<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	@include('Admin.layouts.links')
</head>
<body>
	<section>
		<div class="container">
			dashboard
			<p>{{$LoggedUserInfo['name']}}</p>
			<p>{{$LoggedUserInfo['email']}}</p>
		</div>
		<a href="{{ route('auth.logout') }}">logout</a>
	</section>
</body>
</html>