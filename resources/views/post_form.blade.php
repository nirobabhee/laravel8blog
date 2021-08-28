<h3>Post Your Data:</h3>
<form action="getFormDataForPost" method="post">
    @csrf
    <div>
        <label for=""> Name</label>
        <input type="text" name="name" id="1"><br>
    </div><br>
    <div>
        <label for="">Host name</label>
        <input type="text" name="host" id="2"><br>
    </div><br>
    <div>
        <label for="">Amount</label>
        <input type="number" name="amount" id="3"><br>
    </div><br>
    <div>
        <label for="">Post Details</label>
      <textarea name="details" id="" cols="30" rows="10"></textarea><br>
    </div><br>
    <button type="submit">Send</button>

</form>
