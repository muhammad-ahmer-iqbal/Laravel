<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>

    <h2>Registration Successful!</h2>

    <h3>Student Information</h3>

    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Age: {{ $age }}</p>

    <a href="/register">Register Another Student</a>

</body>
</html>