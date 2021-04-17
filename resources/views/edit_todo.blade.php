
<h1>Add</h1>

<!-- <form action="/todo_update/{{$todo_arr->id}}" method="POST"> -->
<form action="{{route('todo.update', [$todo_arr->id])}}" method="POST">
    @csrf
    <input type="text" name="username" placeholder="name" value="{{$todo_arr->name}}"/>
    <br/>
    <input type="submit" value="submit" />
</form>