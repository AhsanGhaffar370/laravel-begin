<h1>User Data</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Email</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Avatar</td>
    </tr>
    
    @foreach ($collection as $d)
    <tr>
        <td>{{$d['id']}}</td>
        <td>{{$d['email']}}</td>
        <td>{{$d['first_name']}}</td>
        <td>{{$d['last_name']}}</td>
        <td><img src={{$d['avatar']}} alt="acx" /></td>
        
    </tr>
    @endforeach

</table>