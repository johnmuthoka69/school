<!-- edit.blade.php -->

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
<form action="{{ route('Grade.update', $grades->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="classname">Classname</label>
        <input type="text" name="classname" class="form-control" placeholder="Classname" value="{{ $grades->classname }}">
    </div>

    <div class="form-group">
        <label for="classteacher">Classteacher</label>
        <input type="text" name="classteacher" class="form-control" placeholder="Classteacher" value="{{ $grades->classteacher }}">
    </div>

    <div>
        <button type="submit">Update Grade</button>
    </div>
</form><br
<div class="text-right">
    <a href="{{ route('Grade.index') }}" target="_parent">Back</a>
</div>
</div>
