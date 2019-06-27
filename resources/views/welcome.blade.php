<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Viral Story - Viral News Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Breaking News Area -->
                            <div class="top-breaking-news-area">
                                <div id="breakingNewsTicker" class="ticker">
                                    <ul class="headline">
                                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                        <li><a href="#">Welcome to Colorlib Family.</a></li>
                                        <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Social Info Area-->
                            <div class="top-social-info-area">
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="viral-news-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="viralnewsNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt="Logo"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul class="up-menu">
                                {{-- API Front Menu --}}
                                </ul>

                                <!-- Search Button -->
                                <div class="search-btn">
                                    <i id="searchbtn" class="fa fa-search" aria-hidden="true"></i>
                                </div>

                                <!-- Search Form -->
                                <div class="viral-search-form">
                                    <form id="search" action="#" method="get">
                                        <input type="text" name="search-terms" placeholder="Enter your keywords ...">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>

                                <!-- Video Post Button -->
                                <div class="add-post-button">
                                    <button id="add-post-btn" class="btn add-post-btn" >Login</button>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="row">
                {{-- API Front Top --}}
                <div class="col-12 top-news"></div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Welcome Slide Area Start ##### -->
    <div class="welcome-slide-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="welcome-slides owl-carousel">

                        <!-- Single Welcome Slide -->
                        <div class="single-welcome-slide">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-8">
                                    <!-- Welcome Post -->
                                    <div class="welcome-post">
                                        <img src="img/bg-img/bg1.jpg" alt="">
                                        <div class="post-content" data-animation="fadeInUp" data-duration="500ms">
                                            <a href="#" class="tag">Travel</a>
                                            <a href="#" class="post-title">10 Tips to travel in style for less</a>
                                            <p>1 day ago</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="welcome-posts--">
                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="img/bg-img/bg2.jpg" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">
                                                <a href="#" class="tag tag-2">Celebs</a>
                                                <a href="#" class="post-title">Superstar spoted with new boyfriend</a>
                                                <p>1 day ago</p>
                                            </div>
                                        </div>

                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="img/bg-img/bg3.jpg" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="750ms" data-duration="500ms">
                                                <a href="#" class="tag tag-3">4 Fun</a>
                                                <a href="#" class="post-title">Festival looks for all the party people</a>
                                                <p>1 day ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Single Welcome Slide -->
                        <div class="single-welcome-slide">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-8">
                                    <!-- Welcome Post -->
                                    <div class="welcome-post">
                                        <img src="img/bg-img/bg1.jpg" alt="">
                                        <div class="post-content" data-animation="fadeInUp" data-duration="500ms">
                                            <a href="#" class="tag">Travel</a>
                                            <a href="#" class="post-title">10 Tips to travel in style for less</a>
                                            <p>1 day ago</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="welcome-posts--">
                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="img/bg-img/bg2.jpg" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">
                                                <a href="#" class="tag tag-2">Celebs</a>
                                                <a href="#" class="post-title">Superstar spoted with new boyfriend</a>
                                                <p>1 day ago</p>
                                            </div>
                                        </div>

                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="img/bg-img/bg3.jpg" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="750ms" data-duration="500ms">
                                                <a href="#" class="tag tag-3">4 Fun</a>
                                                <a href="#" class="post-title">Festival looks for all the party people</a>
                                                <p>1 day ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Slide Area End ##### -->

    <!-- ##### Blog Post Area Start ##### -->
    <div class="viral-story-blog-post section-padding-0-50" id="blog">
        <div class="container">
            <div class="row">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">

                    {{-- API Front Article --}}
                    <div class="row article-post"></div>

                    <div class="row">
                        <div class="col-12">
                            <div class="viral-news-pagination">
                                <nav aria-label="Page navigation example">
                                    <button class="add-post-btn" href="#" style="width: 100%">
                                        <strong>Load more</strong>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget mb-70">
                            <h4>Sign up to <br>our newsletter</h4>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>

                        <!-- Trending Articles Widget -->
                        <div class="treading-articles-widget mb-70 trending">
                            <h4>Trending Articles</h4>
                            {{-- API Front Trending --}}
                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget mb-70">
                            <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                        </div>

                        <!-- Latest Comments -->
                        <div class="latest-comments-widget">
                            <h4>Latest Comments</h4>

                            <!-- Single Comment Widget -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail">
                                    <img src="img/bg-img/t1.jpg" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#"><span>Jamie Smith</span> on Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comment Widget -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail">
                                    <img src="img/bg-img/t2.jpg" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#"><span>Tania Heffner</span> on Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comment Widget -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail">
                                    <img src="img/bg-img/t3.jpg" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#"><span>Sandy Doe</span> on Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Post Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget-area">
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <!-- Footer Nav -->
                            <div class="footer-nav">
                                <ul>
                                    <li class="active"><a href="#">Top 10</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Funny</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Celebs</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Submit a video</a></li>
                                    <li><a href="#">Don’tMiss</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget">
                            <h4>Sign up to <br>our newsletter</h4>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget-area latest">
                            <!-- Widget Title -->
                            <h4 class="widget-title">Latest articles</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/jquery-ias.min.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>

    <script type="text/javascript">
        var ias = jQuery.ias({
            container:  '#container',
            item:       '.post',
            pagination: '#pagination',
            next:       '#pagination a.next'
        });

        ias.extension(new IASSpinnerExtension());
        ias.extension(new IASTriggerExtension({offset: 2}));
        ias.extension(new IASNoneLeftExtension({text: "You reached the end"}));
        ias.extension(new IASPagingExtension());
        ias.extension(new IASHistoryExtension({prev: '#pagination a.prev'}));
    </script>
    <script>

    </script>
</body>

</html>
