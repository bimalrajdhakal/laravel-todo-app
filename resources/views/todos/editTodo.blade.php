@extends('layouts.app')

@section('content')
  <br>
  <a href="/todo/{{$todo->id}}" class="btn btn-outline-success" >Go Back</a>
  <h1>Edit Todo</h1> 

  {!! Form::open(['action' => ['TodosController@update',$todo->id],'method' => 'POST']) !!}
  <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title', $todo->title ,['class'=>'form-control'])}}
  </div>
  <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body', $todo->body,['class'=>'form-control'])}}
  </div>

  <div class="form-group">
      {{Form::label('due','Due')}}
      {{Form::text('due', $todo->due,['class'=>'form-control'])}}
  </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Update',['class'=>'btn btn-primary'])}} 

  {!! Form::close() !!}
@endsection