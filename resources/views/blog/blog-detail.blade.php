@extends('layouts.blog')

@section('content')
   <div class="post-details-wrapper section-wrapper">
      <div class="thumb post-details-slider owl-carousel">
        <div class="post-details-slider-item">
          <img src="{{asset('images/blog/slider-1.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="post-details-slider-item">
          <img src="{{asset('images/blog/slider-2.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="post-details-slider-item">
          <img src="{{asset('images/blog/slider-3.jpg')}}" class="img-fluid" alt="">
        </div>
      </div>
      <div class="post-details">
                <h2>{{$post->title}} <a href="{{$post->id}}/edit" ><i class="fa fa-edit" style="font-size: 18px"></i></a> 
                  
                  {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'post']) !!}

                  {{Form::hidden('_method', 'DELETE')}}
                  {{Form::submit('X', ['style' => 'color: #db4836; background: white'])}}
                  
                  {!! Form::close() !!}

                </h2>
                <ul class="post-details-meta">
                  <li class="date"><i class="fas fa-calendar-alt"></i>{{ date('F j, Y', strtotime($post->updated_at)) }}</li>
                  <li class="author"><i class="fas fa-user"></i><a href="#">Michel Ron</a></li>
                  <li class="comment"><i class="fas fa-comments"></i>15 Comments</li>
                </ul>
                
                <p>{!!$post->body!!}</p>
                <div class="post-tags">
                  <label>Tags:</label>
                  <span><a href="#">Marketing</a></span>
                  <span><a href="#">SEO</a></span>
                  <span><a href="#">Media</a></span>
                </div>

                <div class="post-share-area">
                  <label>Share:</label>
                  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="google"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                  <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
    </div>       
@endsection