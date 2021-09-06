<h3>ADD City !</h3>
@if (session('formInserted'))
   {{-- <h4> {{ session('formInserted') }} - has been uploaded!    </h4> --}}
   <h4 style="color: green; border-style: solid; border-color: coral;">Form has been successfully Inserted!    </h4>
    @endif
<form action="add-city" method="post">
    @csrf
    <label for="CityName">City Name:</label><br>
    <input type="text" name="CityName" placeholder="Enter City-Name"><br>
    <label for="CityZipCode">Zip Code</label><br>
    <input type="number" name="CityZipCode" placeholder="Enter City-Zi-pCode"><br><br>
    <button type="submit">Save City</button>
</form>
