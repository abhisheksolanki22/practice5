<div>
    <h2>User Page</h2>
<table border="1" cellpadding="10">
<thead>
<tr>
        <td>#</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
</thead>
<tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
