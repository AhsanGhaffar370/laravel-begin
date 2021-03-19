<style>
.w-5{
    display:none;
}

th{
    background-color:yellow;
}
</style>

<h1>User Data</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
    </tr>
    
    @foreach ($data as $d)
    <tr>
        <td>{{$d['id']}}</td>
        <td>{{$d['firstName']}}</td>
        <td>{{$d['lastName']}}</td>
        <td>{{$d['address']}}</td>
        
    </tr>
    @endforeach

</table>

{{$data->links()}}