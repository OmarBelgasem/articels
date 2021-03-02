@extends('layouts.app')

@section('content')
   <h1> Create Page </h1>
   {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
       <div class="form-group">
          {{ Form::label('title', 'Title')}}
          {{ Form::text('title', '', ['class' =>'form-control', 'placeholder' => 'title'])}}
       </div>
       <div class="form-group">
          {{ Form::label('body', 'Body')}}
          {{ Form::textarea('body', '', ['id' => 'editor','class' =>'form-control', 'placeholder' => 'Body Text'])}}
       </div>
       <div class="form-group">
       {{ Form::file('cover_image')}}
       </div>
       {{ Form::submit('button', ['class="btn btn-primary"'])}}
   {!! Form::close() !!}
@endsection