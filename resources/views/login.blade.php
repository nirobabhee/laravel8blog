{{-- {{ $errors }} <br> --}}

<form method="POST" action="/get_data">
    @csrf

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    @endif --}}

    <label for="title">Name</label>
    <div> <input  type="text" name="name"  value= " {{old ('name') }} "><br>
        //old('input name here')---> use for old input give back again!!!
        <small style="color: red">@error('name'){{ $message }} @enderror</small>
    </div>


    <label for="title">Password</label>
    <div>
        <input type="password" name="password"  value= " {{old ('password') }} "><br>
        <small style="color: red">@error('password'){{ $message }} @enderror</small>
    </div>

    <button type="submit">login</button>


</form>
