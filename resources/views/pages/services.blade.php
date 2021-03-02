@extends('inc.footer')
@extends('layouts.app')
@section('content')
    <h1> {{ $title }} </h1>
    @if(count($services) > 0)
    @forEach($services as $service)
    <ul class="list-group">
       <li class="list-group-item"> {{ $service }} </li>
    </ul>
    @endforEach
    @endif
@endsection