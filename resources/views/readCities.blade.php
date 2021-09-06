<h2>ALL CITIES</h2>

<table border="2px">
    <tr>
        <th>Serial</th>
        <th>Name</th>
        <th>Zip Code</th>
        <th>Actions</th>
    </tr>
    @foreach ($cities as $key => $city)

        <tr>
            <td align="center">{{ $key+1 }}</td>
            <td align="center">{{ $city['city_name'] }}</td>
            <td align="right">{{ $city['city_zip_code'] }}</td>
            <td>
                <button>
                    {{-- <a href="city-delete/{{ $city['id'] }}">Delete</a> --}}
                    <a href="{{"city-delete/".$city['id'] }}">Delete</a>
                </button>
                <button>
                    <a href="city-edit/{{ $city['id'] }}">Edit</a>
                </button>
            </td>
        </tr>
    @endforeach
</table>
<small>{{ $cities->links() }}</small>
<style>
    .w-5{
        display: none;
    }
</style>
