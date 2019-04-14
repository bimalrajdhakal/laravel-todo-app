<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $todos = Todo::all();
        $todos = Todo::orderBy('created_at','desc')->get();
        return view('todos.index')->with('todos',$todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create todo form

        return view('todos.createTodo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // storing data to DB 
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'due'=>'required'
        ]);
        
        // create todo
        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');
        $todo->save();

        return redirect('/')->with('success','Todo Created Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show individual todos pages 

        $todo = Todo::find($id);
        return view('todos.showTodo')->with('todo',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // populating data in edit page
        $todo = Todo::find($id);
        return view('todos.editTodo')->with('todo',$todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // updating todos data to db
                $this->validate($request,[
                    'title'=>'required',
                    'body'=>'required',
                    'due'=>'required'
                ]);
                
                // update todo
                $todo = Todo::find($id);
                $todo->title = $request->input('title');
                $todo->body = $request->input('body');
                $todo->due = $request->input('due');
                $todo->save();
        
                return redirect('/')->with('success','Todo Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  deleting data from db
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/')->with('success','Todo Deleted Successfully!');
    }
}
