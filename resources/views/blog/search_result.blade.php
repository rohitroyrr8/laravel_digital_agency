@extends('layouts.blog')

@section('content')

  @if(count($posts) > 0)

    <div class="alert alert-success p-4">
       {{count($posts)}} Post/s found with "{{$query}}"
    </div>

  @foreach($posts as $post)

    <article class="post-list">
      <div class="post-thumb">
        <a href="{{$post->slug}}">
          <img src="{{asset('images/blog/post-thumb-1.jpg')}}" class="img-fluid" alt="Blog Post">
        </a>
      </div>
      <div class="post-body">
        <h3><a href="{{$post->slug}}">{{$post->title}}</a></h3>
        <div class="meta"><span class="date">{{ date('F j, Y', strtotime($post->updated_at)) }}</span><span class="author"><a href="#">Michael Ron</a></span><span class="comments">02 Comments</span></div>
        <p>{!!substr($post->body, 0, 180)!!}</p>
        <a href="{{$post->slug}}" class="button primary-bg">Read More</a>
        <div class="categories">
          <a href="#">Marketing</a>
          <a href="#">SEO</a>
        </div>
        
      </div>
    </article>
  @endforeach


@endif
 @endsection
			