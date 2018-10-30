@extends('layouts.blog')

@section('content')
            
            @if(session('success'))
              <div class="alert alert-success">
                {{session('success')}}
              </div>
            @endif

            @if(session('error'))
              <div class="alert alert-danger">
                {{session('error')}}
              </div>
            @endif

            @if(count($posts) > 0)
                @foreach($posts as $post)
                  <article class="post-list">
                    <div class="post-thumb">
                      <a href="#">
                        <img src="{{asset('images/blog/post-thumb-1.jpg')}}" class="img-fluid" alt="Blog Post">
                      </a>
                    </div>
                    <div class="post-body">
                      <h3><a href="blog/{{$post->slug}}">{{$post->title}}</a></h3>
                      <div class="meta"><span class="date">{{ date('F j, Y', strtotime($post->updated_at)) }}</span><span class="author"><a href="#">Michael Ron</a></span><span class="comments">02 Comments</span></div>
                      <p>{!!substr($post->body, 0, 180)!!}</p>
                      <a href="blog/{{$post->slug}}" class="button primary-bg">Read More</a>
                      <div class="categories">
                        <a href="#">Marketing</a>
                        <a href="#">SEO</a>
                      </div>
                      
                    </div>
                  </article>
                @endforeach

                <!-- for pagination  -->
                {{$posts->links()}}
                <!-- <div class="pagination-list">
                  <nav class="navigation pagination">
                    <div class="nav-links">
                      <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
                      <a class="page-numbers" href="#">1</a>
                      <span aria-current="page" class="page-numbers current">2</span>
                      <a class="page-numbers" href="#">3</a>
                      <a class="page-numbers" href="#">4</a>
                      <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                    </div>
                  </nav>                
                </div> -->
                
            @else
              <p>No Post Found</p>
            @endif
          
@endsection