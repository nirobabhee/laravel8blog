<h3>ADD City !</h3>
@if (session('formInserted'))
   {{-- <h4> {{ session('formInserted') }} - has been uploaded!    </h4> --}}
   <h4 style="color: green; border-style: solid; border-color: coral;">Form has been successfully Inserted!    </h4>
    @endif
<form action="/up" method="post">
    @csrf
    <label for="CityName">Name:</label><br>
    <input type="hidden" name="id" value="{{ $students->id}}"><br>
    <input type="text" name="studentName" value="{{ $students->name}}"><br>
    <label for="CityZipCode">Age</label><br>
    <input type="number" name="age" value="{{ $students->age}}"><br>
    <label for="CityZipCode">City Id</label><br>
    <input type="number" name="city_id" value="{{ $students->city_id}}"><br>
    <label for="CityZipCode">Class</label><br>
    <input type="text" name="class" value="{{ $students->class}}"><br><br>
    <button type="submit">Update</button>
</form>
