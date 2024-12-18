<div>
    <h1>Login Form </h1>
    <form action="login" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name" id="">
        <br><br>
        <input type="text" name="email" placeholder="Enter Email" id="">
        <br><br>
        <button>Log In</button>
    </form>
</div>
