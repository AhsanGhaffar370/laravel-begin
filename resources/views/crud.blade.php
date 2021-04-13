<style>
.w-5{
    display:none;
}

th{
    background-color:yellow;
}
.msg{
    background-color: red;
    color: white;
}

.btn1{
    text-decoration: none;
    background-color: #3994CF;
    color: white;
    border: 1px solid #3994CF;
    padding: 5px 20px;
    /* margin: 10px; */
}
</style>

<h1>User Data</h1>

<a href="addstu" class="btn1">Add User</a>
<br/><br/>
<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    
    @foreach ($data as $d)
    <tr>
        <td>{{$d['id']}}</td>
        <td>{{$d['firstName']}}</td>
        <td>{{$d['lastName']}}</td>
        <td>{{$d['address']}}</td>
        <td><a href={{'update-data/'.$d['id']}} >Update</a></td>
        <td><a href={{'delete-data/'.$d['id']}} >Delete</a></td>
        
    </tr>
    @endforeach

</table>

{{$data->links()}}