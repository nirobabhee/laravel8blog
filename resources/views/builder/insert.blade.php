<h3>ADD City !</h3>
@if (session('formInserted'))
   {{-- <h4> {{ session('formInserted') }} - has been uploaded!    </h4> --}}
   <h4 style="color: green; border-style: solid; border-color: coral;">Form has been successfully Inserted!    </h4>
    @endif
<form action="student-insert" method="post">
    @csrf
    <label for="CityName">Name:</label><br>
    <input type="text" name="studentName" placeholder="Enter Student-Name"><br>
    <label for="CityZipCode">Age</label><br>
    <input type="number" name="age" placeholder="Enter age"><br>
    <label for="CityZipCode">City Id</label><br>
    <input type="number" name="city_id" placeholder="Enter city id"><br>
    <label for="CityZipCode">Class</label><br>
    <input type="number" name="class" placeholder="Enter class"><br><br>
    <button type="submit">Save </button>
</form>
