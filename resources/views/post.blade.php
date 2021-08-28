<h3>Its post page</h3>
<x-header name="PostPage1111"/>
<x-post-component name="PostPage222"/>
@for($x=0; $x<=count($data); $x++)
<h3>{{ $x }}</h3>
@endfor

@foreach ($data as $item)
    <h2>My name is {{ $item }}</h2> <br>
@endforeach

@csrf
@include('welcome');
@include('hello');












<script>

    var allUsers = @json($data);
    console.warn(allUsers[0]);
</script>
