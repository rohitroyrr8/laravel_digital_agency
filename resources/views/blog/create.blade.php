@extends('layouts.app')

@section('content')
<div class="section-padding">
      <div class="container">
      	<h3>Create a new Post</h3><br><br>
        <div class="row">
          <div class="col-lg-12">

          	@if(count($errors) > 0)
				@foreach($errors->all() as $error)
				<div class="alert alert-danger">
					{{$error}}
				</div>
				@endforeach
			@endif

          	{!! Form::open(['action' => 'PostController@store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

				<div class="form-group">
					<!-- {{Form::label('title', 'Title')}} -->
					{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Post Title', 'id' => 'title'])}}
				</div>
				<div class="form-group">
					<!-- {{Form::label('title', 'Title')}} -->
					{{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Post Body', 'id' => 'article-ckeditor'])}}
				</div>
				<div class="form-group">
					{{Form::file('cover_image')}}
				</div>
				<div class="">
					{{Form::submit('Publish', ['class' => 'btn btn-primary'])}}
				</div>

			{!! Form::close() !!}
          </div>
        </div>
    </div>
</div>
<!-- for ckeditor -->
<script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
	
@endsection