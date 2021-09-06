<h3>EdiT / Update- City !</h3>
<form action="/update" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $cityData['id'] }}">
    <label for="CityName">City Name:</label><br>
    <input type="text" name="CityName" value="{{ $cityData['city_name'] }}"><br>
    <label for="CityZipCode">Zip Code</label><br>
    <input type="number" name="CityZipCode" value="{{ $cityData['city_zip_code'] }}"><br><br>
    <button type="submit">Update City</button>
</form>
