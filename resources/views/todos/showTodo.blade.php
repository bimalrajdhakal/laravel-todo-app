@extends('layouts.app')

@section('content')
<br>
<a href="/" class="btn btn-outline-success" >Go Back</a>
    <br>
    <br>
    <br>
<div class="card card-body bg-light">
      <div>
          <h3>
            {{$todo->title}} 
            <div class="badge badge-danger">
              {{$todo->due}}
            </div>
          </h3>
          <hr>
            <p class="container">{{$todo->body}}</p>
          <hr>
          {{$todo->created_at}}
      </div>
</div>  
<br><br><br>
<a href="/todo/{{$todo->id}}/edit" class="btn btn-warning">Edit</a>

{!!Form::open(['action' => ['TodosController@destroy',$todo->id],'method'=>'POST','class'=>'float-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endsection