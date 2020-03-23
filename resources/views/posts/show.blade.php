@extends ('layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">

      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="blog-post-meta">January 1, 2014</p>

        <p>
        {{$post->body}}
        </p>
        
        </div><!-- /.blog-main -->
        <!-- /.blog-sidebar -->
        
        </div>
@endsection