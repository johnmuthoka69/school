{{-- resources/views/Pp2/show.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust this value based on your needs */
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .text-right {
            text-align: right;
        }

        .btn-primary {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="center-container">
    <div class="container">
        <div class="text-right">
            <a href="{{ route('Pp2.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <h3>Fee Details</h3>
        <p><strong>CLASS NAME:</strong> {{ $pp2->class_name }}</p>
        <p><strong>First Name:</strong> {{ $pp2->firstname }}</p>
        <p><strong>Last Name:</strong> {{ $pp2->lastname }}</p>
        <p><strong>Student ID:</strong> {{ $pp2->studentID }}</p>
        <p><strong>Total Fee:</strong> {{ $pp2->course }}</p>
        <p><strong>Parents' Name:</strong> {{ $pp2->parentsname }}</p>
        <p><strong>Phone Number:</strong> {{ $pp2->parents }}</p>
        <p><strong>Fee Paid:</strong> {{ $pp2->feepaid }}</p>
        <p><strong>Class Teacher:</strong> {{ $pp2->classTeacher }}</p>
        <p><strong>Receipt NO:</strong> {{ $pp2->receiptNO }}</p>
        <p><strong>Fee Balance:</strong> {{ $pp2->feebalance }}</p>

        <a href="{{ route('Pp2.edit', $pp2->id) }}" class="btn btn-primary">Edit</a>

        <!-- Delete Button -->
        <form action="{{ route('Pp2.destroy', $pp2->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>

<script>
    function printDetails() {
        window.print();
    }
</script>

</body>
</html>
