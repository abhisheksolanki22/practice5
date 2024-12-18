<div>

<!-- session -->
    @if (session('user'))
        <h1>Welcome, {{session('user')}}</h1>
        @else
        <h1>No user found in session <a href="login">LogIn</a></h1>
        @endif
        
        {{print_r(session('alldata'))}}
        <br><br>
        {{print_r(session('alldata')['email'])}}

    <br><br>

    <a href="logout">Logout</a>
</div>
