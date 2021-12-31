<table border="1px">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
        <th>Class</th>
        <th>Action</th>
    </tr>
    @foreach ($students as $key => $student)
        <tr>
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['age'] }}</td>
            <td>{{ $student['city'] }}</td>
            <td>{{ $student['class'] }}</td>
            <td>
                <a href="1">View</a>
                <a href="1">Edit</a>
                <a href="1">Delete</a>
            </td>

        </tr>
    @endforeach
</table>
