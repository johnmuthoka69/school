<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PP1 Class Information</title>
    
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
     <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40 !important;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
        h3 {
            color: blue;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>PP1 class<br><small>spacious</small></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/dashboard" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/Pp1/create" class="nav-link">Add New</a></li> <!-- Adjusted URL for PP1 -->
                    <li class="nav-item"> <button onclick="printDetails()" class="btn btn-primary">Print</button></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3>PP1 CLASS INFORMATION</h3> <!-- Adjusted class name -->
        @if(count($pp1) > 0) <!-- Adjusted variable name -->
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Student ID</th>
                        <th>Fee Paid</th>
                        <th>Fee Balance</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pp1 as $student) <!-- Adjusted variable name -->
                        <tr>
                            <td><a href="/Pp1/{{ $student->id }}">{{ $student->firstname }}</a></td> <!-- Adjusted URL for PP1 -->
                            <td>{{ $student->studentID }}</td>
                            <td>{{ $student->feepaid }}</td>
                            <td>{{ $student->feebalance }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p>Total Fee Paid by All Students: {{ $totalFeePaid }}</p>
            <p>Total Fee Balance by All Students: {{ $totalFeeBalance }}</p>
        @else
            <p>No Fee found</p>
        @endif
    </div>

    <script>
        function printDetails() {
            window.print();
        }
    </script>

    <!-- JavaScript files -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Datepicker -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
</body>
</html>
