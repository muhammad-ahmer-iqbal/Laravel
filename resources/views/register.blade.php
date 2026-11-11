<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

    <h2>Student Registration Form</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <form action="/register" method="POST">
        @csrf

        <label>Student Name:</label>
        <input type="text" name="name">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email">
        <br><br>

        <label>Age:</label>
        <input type="number" name="age">
        <br><br>

        <label>Course:</label>
        <select name="course">
            <option value="Laravel">Laravel</option>
            <option value="PHP">PHP</option>
            <option value="Python">Python</option>
        </select>
        <br><br>

        <button type="submit">Register</button>
    </form>

</body>
</html>