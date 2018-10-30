@extends('layouts.app')

@section('content')
<!-- Blog -->
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <article class="post-list">
              <div class="post-thumb post-slider owl-carousel">
                <div class="post-slider-item">
                  <img src="images/blog/slider-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="post-slider-item">
                  <img src="images/blog/slider-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="post-slider-item">
                  <img src="images/blog/slider-3.jpg" class="img-fluid" alt="">
                </div>
              </div>
              <div class="post-body">
                <h3><a href="#">But I must explain to you how all</a></h3>
                <div class="meta"><span class="date">24 Dec, 2018</span><span class="author"><a href="#">Michael Ron</a></span><span class="comments">02 Comments</span></div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release ...</p>
                <a href="#" class="button primary-bg">Read More</a>
                <div class="categories">
                  <a href="#">Marketing</a>
                  <a href="#">SEO</a>
                </div>
              </div>
            </article>
            <article class="post-list">
              <div class="post-body">
                <h3><a href="#">But I must explain to you how all</a></h3>
                <div class="meta"><span class="date">24 Dec, 2018</span><span class="author"><a href="#">Michael Ron</a></span><span class="comments">02 Comments</span></div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release ...</p>
                <a href="#" class="button primary-bg">Read More</a>
                <div class="categories">
                  <a href="#">Marketing</a>
                  <a href="#">SEO</a>
                </div>
              </div>
            </article>
            <article class="post-list">
              <div class="post-thumb">
                <a href="#">
                  <img src="images/blog/post-thumb-1.jpg" class="img-fluid" alt="Blog Post">
                </a>
              </div>
              <div class="post-body">
                <h3><a href="#">But I must explain to you how all</a></h3>
                <div class="meta"><span class="date">24 Dec, 2018</span><span class="author"><a href="#">Michael Ron</a></span><span class="comments">02 Comments</span></div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release ...</p>
                <a href="#" class="button primary-bg">Read More</a>
                <div class="categories">
                  <a href="#">Marketing</a>
                  <a href="#">SEO</a>
                </div>
              </div>
            </article>
            <article class="post-list">
              <div class="post-thumb">
                <div class="widget-video-area">
                  <div data-type="vimeo" data-video-id="200993144"></div>
                </div>
              </div>
              <div class="post-body">
                <h3><a href="#">But I must explain to you how all</a></h3>
                <div class="meta"><span class="date">24 Dec, 2018</span><span class="author"><a href="#">Michael Ron</a></span><span class="comments">02 Comments</span></div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release ...</p>
                <a href="#" class="button primary-bg">Read More</a>
                <div class="categories">
                  <a href="#">Marketing</a>
                  <a href="#">SEO</a>
                </div>
              </div>
            </article>
            <article class="post-list primary-bg">
              <div class="post-body">
                <h3><a href="#">But I must explain to you how all</a></h3>
                <div class="meta"><span class="date">24 Dec, 2018</span><span class="author"><a href="#">Michael Ron</a></span><span class="comments">02 Comments</span></div>
                <a href="#" class="link"><i class="fas fa-link"></i></a>
                <div class="categories">
                  <a href="#">Marketing</a>
                  <a href="#">SEO</a>
                </div>
              </div>
            </article>
            <div class="pagination-list">
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
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <aside class="widget widget_search">
                <form action="#">
                  <input type="text" placeholder="Search">
                  <button><i class="fas fa-search"></i></button>
                </form>
              </aside>
              <aside class="widget widget_about">
                <img src="images/logo-widget.png" class="img-fluid" alt="">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  Nam libero tempore, cum soluta nobis</p>
                <a href="#">View Details<i class="fas fa-chevron-circle-right"></i></a>
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
                        <img src="images/blog/recent-entry-1.png" class="img-responsive" alt="">
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
                        <img src="images/blog/recent-entry-1.png" class="img-responsive" alt="">
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
                        <img src="images/blog/recent-entry-1.png" class="img-responsive" alt="">
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
          </div>
        </div>
      </div>
    </div>
    <!-- Blog End -->
@endsection