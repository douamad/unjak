
@extends('front.layouts.master')
@section('content')
    <div class="col-md-8 pull-left">
        <div class="single-blog-post">
            <div class="img-box">
                <img src="img/blog-page/2.jpg" alt="">
            </div>
            <div class="content-box">
                <div class="date-box">
                    <div class="inner">
                        <div class="date">
                            <b>{{  Carbon\Carbon::parse($post->created_at)->format('d')  }}</b>
                            {{  Carbon\Carbon::parse($post->created_at)->format('M')  }}
                        </div>
                        <div class="comment">
                            <i class="flaticon-interface-1"></i> {{ count($comments) }}
                        </div>
                    </div>
                </div>
                <div class="content">
                    <a href="#"><h3>{{ $post->title }}</h3></a>
                    {{$post->body}}
                    <div class="bottom-box clearfix">
                        <span class="pull-left">Tag: <a href="#">child, charity</a></span>
                        <ul class="pull-right share">
                            <li><span>Share: </span></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="admin-info">
            <div class="img-box">
                <div class="inner-box">
                    <img src="img/blog-page/admin.jpg" alt="Avatar de {{ $post->author->prenom }} {{ $post->author->nom }}, membre UNJAK"/>
                </div>
            </div>
            <div class="content">
                <h3>{{ $post->author->prenom }} {{ $post->author->nom }}</h3>
                <p>{{ $post->author->bio }}</p>
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="comment-box">
            <div class="title">
                @if(count($comments) > 0)
                    <h2>{{ count($comments) }} Commentaires</h2>
                @else
                    <h2>Soyez le premier à commenter ce blog</h2>
                @endif
            </div>
            @foreach($comments as $comment)
                <div class="single-comment-box">
                <div class="img-box">
                    <div class="inner-box">
                        <img src="img/blog-page/comment1.jpg" alt="Avatar de {{ $post->author->prenom }} {{ $post->author->nom }}, membre UNJAK">
                    </div>
                </div>
                <div class="content-box">
                    <h3>{{ $comment->author->prenom }} {{ $comment->author->nom }}</h3>
                    <div class="meta-box clearfix">
                        <span class="pull-left">{{  Carbon\Carbon::parse($post->created_at)->format('d M Y à H:m')  }}</span>
                        <a href="#" class="reply pull-right">répondre</a>
                    </div>
                    <p>{{ $comment->body }}</p>

                </div>
            </div>
            @endforeach

        </div>

        <div class="comment-form contact-content">
            <h2>Faire un commentaire</h2>
            <form action="{{ url('articles/commentaires/ajouter') }} " class="contact-form row" id="contact-page-contact-form">
                <div class="col-md-12">
                </div>
                <div class="col-md-12">
                    <textarea name="message" placeholder="Message" cols="30" rows="3"></textarea>
                </div>
                <button class="btn btn-default" type="submit">Envoyer Commentaire</button>
            </form>
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
                                <img src="img/blog-page/s3.jpg" alt="">
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
                                <img src="img/blog-page/s4.jpg" alt="">
                            </div>
                        </div>
                        <div class="content-box">
                            <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>
                            <span>17 jun, 2015</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="single-sidebar-widget archive">
                <h3 class="title">Archive</h3>
                <ul>
                    <li><a href="#">October 2015</a></li>
                    <li><a href="#">November 2015</a></li>
                    <li><a href="#">December 2015</a></li>
                    <li><a href="#">January 2016</a></li>
                    <li><a href="#">February 2016</a></li>
                </ul>
            </div>
            <div class="single-sidebar-widget tags">
                <h3 class="title">Keywords</h3>
                <ul>
                    <li><a href="#">Child</a></li>
                    <li><a href="#">Charity</a></li>
                    <li><a href="#">Sponsorship</a></li>
                    <li><a href="#">Volunteers</a></li>
                    <li><a href="#">Feed</a></li>
                </ul>
            </div>
        </div>
    </div>


@endsection