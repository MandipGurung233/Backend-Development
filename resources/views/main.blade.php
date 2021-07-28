<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>School</title>
	<link rel="stylesheet" type="text/css" href="/style/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Qahiri&display=swap" rel="stylesheet">
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
</html>