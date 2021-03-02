@if(count($errors) > 0)
   @foreach($errors->all() as $error)
       <div class="alert alert-danger" style="margin: 12px">
           {{ $error }}
       </div>
    @endforeach
@endif

@if(session('success'))
<div id="alert" class="alert alert-success" style="margin: 12px">
   {{ session('success') }}
</div>
@endif

@if(session('error'))
<div id="alert" class="alert alert-danger" style="margin: 12px">
   {{ session('error') }}
</div>
@endif