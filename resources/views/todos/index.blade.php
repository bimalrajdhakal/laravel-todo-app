@extends('layouts.app')

@section('content')
    <br>
    <h1>Todos</h1>
    @if(count($todos) > 0)
      @foreach ($todos as $todo)
        <div class="card card-body bg-light">
            <h3>
              <a href="/todo/{{$todo->id}}">
                    {{$todo->title}} 
              </a>
              <span class="badge badge-danger">{{$todo->due}}</span></h3>
        </div>  
        <br>  
      @endforeach
    @endif
@endsection
