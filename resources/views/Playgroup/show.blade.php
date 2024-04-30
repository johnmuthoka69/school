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
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <!-- <div class="container">
          <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>casablanca<br><small>specious</small></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/Pp1/create" class="nav-link">Add New</a></li> -->
          <!-- Uncomment the following lines -->
          <!-- <li class="nav-item"><a href="/Pp1/delete" class="nav-link">delete</a></li>
          <li class="nav-item"><a href="/print" class="nav-link">print</a></li>
          <li class="nav-item"><a href="/Pp1/edit" class="nav-link">edit</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
        </ul>
      </div>
    </div>
</nav>
	  </nav><style>
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
  <div class="text-right">
      <!-- <a href="Playgroup" target="_parent">Back</a> -->
  </div>
<div class="container">
  <div class="text-right">
      <!-- <a href="Playgroup" target="_parent">Back</a> -->
  </div>

  <h3>Fee Details</h3>
  <p><strong>CLASS NAME:</strong> {{ $playgroup->class_name }}</p>
  <p><strong>First Name:</strong> {{ $playgroup->firstname }}</p>
  <p><strong>Last Name:</strong> {{ $playgroup->lastname }}</p>
  <p><strong>Student ID:</strong> {{ $playgroup->studentID }}</p>
  <p><strong>Total Fee:</strong> {{ $playgroup->course }}</p>
  <p><strong>Parents' Name:</strong> {{ $playgroup->parentsname }}</p>
  <p><strong>Phone Number:</strong> {{ $playgroup->parents }}</p>
  <p><strong>Fee Paid:</strong> {{ $playgroup->feepaid }}</p>
  <p><strong>Class Teacher:</strong> {{ $playgroup->classTeacher }}</p>
  <p><strong>Receipt NO:</strong> {{ $playgroup->receiptNO }}</p>
  <p><strong>Fee Balance:</strong> {{ $playgroup->feebalance }}</p>

  <a href="/Playgroup/{{$playgroup->id}}/edit" class="btn btn-primary">Edit</a>
  
  <!-- Delete Button -->
  <form action="{{ route('Playgroup.destroy', $playgroup->id) }}" method="POST" style="display: inline-block;">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
    
  </form>
</div>

<style>
  .text-right {
    position: fixed;
    top: 10px; /* Adjust as needed */
    right: 10px; /* Adjust as needed */
  }
</style>

<div class="text-right">
  <a href="/Playgroup" target="_parent">Back</a>
  <script src="{{ asset('js/print.js') }}"></script>
  <button onclick="printDetails()" class="btn btn-primary">Print</button>
</div>

<script>
  function printDetails() {
      window.print();
  }
</script>
</div>

