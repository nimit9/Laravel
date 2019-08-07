@extends('user/app')

@section('bg-img',Storage::disk('local')->url($post->image))

@section('head')
<link rel="stylesheet" href="{{asset('user/css/prism.css')}}"> 
@endsection

@section('title',$post->title)
@section('subheading',$post->subtitle)

@section('main-content')


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId=1118920835162024"></script>


<!-- Post Content -->
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small>Created {{$post->created_at->diffForHumans()}}</small>
          <br>

          <small>Categories:</small>
          @foreach ($post->categories as $category)
          <small class="pull-right" style="margin-left: 20px">
            <a href="{{ route('category', $category->slug) }}"> {{$category->name}} </a>
          </small>
          @endforeach
          {!! htmlspecialchars_decode($post->body) !!}

          <small>Tags:</small><br>
           
            @foreach ($post->tags as $tag)
            <a href="{{ route('tag', $tag->slug) }}">
         <small class="pull-right" style="margin-right: 20px; border-radius: 5px; border: 1px solid gray; padding: 5px; " >
            {{$tag->name}}
          </small>
        </a>
          @endforeach
      
          <br>

          <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>

          <p>Placeholder text by
            <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
        </div>
      </div>
    </div>
  </article>

  <hr>





@endsection

@section('footer')
<script src="{{asset('user/js/prism.js')}}"></script>
@endsection