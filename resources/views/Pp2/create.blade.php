<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Pupil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 140vh; /* Adjust this value based on your needs */
        }

        .center-form {
            text-align: left;
        }
    </style>
</head>
<body>

<div class="center-container">
    <form method="POST" action="{{ route('Pp2.store') }}" class="center-form">
        @csrf
        <h3>ENTER PUPIL INFORMATION</h3>
    

        <div class="form-group">
            <label for="classTeacher">Class Teacher</label>
            <select name="classTeacher" class="form-control">
                @foreach($classTeachers as $classTeacher)
                    <option value="{{ $classTeacher }}">{{ $classTeacher }}</option>
                @endforeach
            </select>
            @error('classTeacher')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="class_name">CLASS NAME</label>
            <select name="class_name" class="form-control">
                @foreach($classNames as $className)
                    <option value="{{ $className }}">{{ $className }}</option>
                @endforeach
            </select>
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
            <label for="receiptNO">Receipt Number</label>
            <input type="text" name="receiptNO" class="form-control" placeholder="Enter Receipt Number">
            @error('receiptNO')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="term">Term</label>
            <select name="term" class="form-control">
                <option value="term1">Term 1</option>
                <option value="term2">Term 2</option>
                <option value="term3">Term 3</option>
            </select>
            @error('term')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="grade">Grade</label>
            <select name="grade" class="form-control">
                <option value="playgroup">Playgroup</option>
                <option value="pp1">PP1</option>
                <option value="pp2">PP2</option>
            </select>
            @error('grade')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
