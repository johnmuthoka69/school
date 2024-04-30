<!-- resources/views/Playgroup/edit.blade.php -->

{{-- @extends('layouts.app') --}}
<h3>PUPILS</h3>

    

    {{-- <form method="POST" action="{{ route('Playgroup.update', $playgroup->id) }}"> --}}
        <form method="POST" action="{{ route('Playgroup.update', $playgroup->id) }}">   

        @csrf
        @method('PUT')
        <h3>Edit Pupil Information</h3>
        <div class="form-group">
            <label for="class_name">CLASS NAME</label>
            <input type="text" name="class_name" class="form-control" placeholder="CLASS NAME" value="{{ $playgroup->class_name }}">
            {{-- @error('class_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" value="{{ $playgroup->firstname }}">
            {{-- @error('firstname')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" value="{{ $playgroup->lastname }}">
            {{-- @error('lastname')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="studentID">Student ID</label>
            <input type="text" name="studentID" class="form-control" placeholder="Enter Student ID" maxlength="4" value="{{ $playgroup->studentID }}">
            {{-- @error('studentID')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="course">Total Fee</label>
            <input type="text" name="course" class="form-control" placeholder="Enter Course" value="{{ $playgroup->course }}">
            {{-- @error('course')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="parentsname">Parents' Names</label>
            <input type="text" name="parentsname" class="form-control" placeholder="Enter Parents' Names" value="{{ $playgroup->parentsname }}">
            {{-- @error('parentsname')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="parents">Parents' Phone Number</label>
            <input type="text" name="parents" class="form-control" placeholder="Enter Parents' Phone Number" pattern="^0\d{9}$" title="Please enter a 10-digit phone number starting with 0" value="{{ $playgroup->parents }}">
            {{-- @error('parents')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="feepaid">Fee Paid</label>
            <input type="text" name="feepaid" class="form-control" placeholder="Enter Fee Paid" value="{{ $playgroup->feepaid }}">
            {{-- @error('feepaid')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="classTeacher">Class Teacher</label>
            <input type="text" name="classTeacher" class="form-control" placeholder="Enter Class Teacher" value="{{ $playgroup->classTeacher }}">
            {{-- @error('classTeacher')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>

        <div class="form-group">
            <label for="receiptNO">Receipt Number</label>
            <input type="text" name="receiptNO" class="form-control" placeholder="Enter Receipt Number" value="{{ $playgroup->receiptNO }}">
            {{-- @error('receiptNO')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

