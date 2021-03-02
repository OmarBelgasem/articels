@extends('inc.footer')
@extends('layouts.app')
@section('content')
    <h1> this is the about page </h1>
    <section class="banner">
  <div class="container">
    <div class="banner-text">
      <h1>Manage</h1>
      <p> We make it easy to get the most out of your virtual machine. Our tools make it simple to track how your Droplets are performing and help you to respond quickly if there is a problem </p>
      <a class="button" href="/register">Sign Up</a>
    </div>
  </div>
  <img class="banner-image" src="https://preview.ibb.co/bMi5Y6/banner_img.png" alt="monitoring">
</section>
@endsection