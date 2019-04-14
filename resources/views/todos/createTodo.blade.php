@extends('layouts.app')

@section('content')
  <br><br> 
  <h1>Create Todo</h1> 

  {!! Form::open(['action' => 'TodosController@store','method' => 'POST']) !!}
  <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title of the Todo'])}}
  </div>
  <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body of the Todo'])}}
  </div>

  <div class="form-group">
      {{Form::label('due','Due')}}
      {{Form::text('due','',['class'=>'form-control','placeholder'=>'Due Date/Time'])}}
  </div>

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}} 

  {!! Form::close() !!}
@endsection