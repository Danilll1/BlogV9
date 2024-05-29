<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Markedia - Marketing Blog Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{ asset('assets/markedie/css/bootstrap.css') }}" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="{{ asset('assets/markediecss/font-awesome.min.css') }}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset('assets/markedie/style.css') }}" rel="stylesheet">

<!-- Animate styles for this template -->
<link href="{{ asset('assets/markedie/css/animate.css') }}" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="{{ asset('assets/markedie/css/responsive.css') }}" rel="stylesheet">

<!-- Colors for this template -->
<link href="{{ asset('assets/markedie/css/colors.css') }}" rel="stylesheet">

<!-- Version Marketing CSS for this template -->
<link href="{{ asset('assets/markedie/css/version/marketing.css') }}" rel="stylesheet">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
                    <!--==============================================Навбар=================================================-->
                    @include('admin.layouts.navbar')
                    
            <div class="page-title db">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <h2>Search: {{ $s }}</h2>
                        </div><!-- end cot-->
                        <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Search</li>
                            </ol>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end page-title -->
            <section class="section lb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                            @include('admin.layouts.sidebar')

                        </div><!-- end col -->

                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="page-wrapper">
                                <div class="blog-custom-build">
                                    <div class="blog-box wow fadeIn">
                                        @if ($posts->count())
                                            @foreach ($posts as $post)
                                                <div class="blog-box wow fadeIn">
                                                    <div class="post-media">
                                                        <a href="{{ route('posts.single', ['slug' => $post->slug]) }}"
                                                            title="">
                                                            <img src="{{ asset('uploads/' . $post->thumbnail) }}"
                                                                alt="" class="img-fluid">
                                                            <div class="hovereffect">
                                                                <span></span>
                                                            </div>
                                                            <!-- end hover -->
                                                        </a>
                                                    </div>
                                                    <!-- end media -->
                                                    <div class="blog-meta big-meta text-center">
                                                        <div class="post-sharing">
                                                            <ul class="list-inline">
                                                            </ul>
                                                        </div><!-- end post-sharing -->
                                                        <h4><a href="{{ route('posts.single', ['slug' => $post->slug]) }}"
                                                                title="">{{ $post->title }}</a></h4>
                                                        {!! $post->description !!}
                                                        <small><a
                                                                href="{{ route('categories.single', ['slug' => $post->category->slug]) }}"
                                                                title="">{{ $post->category->slug }}</a></small>
                                                        <small><a href=""
                                                                title="">{{ $post->getPostDate() }}</a></small>
                                                        <small><a href="#" title=""><i class="fa fa-eye"></i>
                                                                {{ $post->views }}</a></small>
                                                    </div><!-- end meta -->
                                                </div><!-- end blog-box -->
                                            @endforeach
                                        @else
                                            По вашему запросу ничего не найдено...
                                        @endif

                                        <hr class="invis">


                                    </div>
                                </div>

                                <hr class="invis">

                                <div class="row">
                                    <div class="col-md-12">
                                        <nav aria-label="Page navigation">
                                            {{ $posts->appends(['s' => request()->s])->links() }}
                                        </nav>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end container -->
            </section>

            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="marketing-single.html"
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/small_04.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                                <small>12 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="marketing-single.html"
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/small_05.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                                <small>11 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="marketing-single.html"
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="upload/small_06.jpg" alt=""
                                                    class="img-fluid float-left">
                                                <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                                <small>07 Jan, 2016</small>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->
                        </div><!-- end col -->

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <h2 class="widget-title">Popular Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="marketing-single.html"
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/small_01.jpg" alt=""
                                                    class="img-fluid float-left">
                                                <h5 class="mb-1">Banana-chip chocolate cake recipe with customs</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>

                                        <a href="marketing-single.html"
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/small_02.jpg" alt=""
                                                    class="img-fluid float-left">
                                                <h5 class="mb-1">10 practical ways to choose organic vegetables</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>

                                        <a href="marketing-single.html"
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="upload/small_03.jpg" alt=""
                                                    class="img-fluid float-left">
                                                <h5 class="mb-1">We are making homemade ravioli, nice and good</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->
                        </div><!-- end col -->

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <h2 class="widget-title">Popular Categories</h2>
                                <div class="link-widget">
                                    <ul>
                                        <li><a href="#">Marketing <span>(21)</span></a></li>
                                        <li><a href="#">SEO Service <span>(15)</span></a></li>
                                        <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                        <li><a href="#">Make Money <span>(22)</span></a></li>
                                        <li><a href="#">Blogging <span>(66)</span></a></li>
                                        <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                        <li><a href="#">Video Tuts <span>(87)</span></a></li>
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <br>
                            <br>
                            <div class="copyright">&copy; Markedia. Design: <a href="http://html.design">HTML Design</a>.
                            </div>
                        </div>
                    </div>
                </div><!-- end container -->
            </footer><!-- end footer -->

            <div class="dmtop">Scroll to Top</div>

        </div><!-- end wrapper -->

        <!-- Core JavaScript ================================================== -->