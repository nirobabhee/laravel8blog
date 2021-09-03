@if (session('file'))
   {{-- <h4> {{ session('file') }} - has been uploaded!    </h4> --}}
   <h4>File has been successfully uploaded!    </h4>
    @endif
<form action="/file-upload" method="post" enctype="multipart/form-data" >
    @csrf

    <input type="file" name="file_upload"> <br>
    <button type="submit">File-Upload</button>
</form>
