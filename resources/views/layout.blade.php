<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TA - @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset ('template/style-2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('template/sb-admin-2.css') }}">

    <!-- CSS -->           
            
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset ('css/jquery.mCustomScrollbar.min.css') }}">
<link rel="stylesheet" href="{{ asset ('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset ('css/style.css') }}">
<link rel="stylesheet" href="{{ asset ('css/media-queries.css') }}">

<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="{{asset ('ico/favicon.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset ('ico/apple-touch-icon-144-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset ('ico/apple-touch-icon-114-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset ('ico/apple-touch-icon-72-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" href="{{ asset ('/ico/apple-touch-icon-57-precomposed.png') }}">

    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  -->

<!-- cdn jquery -->



   


</head>

<body id="page-top" class="bg-img" style="background-image: url('../../gambar/A road to beauty.jpg');">

    <!-- Wrapper -->
<div class="wrapper">

    <!-- Sidebar -->
<nav class="sidebar">
    @include('sidebar')
</nav>
<!-- End sidebar -->

<!-- topbar -->
<nav class="topbar">
    @include('topbar')
</nav>
<!-- End topbar -->

<!-- Dark overlay -->
<div class="overlay"></div>

<!-- Content -->
<div class="content">


    <!-- open sidebar menu -->
<a class="btn btn-primary btn-customized open-menu" href="#" role="button">
<i class="fas fa-align-left"></i> <span>Menu</span>
</a>

@yield('content')
</div>
<!-- End content -->

</div>
<!-- End wrapper -->

    <!-- End of Page Wrapper -->
    @include('script')
    <!-- Scroll to Top Button-->
    
</body>

</html>