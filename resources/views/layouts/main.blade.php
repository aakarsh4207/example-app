<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Form </title>
<!-- MDB icon -->
<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
<!-- Google Fonts Roboto -->
<link
rel="stylesheet"
href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
/>
<!-- MDB -->
<link rel="stylesheet" href="{{asset('public/test/css/mdb.min.css')}}" />
</head>
<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="{{asset('public/test/js/mdb.min.js')}}"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>