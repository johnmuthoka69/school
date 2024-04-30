{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>playgroup</title>
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
		      <a class="navbar-brand" href="/Grade"><span class="flaticon-pizza-1 mr-1"></span>classes<br><small>management</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/dashboard" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/Grade/create" class="nav-link">Add New</a></li> --}}
	          {{-- <li class="nav-item"><a href="/Gade/delete" class="nav-link">delete</a></li>
	          <li class="nav-item"><a href="/print" class="nav-link">print</a></li>
	          <li class="nav-item"><a href="/Grade/edit" class="nav-link">edit</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --}}
	        {{-- </ul>
	      </div>
		  </div>
	  </nav> --}}
    <style>
      .center-container {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh; /* Adjust this value based on your needs */
      }
  
      .center-form {
          text-align: left;
      }
  </style>

<div class="center-container">
<div class="container">
  <div class="text-right">
      <a href="{{ route('Grade.index') }}" target="_parent">Back</a>
  </div>
  
  <h3>Grade Details</h3>
  <p><strong>Class Name:</strong> {{ $grades->classname }}</p>
  <p><strong>Class Teacher:</strong> {{ $grades->classteacher }}</p>
  <!-- Other details -->
  
  <!-- Edit button -->
  <a href="{{ route('Grade.edit', $grades->id) }}" class="btn btn-primary">Edit</a>
  <div class="text-right">
    <a href="{{ route('Grade.index') }}" target="_parent">Back</a>
    <!-- Delete Button -->
    <form action="{{ route('Grade.destroy', $grades->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
    <!-- <li class="nav-item"><a href="/Grade/delete" class="nav-link">delete</a></li> -->
</div>
</div>
</div>
