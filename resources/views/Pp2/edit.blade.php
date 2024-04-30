<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pupil Information</title>

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

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        h3 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="center-container">
    <div class="container">
        <h3>Edit Pupil Information</h3>

        <form method="POST" action="{{ route('Pp2.update', $pp2->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="class_name">CLASS NAME</label>
                <select name="class_name" class="form-control">
                    @foreach($classNames as $className)
                        <option value="{{ $className }}" {{ $className == $pp2->class_name ? 'selected' : '' }}>{{ $className }}</option>
                    @endforeach
                </select>
                @error('class_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" placeholder="Enter First Name" value="{{ $pp2->firstname }}">
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" placeholder="Enter Last Name" value="{{ $pp2->lastname }}">
            </div>

            <div class="form-group">
                <label for="studentID">Student ID</label>
                <input type="text" name="studentID" placeholder="Enter Student ID" value="{{ $pp2->studentID }}">
            </div>

            <div class="form-group">
                <label for="course">Total Fee</label>
                <input type="number" name="course" placeholder="Enter Total Fee" value="{{ $pp2->course }}">
            </div>

            <div class="form-group">
                <label for="parentsname">Parents' Names</label>
                <input type="text" name="parentsname" placeholder="Enter Parents' Names" value="{{ $pp2->parentsname }}">
            </div>

            <div class="form-group">
                <label for="parents">Parents' Phone Number</label>
                <input type="text" name="parents" placeholder="Enter Parents' Phone Number" value="{{ $pp2->parents }}">
            </div>

            <div class="form-group">
                <label for="feepaid">Fee Paid</label>
                <input type="number" name="feepaid" placeholder="Enter Fee Paid" value="{{ $pp2->feepaid }}">
            </div>

            <div class="form-group">
                <label for="classTeacher">Class Teacher</label>
                <select name="classTeacher" class="form-control">
                    @foreach($classTeachers as $classTeacher)
                        <option value="{{ $classTeacher }}" {{ $classTeacher == $pp2->classTeacher ? 'selected' : '' }}>{{ $classTeacher }}</option>
                    @endforeach
                </select>
                @error('classTeacher')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="receiptNO">Receipt Number</label>
                <input type="text" name="receiptNO" placeholder="Enter Receipt Number" value="{{ $pp2->receiptNO }}">
            </div>

            <div class="form-group">
                <label for="term">Term</label>
                <select name="term" class="form-control">
                    <option value="term1" {{ $pp2->term == 'term1' ? 'selected' : '' }}>Term 1</option>
                    <option value="term2" {{ $pp2->term == 'term2' ? 'selected' : '' }}>Term 2</option>
                    <option value="term3" {{ $pp2->term == 'term3' ? 'selected' : '' }}>Term 3</option>
                </select>
                @error('term')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="grade">Grade</label>
                <select name="grade" class="form-control">
                    <option value="playgroup" {{ $pp2->grade == 'playgroup' ? 'selected' : '' }}>Playgroup</option>
                    <option value="pp1" {{ $pp2->grade == 'pp1' ? 'selected' : '' }}>PP1</option>
                    <option value="pp2" {{ $pp2->grade == 'pp2' ? 'selected' : '' }}>PP2</option>
                </select>
                @error('grade')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</div>

</body>
</html>
