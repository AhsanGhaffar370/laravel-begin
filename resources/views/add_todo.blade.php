
<h1>Add</h1>

<form action="/todo_submit" method="POST">
    @csrf
    <input type="text" name="username" placeholder="name" />
    <br/>
    <input type="submit" value="submit" />
</form>