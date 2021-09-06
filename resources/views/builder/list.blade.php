<table border="1px red">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
        <th>Class</th>
        <th>Actions</th>
    </tr>
    @foreach ($students as $s)
        <tr>
            <td>{{ $s->name }}</td>
            <td>{{ $s->age }}</td>
            <td>{{ $s->city_id }}</td>
            <td>{{ $s->class }}</td>
            <td>
                <a href="{{ 'delete/'.$s->id  }}">Delete</a>
                ||
                <a href="{{ 'edit/'.$s->id  }}">Edit</a>
            </td>


        </tr>
    @endforeach
</table>
