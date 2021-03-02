@extends('inc.footer')
@extends('layouts.app')

@section('content')
{!! Form::open(['action' => 'PostsController@index', 'method' => 'GET', 'role'=>'search', 'enctype' =>'multipart/form-data']) !!}
         <div style="display:flex; align-items:baseline;">
                <input type="text" class="form-control" name="search" placeholder="Search...">
                     <button class="btn btn_get btn-lg" style="margin:12px" type="submit">
                         search
                     </button>
         </div>
{!! Form::close() !!}

   <h1> Posts </h1>
   @if(count($posts) > 0)
      @foreach($posts as $post)
        <div class="card card-body bg-light" style="margin: 12px">
        <div class="row">
           <div class="col-md-4 col-sm-4">
              <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
           </div>
           <div class="col-md-8 col-sm-8">
              <h1><a href="posts/{{$post->id}}"> {{ $post->title }} </a></h1>
            <small> Written on {{ $post->created_at }} by <a href="/profile/{{ $post->user->id }}"> {{ $post->user->name }} </a></small>
           </div>
        </div>
        </div>
       @endforeach
       {{ $posts->links() }}
    @else
        <div> No Posts Found Here! </div>
    @endif
@endsection