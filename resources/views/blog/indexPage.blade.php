@extends('layout.mainlayout')

@section('page-content')
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span>Resources</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 aside">
                    <div class="blog-posts">
                        <div class="blog-post">
                            <div class="blog-post-info">
                                <div class="post-date ml-2 mb-2 ml-lg-0 mb-lg-0">05<span>OCT</span></div>
                                <div>
                                    <h2 class="post-title"><a href="/blog_page">The Truth About Teaching
                                            English in China</a></h2>
                                    <div class="post-meta">
                                        <div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
                                        <div class="post-meta-social">
                                            <a href="#"><i class="icon-facebook-logo"></i></a>
                                            <a href="#"><i class="icon-twitter-logo"></i></a>
                                            <a href="#"><i class="icon-youtube-logo"></i></a>
                                            <a href="#"><i class="icon-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-image">
                                <a href="/blog_page"><img src="../images/blog/blog-post-img-1.jpg"
                                        alt=""></a>
                            </div>
                            <div class="post-teaser">China is a country shrouded in mystery for many foreigners,
                                especially those from far-off countries like the USA, Canada, and the United
                                Kingdom. Many prospective teachers who reach out to us are a little wary of teaching
                                in China because there are some common misconceptions about what it’s really like to
                                teach there. Well, we’re here to set the record straight. Read on to discover some
                                of the misconceptions people have about teaching English in China, and find out the
                                truth for yourself!</div>
                            <div class="mt-3 mt-lg-4"><a href="/blog_page"
                                    class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read
                                        more</span><i class="icon-right-arrow"></i></a></div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <ul class="pagination justify-content-center mt-5 mt-lg-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><span class="page-link"><i class="icon-right-arrow"></i></span></li>
                    </ul>
                </div>
                <div class="col-lg-3 aside-left mt-5 mt-lg-0">
                    <div class="side-block">
                        <form action="#" class="content-search d-flex">
                            <div class="input-wrap">
                                <input type="text" class="form-control" placeholder="Search ...">
                            </div>
                            <button type="submit"><i class="icon-search"></i></button>
                        </form>
                    </div>
                    <div class="side-block">
                        <h3 class="side-block-title">Recent Posts</h3>
                        <div class="blog-post post-preview">
                            <div class="post-image">
                                <a href="/blog_page"><img src="../images/blog/blog-post-featured-1.jpg"
                                        alt=""></a>
                            </div>
                            <div>
                                <h4 class="post-title"><a href="/blog_page">Recent post 1</a></h4>
                                <div class="post-meta">
                                    <div class="post-meta-author text-nowrap">by <a href="#"><i>admin</i></a></div>
                                    <div class="post-meta-date text-nowrap"><i class="icon icon-clock3"></i>05 Oct,
                                        2019</div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post post-preview">
                            <div class="post-image">
                                <a href="/blog_page"><img src="../images/blog/blog-post-featured-2.jpg"
                                        alt=""></a>
                            </div>
                            <div>
                                <h4 class="post-title"><a href="/blog_page">Recent post 2</a></h4>
                                <div class="post-meta">
                                    <div class="post-meta-author text-nowrap">by <a href="#"><i>admin</i></a></div>
                                    <div class="post-meta-date text-nowrap"><i class="icon icon-clock3"></i>05 Oct,
                                        2019</div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post post-preview">
                            <div class="post-image">
                                <a href="/blog_page"><img src="../images/blog/blog-post-featured-3.jpg"
                                        alt=""></a>
                            </div>
                            <div>
                                <h4 class="post-title"><a href="/blog_page">Recent post 3</a></h4>
                                <div class="post-meta">
                                    <div class="post-meta-author text-nowrap">by <a href="#"><i>admin</i></a></div>
                                    <div class="post-meta-date text-nowrap"><i class="icon icon-clock3"></i>05 Oct,
                                        2019</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

@section('footer-section')
    @include('layout.footer')
@endsection