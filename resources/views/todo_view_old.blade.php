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
        <th>Name</th>
        <th>Created At</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    
    @foreach ($todo_arr as $res)
    <tr>
    <td>{{$res->id}}</td>
    <td>{{$res->name}}</td>
    <td>{{$res->created_at}}</td>
    <td><a href="todo_update/{{$res->id}}">Update</a></td>
    <td><a href="todo_delete/{{$res->id}}">Delete</a></td>
    </tr>
    @endforeach

</table>
