<h3>EdiT / Update- City !</h3>
@if (session('updateData'))
   {{-- <h4> {{ session('formInserted') }} - has been uploaded!    </h4> --}}
   <h4 style="color: green; border-style: solid; border-color: coral;">Form has been successfully Updated!    </h4>
    @endif
<form action="/update" method="post">
    @csrf
    <input type="text" name="id" value="{{ $cityData['id'] }}">
    <label for="CityName">City Name:</label><br>
    <input type="text" name="CityName" value="{{ $cityData['city_name'] }}"><br>
    <label for="CityZipCode">Zip Code</label><br>
    <input type="number" name="CityZipCode" value="{{ $cityData['city_zip_code'] }}"><br><br>
    <button type="submit">Update City</button>
</form>
