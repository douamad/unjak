
@extends('front.layouts.master')
@section('content')
    <div class="col-md-8 pull-left">
        <div class="row">
            @foreach( $posts as $post )
                <div class="col-sm-6">
                    <div class="single-blog-post">
                        <div class="img-box">
                            <img src="{{ asset('img/d4-weather.jpg') }}" alt="">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li><a href="{{ url('articles/'.$post->slug) }}"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="date-box">
                                <div class="inner">
                                    <div class="date">
                                        <b>24</b>
                                        apr
                                    </div>
                                    <div class="comment">
                                        <i class="flaticon-interface-1"></i> 8
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <a href="{{ url('articles/'.$post->slug) }}"><h3>{{ $post->title }}</h3></a>
                                <p>{!! str_limit($post->body, $limit = 200, $end = '....... <a href='.url("articles/".$post->slug).'>Lire plus</a>') !!}</p>
                                <span>Tag: <a href="blog-details.html">child, charity</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!--Pagination-->
        <div class="pager-outer clearfix mt_30 mb_0">
            <ul class="pagination mb_0">
                <li><a href="#">Prev</a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">-</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-4 pull-right">
        <div class="side-bar-widget">
            <div class="single-sidebar-widget search">
                <form action="#">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="single-sidebar-widget category">
                <h3 class="title">Catagories</h3>
                <ul>
                    <li><a href="#">Child</a></li>
                    <li><a href="#">Charity</a></li>
                    <li><a href="#">Sponsorship</a></li>
                    <li><a href="#">Volunteers</a></li>
                    <li><a href="#">Feed</a></li>
                </ul>
            </div>
            <div class="single-sidebar-widget popular-post">
                <h3 class="title">Popular Posts</h3>
                <ul>
                    <li>
                        <div class="img-box">
                            <div class="inner-box">
                                <img src="img/blog-page/s1.jpg" alt="">
                            </div>
                        </div>
                        <div class="content-box">
                            <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>
                            <span>17 jun, 2015</span>
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <div class="inner-box">
                                <img src="img/blog-page/s2.jpg" alt="">
                            </div>
                        </div>
                        <div class="content-box">
                            <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>
                            <span>17 jun, 2015</span>
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <div class="inner-box">
                                <img src="{{ asset('img/d4-weather.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="content-box">
                            <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>
                            <span>17 jun, 2015</span>
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <div class="inner-box">
                                <img src="{{ asset('img/d4-weather.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="content-box">
                            <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>
                            <span>17 jun, 2015</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


@endsection