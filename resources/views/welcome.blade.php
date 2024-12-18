<h1>Welcome Page</h1>

@if (session('message'))
<div class="success">{{session('message')}}</div>
<div class="success">{{session('user')}}</div>
@endif

<!-- reflash  -->
<!-- {{session()->reflash()}} -->

<!-- {{session()->keep('user')}} -->

<!-- can keep multiple session  -->



<form action="/addUser" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Name" id="">
    <br><br>
    <input type="email" name="email" placeholder="Enter Name" id="">
    <br><br>
    <button>Add User</button>
</form>


<style>
    .success{
        padding: 10px 30px;
  background-color: greenyellow;
  display: inline-block;
  margin-bottom: 20px;
  border-radius: 5px;
  color: green;
    }
</style>