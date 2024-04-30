{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    {{-- <title>casablanca</title> --}}
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
  <div class="center-container">
    <!-- END nav -->
<div class="container">
    <div class="text-right">
        <a href="/Pp1/" target="_parent">Back</a>
    </div>
  
    <h3>Fee Details</h3>
    <p><strong>CLASS NAME:</strong> {{ $pp1->class_name }}</p>
    <p><strong>First Name:</strong> {{ $pp1->firstname }}</p>
    <p><strong>Last Name:</strong> {{ $pp1->lastname }}</p>
    <p><strong>Student ID:</strong> {{ $pp1->studentID }}</p>
    <p><strong>Total Fee:</strong> {{ $pp1->course }}</p>
    <p><strong>Parents' Name:</strong> {{ $pp1->parentsname }}</p>
    <p><strong>Phone Number:</strong> {{ $pp1->parents }}</p>
    <p><strong>Fee Paid:</strong> {{ $pp1->feepaid }}</p>
    <p><strong>Class Teacher:</strong> {{ $pp1->classTeacher }}</p>
    <p><strong>Receipt NO:</strong> {{ $pp1->receiptNO }}</p>
    <p><strong>Fee Balance:</strong> {{ $pp1->feebalance }}</p>
  
    <a href="/Pp1/{{$pp1->id}}/edit" class="btn btn-primary">Edit</a>
  
    <!-- Delete Button -->
    <form action="{{ route('Pp1.destroy', $pp1->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        <!-- <a href="/Pp1/{{$pp1->id}}/delete" class="btn btn-primary">delete</a> -->
    </form>
  </div>
  
 
  
  <script>
    function printDetails() {
        window.print();
    }
  </script>
  