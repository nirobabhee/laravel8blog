<h1>Login Work by Session</h1>

<form action="/session" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter User Name"><br><br>
    <input type="password" name="userpassword" placeholder="Enter User Password"><br><br>
    <button type="submit">Login</button>
</form>
