<x-header data="Post"/>
<h3> This's Post Page!!!!!</h3>

<h5>Total User: {{ count($users) }}</h5>


@if($users == "Nirob")
<h6>Hi {{ $users }}</h6>
@elseif($users == "Apu")
<H5>Hello {{ $users }}</H5>
@else
<h3>Other User</h3>
@endif

@for($x=0; $x<10; $x++)
<h4>{{ $x }}</h4>
@endfor


@foreach ($users as $item)
    <h5>{{ $item }}</h5>
@endforeach


@include('inner')

<script>
    var data = @JSON($users);
    console.warn(data[1]);
    // console.log(data);
</script>




