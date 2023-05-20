<h1>User Login</h1>

<form action="user" method="POST">
    @csrf
<input type="text" name="user" placeholder="enter user name"><br>
<input type="password" name="password" placeholder="enter user password"><br>

<button>Login</button>
</form>