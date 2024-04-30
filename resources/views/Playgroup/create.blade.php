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


<form method="POST" action="{{ route('Playgroup.store') }}">
    @csrf
    <h3>ENTER PUPILS INFORMATION</h3>
    <div class="form-group">
        <label for="class_name">CLASS NAME</label>
        <input type="text" name="class_name" class="form-control" placeholder="CLASS NAME">
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
        <input type="text" name="feepaid" class="form-control" placeholder="Enter Fee Paid" >
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

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
