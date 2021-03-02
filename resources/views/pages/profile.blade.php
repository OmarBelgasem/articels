@extends('layouts.app') 
@section('content')
<div id='sideflap' style="top:3.4rem">
  <div id='userpic'></div>
  <div id='userstats'>
    <div id='username'>
    {{ Auth::user()->name }}
      <div id='usertags'> Email: {{ Auth::user()->email }} </div>
    </div>
      <h1 style="color:white; margin:12px;"> {{ Auth::user()->about }} </h1>
        <div id='usercounts' style="margin-top:2rem;">
          <div class='count' id='books'>
            <div class='num'>
              {{ count($posts) }}
        </div>
        books written
      </div>
  </div>
</div>

<div id='bookshelf'>
@if(count($posts) > 0)
@foreach($posts as $post)
    <div class='book'>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    {{ __('Your Blog Posts!') }}
    <table class="table table-striped">
    <h1 style="color: black;"><a href="posts/{{$post->id}}"> {{ $post->title }} </a></h1>
        <span style="color:black;">
            {!! Str::words($post->body, 10, '...') !!}
        </span>
        <br>
        <span style="color:black;">
            {{ $post->user->name }}
        </span>
        <div style="display:flex; margin-top:1rem;">
          <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Edit </a>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-rigth']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class="btn btn-danger"'])}}
            {!! Form::close() !!}
    </table>
        </div>
        @endforeach
        @else
          <div class="alert" style="color:black; text-align:center;"> You have No Posts </div>
        @endif
    </div>
</div>
@endsection