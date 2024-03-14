<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Living Praise of Zion Outreach</title>
	
	<!-- core CSS -->
    <link href="user/css/bootstrap.min.css" rel="stylesheet">
    <link href="user/css/font-awesome.min.css" rel="stylesheet">
    <link href="user/css/animate.min.css" rel="stylesheet">
    <link href="user/css/prettyPhoto.css" rel="stylesheet">
    <link href="user/css/main.css" rel="stylesheet">
    <link href="user/css/responsive.css" rel="stylesheet">

    <!-- this is my CUSTOMIZE CSS -->
    <link href="user/css/core.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="user/images/ico/icon_16x16.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="user/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="user/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="user/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="user/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
       
    @include('themes.top-bar')

    @include('themes.nav-bar')  
		
    </header><!--/header-->

    @include('themes.main-slider')

    @include('themes.feature')

    @include('themes.recent-works')
    
    @include('themes.services')

    @include('themes.middle')
    
    @include('themes.content')

    @include('themes.partner')

    @include('themes.contact-info')

    @include('themes.bottom')

    @include('themes.footer')

    
    <script src="user/js/jquery.js"></script>
    <script src="user/js/bootstrap.min.js"></script>
    <script src="user/js/jquery.prettyPhoto.js"></script>
    <script src="user/js/jquery.isotope.min.js"></script>
    <script src="user/js/main.js"></script>
    <script src="user/js/wow.min.js"></script>
    <script src="user/js/core.js"></script>

</body>
</html>