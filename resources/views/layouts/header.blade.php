<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset("/css/bootstrap.css") }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset("/css/bootstrap-theme.css") }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset("/css/style.css") }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset("/css/font-awesome.css") }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<meta name="_token" content="{{ csrf_token() }}" /> <?//<meta name="_token" content="{{ \Crypt::encrypt(  csrf_token()  ) }}" />?>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<!--<link href='http://fonts.googleapis.com/css?family=Droid+Serif:700,400,400italic,700italic' rel='stylesheet' type='text/css'>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    -->
</head>
<body>