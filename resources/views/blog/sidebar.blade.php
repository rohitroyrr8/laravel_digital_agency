<div class="sidebar">
  <aside class="widget widget_search">
    {!! Form::open(['action' => 'PostController@search', 'method' => 'get']) !!}
    
      <div class="form-group">
        {{Form::text('query', '' , ['class' => '', 'placeholder' => 'Search'])}}
        <!-- <input type="text" placeholder="Search"> -->
        <button><i class="fas fa-search"></i></button>
      </div>

    {!! Form::Close()!!}
   
  </aside>
  <aside class="widget widget_categories">
    <h4 class="widget-title">Category</h4>
    <ul>
      <li class="cat-item"><a href="#">Software</a> (10)</li>
      <li class="cat-item"><a href="#">SaaS</a> (06)</li>
      <li class="cat-item"><a href="#">Landing</a> (09)</li>
      <li class="cat-item"><a href="#">Sports</a> (12)</li>
      <li class="cat-item"><a href="#">Magazine</a> (04)</li>
    </ul>
  </aside>
  <aside class="widget widget_recent_post">
    <h4 class="widget-title">Recent Posts</h4>
    <div class="recent-entries">
      <div class="recent-entry">
        
        <div class="thumb">
          <a href="#">
            <img src="{{asset('images/blog/recent-entry-1.png')}}" class="img-responsive" alt="">
          </a>
        </div>
        <div class="body">
          <h5><a href="#">You can easily set the</a></h5>
          <span class="date"><a href="#"><i class="far fa-calendar-alt"></i>25 Dec 2018</a></span>
        </div>
      </div>
      <div class="recent-entry">
        <div class="thumb">
          <a href="#">
            <img src="{{asset('images/blog/recent-entry-1.png')}}" class="img-responsive" alt="">
          </a>
        </div>
        <div class="body">
          <h5><a href="#">You can easily set the</a></h5>
          <span class="date"><a href="#"><i class="far fa-calendar-alt"></i>25 Dec 2018</a></span>
        </div>
      </div>
      <div class="recent-entry">
        <div class="thumb">
          <a href="#">
            <img src="{{asset('images/blog/recent-entry-1.png')}}" class="img-responsive" alt="">
          </a>
        </div>
        <div class="body">
          <h5><a href="#">You can easily set the</a></h5>
          <span class="date"><a href="#"><i class="far fa-calendar-alt"></i>25 Dec 2018</a></span>
        </div>
      </div>
    </div>
  </aside>
  <aside class="widget widget_tag_cloud">
    <h4 class="widget-title">Tag Cloud</h4>
    <div class="tagcloud">
      <a href="#">Civil</a>
      <a href="#">Environment</a>
      <a href="#">Justice</a>
      <a href="#">Political</a>
      <a href="#">Senator</a>
      <a href="#">Article</a>
      <a href="#">Pollution</a>
      <a href="#">Agreement</a>
    </div>
  </aside>
</div>
     