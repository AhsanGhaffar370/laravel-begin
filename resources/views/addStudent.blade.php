
<h1>Add Student</h1>

<form action="/addstu" method="POST">
    @csrf
    <input type="text" name="firstName" placeholder="First Name" />
    <br/>
    <input type="text" name="lastName" placeholder="Last Name" />
    <br/>
    <input type="text" name="address" placeholder="Address" />
    <br/>
    <input type="submit" value="submit" />
</form>