<table border="1px">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
        <th>Class</th>
    </tr>
    @foreach ($students as $key => $student)
    <tr>
        <td>{{ $student['id'] }}</td>
        <td>{{ $student['name'] }}</td>
        <td>{{ $student['age'] }}</td>
        <td>{{ $student['city'] }}</td>
        <td>{{ $student['class'] }}</td>

    </tr>
  @endforeach
</table>
