<table border="1px" color="red">
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>DEPARTMENT</td>
    <td>SALARY</td>
</tr>
@foreach ($paginations as $key => $paginate)

<tr>
    <td>{{ $paginate['emp_id'] }}</td>
    <td>{{ $paginate['emp_name'] }}</td>
    <td>{{ $paginate['emp_dept'] }}</td>
    <td>{{ $paginate['emp_salary'] }}</td>
</tr>
@endforeach
</table>
<span>{{ $paginations->links() }}</span>

<style>
    .w-5{
        display: none;
    }
</style>
