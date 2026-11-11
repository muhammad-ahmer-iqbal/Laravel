<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>

    <h1>Students List</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Marks</th>
            <th>Result</th>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['age'] }}</td>
            <td>{{ $student['marks'] }}</td>
            <td>
                @if($student['marks'] >= 50)
                    Pass
                @else
                    Fail
                @endif
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>