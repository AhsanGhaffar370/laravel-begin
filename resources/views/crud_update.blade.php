
<h1>Add Student</h1>

<form action="/update-data" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}" />
    <input type="text" name="firstName" value="{{$data['firstName']}}" />
    <br/>
    <input type="text" name="lastName" value="{{$data['lastName']}}" />
    <br/>
    <input type="text" name="address" value="{{$data['address']}}" />
    <br/>
    <input type="submit" value="Update" />
</form>