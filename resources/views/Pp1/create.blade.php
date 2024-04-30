<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Pupil - Playgroup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        input[type="text"]:focus, input[type="number"]:focus, select:focus {
            border-color: #007bff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        h3 {
            text-align: center;
            color: #007bff;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="center-container">
        <div class="form-container">
            <form method="POST" action="{{ route('Pp1.store') }}">
                @csrf
                <h3>Enter Pupil Information</h3>
                <div class="form-group">
                    <label for="class_name">Class Name</label>
                    <input type="text" name="class_name" class="form-control" placeholder="Enter Class Name">
                    @error('class_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
                    @error('firstname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name">
                    @error('lastname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="studentID">Student ID</label>
                    <input type="text" name="studentID" class="form-control" placeholder="Enter Student ID" maxlength="4">
                    @error('studentID')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="course">Total Fee</label>
                    <input type="text" name="course" class="form-control" placeholder="Enter Course">
                    @error('course')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="parentsname">Parents' Names</label>
                    <input type="text" name="parentsname" class="form-control" placeholder="Enter Parents' Names">
                    @error('parentsname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="parents">Parents' Phone Number</label>
                    <input type="text" name="parents" class="form-control" placeholder="Enter Parents' Phone Number" pattern="^0\d{9}$" title="Please enter a 10-digit phone number starting with 0">
                    @error('parents')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="feepaid">Fee Paid</label>
                    <input type="text" name="feepaid" class="form-control" placeholder="Enter Fee Paid">
                    @error('feepaid')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="classTeacher">Class Teacher</label>
                    <input type="text" name="classTeacher" class="form-control" placeholder="Enter Class Teacher">
                    @error('classTeacher')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="receiptNO">Receipt Number</label>
                    <input type="text" name="receiptNO" class="form-control" placeholder="Enter Receipt Number">
                    @error('receiptNO')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
