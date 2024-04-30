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
<form method="POST" action="{{ route('Grade.store') }}">
    @csrf

    <div class="form-group">
        <label for="classname">Classname</label>
        <input type="text" name="classname" class="form-control" placeholder="Classname">
    </div>

    <div class="form-group">
        <label for="classteacher">Classteacher</label>
        <input type="text" name="classteacher" class="form-control" placeholder="Classteacher">
    </div>

    <div>
        <button type="submit">Create Grade</button>
    </div>
</form>
<br
<div class="text-right">
    <a href="{{ route('Grade.index') }}" target="_parent">Back</a>
</div>
</div>
