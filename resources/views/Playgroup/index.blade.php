<!DOCTYPE html>
<html lang="en">
  <head>

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
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Playgroup class<br><small>specious</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/dashboard" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/Playgroup/create" class="nav-link">Add New</a></li>
	          <li class="nav-item"> <button onclick="printDetails()" class="btn btn-primary">Print</button></a></li> 
	          <!-- <li class="nav-item"><a href="/print" class="nav-link">print</a></li> -->
	          <!-- <li class="nav-item"><a href="/Playgroup/edit" class="nav-link">edit</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --}} -->
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

<div class="center-container">
  <h3>PUPILS</h3>
  @if (count($playgroup) > 0)
      @foreach ($playgroup as $playgroup)
          <div class="well">
              <h2><a href="/Playgroup/{{ $playgroup->id }}">{{ $playgroup->firstname }}</a></h2>
              <!-- <small>written on {{$playgroup->created_at}}</small> -->
              <p>
                  <!-- CLASS NAME: {{ $playgroup->classname }}<br>
                  FIRST NAME: {{ $playgroup->firstname }}<br>
                  LAST NAME: {{$playgroup->lastname}}<br> -->
                  STUDENT ID: {{$playgroup->studentID}}<br>
                  <!-- Total Fee: {{$playgroup->course}}<br>
                  PARENT'S NAME: {{$playgroup->parentsname}}<br>
                  PARENT'S CONTACT: {{$playgroup->parents}}<br> -->
                  FEE PAID: {{$playgroup->feepaid}}<br>
                  <!-- CLASS TEACHER: {{$playgroup->classTeacher}}<br>
                  RECEIPT NO: {{$playgroup->receiptNO}}<br> -->
                  FEE BALANCE: {{$playgroup->feebalance}}
              </p>
          </div>
      @endforeach
      <p>Total Fee Paid by All Students: {{ $totalFeePaid }}</p>
      <p>Total Fee Balance by All Students: {{ $totalFeeBalance }}</p>
  @else
      <p>No Fee found</p>
  @endif
  <!-- <button onclick="printDetails()" class="btn btn-primary">Print</button> -->
</div>
<script>
          function printDetails() {
              window.print();
          }
      </script>
