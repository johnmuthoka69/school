<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- <title>casablanca</title> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="/Grade"><span class="flaticon-pizza-1 mr-1"></span>matendeni<br><small>specious</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/dashboard" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/Grade/create" class="nav-link">Add New</a></li>
	          {{-- <li class="nav-item"><a href="/Gade/delete" class="nav-link">delete</a></li>
	          <li class="nav-item"><a href="/print" class="nav-link">print</a></li>
	          <li class="nav-item"><a href="/Grade/edit" class="nav-link">edit</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --}}
	        </ul>
	      </div>
		  </div>
	  </nav>


<h1>Grade Details</h1>

@if (count($grades) > 0)

@foreach ($grades as $grade)

  <div class="well">

    <h2><a href="/Grade/{{$grade->id}}">{{$grade->classname}}</a></h2>

    <small>written on {{$grade->created_at}}</small>

  </div>

  <div>
    classname: {{ $grade->classname }}<br>
    classteacher: {{ $grade->classteacher }}<br>
  </div>
</div>

@endforeach

@endif

<a href="{{ route('Grade.index') }}">Back to Grade List</a>

{{-- @endsection --}}
