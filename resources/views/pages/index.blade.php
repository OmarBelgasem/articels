@extends('inc.footer')
@extends('layouts.app')
@section('content')
{{-- <div class="jumbotron text-center" style="margin-top: 30px">
<h1> {!! $title !!} </h1>
@if (!Auth::guest())
<?php 
    echo date("r");
    //Carbon\Carbon::now()->toRfc850String();
?>
@else
<div><a class="btn btn-primary btn-lg" href="/login" role="button"> Login </a> <a class="btn btn-success btn-lg" href="/register" role="button"> Register </a></div>
<?php echo date('Y-m-d H:i:s'); ?>
@endif
</div>
<div style="padding:21px;">
	<h1 class="h1"><strong class="strong"> </strong></h1>
</div> --}}

<section class="section-a" style="margin-top:6rem;">
   <div class="container">
       <div>
           <h1> {!! $title !!} </h1>
           <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                repudiandae rerum libero ipsum asperiores omnis mollitia, nostrum
                commodi placeat ea itaque modi corrupti corporis nam voluptas aut
                reprehenderit eaque culpa.
            </p>
            @if (!Auth::guest())
                <h2>
                   {{-- {!! date("r") !!} --}}
                </h2>
                {{-- Carbon\Carbon::now()->toRfc850String(); --}}
                
            @else
                <hr>
                <a class="btn btn-primary btn-lg" style="margin-right:9px;" href="/login" role="button"> Login </a>
                <a class="btn btn-success btn-lg" href="/register" role="button"> Register </a>
                <h2 style="margin-top:12px;">
                
                {{-- {!! date('r') !!} --}}
                </h2>
            @endif
        </div>
            <img src="images/image.png" alt="this image" />
    </div>

    <div style="margin-top:6rem;">
        <h2 class="h1"><strong class="strong"> </strong></h2>
    </div>
    <hr style="height:6px; border-radius:12px; background:goldenrod;">
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
    @else
        <div> No Posts Found Here! </div>
    @endif
    <a href="/posts"> See All Posts -> </a>
</section>
@endsection