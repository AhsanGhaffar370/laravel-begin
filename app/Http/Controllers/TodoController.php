<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function index()
    {
        //
    }



    public function create()
    {
        return view('add_todo');
    }



    public function store(Request $req)
    {
        $todo = new Todo;

        $todo->name= $req->username;
        // $student->firstName= $req->input('firstName');

        $todo->save();

        $req->session()->flash('msg',"data submitted");
        $req->session()->flash('class',"succ");

        return redirect('todo_show');
    }



    public function show(Todo $todo)
    {
        return view("todo_view")->with("todo_arr",Todo::all());
    }



    public function edit(Todo $todo, $id)
    {
        return view("edit_todo")->with("todo_arr",Todo::find($id));
    }



    public function update(Request $request, Todo $todo)
    {
        $data= Todo::find($request->id);

        $data->name= $request->username;
        // $student->firstName= $req->input('firstName');

        $data->save();

        $request->session()->flash('msg',"data updated");
        $request->session()->flash('class',"succ");

        return redirect('todo_show');
    }



    public function destroy(Todo $todo, $id)
    {
        $data= Todo::find($id);
        $data->delete();
        // Todo::destroy(array("id",$id));
        // Todo::destroy(array(3,4));// delete multiple records

        return redirect('todo_show');
    }
}
