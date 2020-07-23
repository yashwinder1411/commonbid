<!DOCTYPE html>
<html lang="en">
<head>

    <title>Reverse Auction</title>
    <!--

    Known Template

    https://templatemo.com/tm-516-known

    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>


<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="#" class="navbar-brand">Reverse Bid</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="#top" class="smoothScroll">Home</a></li>
                <li><a href="#bid" class="smoothScroll">Bid</a></li>
{{--                <li><a href="#team" class="smoothScroll">Our Teachers</a></li>--}}
{{--                <li><a href="#courses" class="smoothScroll">Courses</a></li>--}}
{{--                <li><a href="#testimonial" class="smoothScroll">Reviews</a></li>--}}
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-phone"></i> +91 9818930288</a></li>
            </ul>
        </div>

    </div>
</section>


<!-- HOME -->
<section id="home">
    <div class="row">

        <div class="owl-carousel owl-theme home-slider">
            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Bid what ever you want</h1>
                            <h3>We will connect you with the globe to get your wished product.</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-second">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Sellers with fine products are here to serve you</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-third">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Avoid huge product MRP.</h1>
                            <h2 style="color: whitesmoke">Buy products at the cheapest prices.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FEATURE -->
<section id="feature">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-3">
                <div class="feature-thumb">
                    <span>01</span>
                    <h3>Select your product.</h3>
                    <p>First select the appropriate product from the list that you wish to buy.</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="feature-thumb">
                    <span>02</span>
                    <h3>Bid on it.</h3>
                    <p>Bid an amount that you feel is reasonable for that product.</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="feature-thumb">
                    <span>03</span>
                    <h3>Sellers Responds.</h3>
                    <p>Sellers with relevant product and deals will get in touch with you.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="feature-thumb">
                    <span>04</span>
                    <h3>Buy the Best.</h3>
                    <p>You can now buy from the numerous options that you think is the best deal for you.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section id="bid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Bid on Product<small>Get your perfect product</small></h2>
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div>
                    <label for="product_cat">Choose a product: </label>
                    <select name="product_cat" id="product_cat" onchange="updateOptions()">
                        <option value="ac">Air Conditioners</option>
                        <option value="tv">TV</option>
                        <option value="mob">Mobile</option>
                    </select>
                </div>
                <br>
                <div id="ac_option">
                    <label for="ac_brand">Brand: </label>
                    <select name="ac_brand" id="ac_brand">
                        <option value="voltas">Voltas</option>
                        <option value="lg">LG</option>
                        <option value="samsung">Samsung</option>
                        <option value="daikin">Diakin</option>
                        <option value="blue_star">Blue Star</option>
                    </select>
                    &nbsp;&nbsp;
                    <label for="ac_type">Type: </label>
                    <select name="ac_type" id="ac_type">
                        <option value="split">Split</option>
                        <option value="window">Window</option>
                    </select>
                    &nbsp;&nbsp;
                    <label for="ac_power">Ton: </label>
                    <select name="ac_power" id="ac_power">
                        <option value="1">1</option>
                        <option value="1.2">1.2</option>
                        <option value="1.5">1.5</option>
                        <option value="2.0">2.0</option>
                    </select>

                </div>
                <div style="display: none" id="tv_option">
                    <label for="tv_brand">Brand: </label>
                    <select name="tv_brand" id="tv_brand">
                        <option value="LG">LG</option>
                        <option value="samsung">Samsung</option>
                        <option value="tcl">TCL</option>
                        <option value="onida">Onida</option>
                        <option value="vu">VU</option>
                    </select>
                    &nbsp;&nbsp;
                    <label for="tv_type">Type: </label>
                    <select name="tv_type" id="tv_type">
                        <option value="split">LED</option>
                        <option value="window">LCD</option>
                    </select>
                    &nbsp;&nbsp;
                    <label for="tv_size">Size: </label>
                    <select name="tv_size" id="tv_size">
                        <option value="1">32</option>
                        <option value="1.2">43</option>
                        <option value="1.5">55</option>
                        <option value="2.0">65</option>
                    </select>


                </div>
                <div style="display: none" id="mob_option">
                    <label for="mob_brand">Brand: </label>
                    <select name="mob_brand" id="mob_brand">
                        <option value="apple">Apple</option>
                        <option value="samsung">Samsung</option>
                        <option value="one_plus">One Plus</option>
                        <option value="moto">Motorola</option>
                    </select>
                </div>
                <br><br>
            </div>

                <label>Price: </label> <input required id="price" type="number">
                <button onclick="placeBid()">Place bid</button>

        </div>
    </div>
</section>


{{--<!-- TEAM -->--}}
{{--<section id="team">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-md-12 col-sm-12">--}}
{{--                <div class="section-title">--}}
{{--                    <h2>Teachers <small>Meet Professional Trainers</small></h2>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="team-thumb">--}}
{{--                    <div class="team-image">--}}
{{--                        <img src="{{asset('images/author-image1.jpg')}}" class="img-responsive" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="team-info">--}}
{{--                        <h3>Mark Wilson</h3>--}}
{{--                        <span>I love Teaching</span>--}}
{{--                    </div>--}}
{{--                    <ul class="social-icon">--}}
{{--                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>--}}
{{--                        <li><a href="#" class="fa fa-twitter"></a></li>--}}
{{--                        <li><a href="#" class="fa fa-instagram"></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="team-thumb">--}}
{{--                    <div class="team-image">--}}
{{--                        <img src="{{asset('images/author-image2.jpg')}}" class="img-responsive" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="team-info">--}}
{{--                        <h3>Catherine</h3>--}}
{{--                        <span>Education is the key!</span>--}}
{{--                    </div>--}}
{{--                    <ul class="social-icon">--}}
{{--                        <li><a href="#" class="fa fa-google"></a></li>--}}
{{--                        <li><a href="#" class="fa fa-instagram"></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="team-thumb">--}}
{{--                    <div class="team-image">--}}
{{--                        <img src="{{asset('images/author-image3.jpg')}}" class="img-responsive" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="team-info">--}}
{{--                        <h3>Jessie Ca</h3>--}}
{{--                        <span>I like Online Courses</span>--}}
{{--                    </div>--}}
{{--                    <ul class="social-icon">--}}
{{--                        <li><a href="#" class="fa fa-twitter"></a></li>--}}
{{--                        <li><a href="#" class="fa fa-envelope-o"></a></li>--}}
{{--                        <li><a href="#" class="fa fa-linkedin"></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="team-thumb">--}}
{{--                    <div class="team-image">--}}
{{--                        <img src="{{asset('images/author-image4.jpg')}}" class="img-responsive" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="team-info">--}}
{{--                        <h3>Andrew Berti</h3>--}}
{{--                        <span>Learning is fun</span>--}}
{{--                    </div>--}}
{{--                    <ul class="social-icon">--}}
{{--                        <li><a href="#" class="fa fa-twitter"></a></li>--}}
{{--                        <li><a href="#" class="fa fa-google"></a></li>--}}
{{--                        <li><a href="#" class="fa fa-behance"></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


{{--<!-- Courses -->--}}
{{--<section id="courses">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-md-12 col-sm-12">--}}
{{--                <div class="section-title">--}}
{{--                    <h2>Popular Courses <small>Upgrade your skills with newest courses</small></h2>--}}
{{--                </div>--}}

{{--                <div class="owl-carousel owl-theme owl-courses">--}}
{{--                    <div class="col-md-4 col-sm-4">--}}
{{--                        <div class="item">--}}
{{--                            <div class="courses-thumb">--}}
{{--                                <div class="courses-top">--}}
{{--                                    <div class="courses-image">--}}
{{--                                        <img src="{{asset('images/courses-image1.jpg')}}" class="img-responsive" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="courses-date">--}}
{{--                                        <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>--}}
{{--                                        <span><i class="fa fa-clock-o"></i> 7 Hours</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="courses-detail">--}}
{{--                                    <h3><a href="#">Social Media Management</a></h3>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                                </div>--}}

{{--                                <div class="courses-info">--}}
{{--                                    <div class="courses-author">--}}
{{--                                        <img src="{{asset('images/author-image1.jpg')}}" class="img-responsive" alt="">--}}
{{--                                        <span>Mark Wilson</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="courses-price">--}}
{{--                                        <a href="#"><span>USD 25</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-sm-4">--}}
{{--                        <div class="item">--}}
{{--                            <div class="courses-thumb">--}}
{{--                                <div class="courses-top">--}}
{{--                                    <div class="courses-image">--}}
{{--                                        <img src="{{asset('images/courses-image2.jpg')}}" class="img-responsive" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="courses-date">--}}
{{--                                        <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>--}}
{{--                                        <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="courses-detail">--}}
{{--                                    <h3><a href="#">Graphic & Web Design</a></h3>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                                </div>--}}

{{--                                <div class="courses-info">--}}
{{--                                    <div class="courses-author">--}}
{{--                                        <img src="{{asset('images/author-image2.jpg')}}" class="img-responsive" alt="">--}}
{{--                                        <span>Jessica</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="courses-price">--}}
{{--                                        <a href="#"><span>USD 80</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-sm-4">--}}
{{--                        <div class="item">--}}
{{--                            <div class="courses-thumb">--}}
{{--                                <div class="courses-top">--}}
{{--                                    <div class="courses-image">--}}
{{--                                        <img src="{{asset('images/courses-image3.jpg')}}" class="img-responsive" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="courses-date">--}}
{{--                                        <span><i class="fa fa-calendar"></i> 15 / 8 / 2018</span>--}}
{{--                                        <span><i class="fa fa-clock-o"></i> 6 Hours</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="courses-detail">--}}
{{--                                    <h3><a href="#">Marketing Communication</a></h3>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                                </div>--}}

{{--                                <div class="courses-info">--}}
{{--                                    <div class="courses-author">--}}
{{--                                        <img src="{{asset('images/author-image3.jpg')}}" class="img-responsive" alt="">--}}
{{--                                        <span>Catherine</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="courses-price free">--}}
{{--                                        <a href="#"><span>Free</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-sm-4">--}}
{{--                        <div class="item">--}}
{{--                            <div class="courses-thumb">--}}
{{--                                <div class="courses-top">--}}
{{--                                    <div class="courses-image">--}}
{{--                                        <img src="{{asset('images/courses-image4.jpg')}}" class="img-responsive" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="courses-date">--}}
{{--                                        <span><i class="fa fa-calendar"></i> 10 / 8 / 2018</span>--}}
{{--                                        <span><i class="fa fa-clock-o"></i> 8 Hours</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="courses-detail">--}}
{{--                                    <h3><a href="#">Summer Kids</a></h3>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                                </div>--}}

{{--                                <div class="courses-info">--}}
{{--                                    <div class="courses-author">--}}
{{--                                        <img src="{{asset('images/author-image1.jpg')}}" class="img-responsive" alt="">--}}
{{--                                        <span>Mark Wilson</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="courses-price">--}}
{{--                                        <a href="#"><span>USD 45</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-sm-4">--}}
{{--                        <div class="item">--}}
{{--                            <div class="courses-thumb">--}}
{{--                                <div class="courses-top">--}}
{{--                                    <div class="courses-image">--}}
{{--                                        <img src="{{asset('images/courses-image5.jpg')}}" class="img-responsive" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="courses-date">--}}
{{--                                        <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>--}}
{{--                                        <span><i class="fa fa-clock-o"></i> 10 Hours</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="courses-detail">--}}
{{--                                    <h3><a href="#">Business &amp; Management</a></h3>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                                </div>--}}

{{--                                <div class="courses-info">--}}
{{--                                    <div class="courses-author">--}}
{{--                                        <img src="{{asset('images/author-image2.jpg')}}" class="img-responsive" alt="">--}}
{{--                                        <span>Jessica</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="courses-price free">--}}
{{--                                        <a href="#"><span>Free</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--</section>--}}


{{--<!-- TESTIMONIAL -->--}}
{{--<section id="testimonial">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-md-12 col-sm-12">--}}
{{--                <div class="section-title">--}}
{{--                    <h2>Student Reviews <small>from around the world</small></h2>--}}
{{--                </div>--}}

{{--                <div class="owl-carousel owl-theme owl-client">--}}
{{--                    <div class="col-md-4 col-sm-4">--}}
{{--                        <div class="item">--}}
{{--                            <div class="tst-image">--}}
{{--                                <img src="{{asset('images/tst-image1.jpg')}}" class="img-responsive" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="tst-author">--}}
{{--                                <h4>Jackson</h4>--}}
{{--                                <span>Shopify Developer</span>--}}
{{--                            </div>--}}
{{--                            <p>You really do help young creative minds to get quality education and professional job--}}
{{--                                search assistance. I’d recommend it to everyone!</p>--}}
{{--                            <div class="tst-rating">--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-sm-4">--}}
{{--                        <div class="item">--}}
{{--                            <div class="tst-image">--}}
{{--                                <img src="{{asset('images/tst-image2.jpg')}}" class="img-responsive" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="tst-author">--}}
{{--                                <h4>Camila</h4>--}}
{{--                                <span>Marketing Manager</span>--}}
{{--                            </div>--}}
{{--                            <p>Trying something new is exciting! Thanks for the amazing law course and the great teacher--}}
{{--                                who was able to make it interesting.</p>--}}
{{--                            <div class="tst-rating">--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-sm-4">--}}
{{--                        <div class="item">--}}
{{--                            <div class="tst-image">--}}
{{--                                <img src="{{asset('images/tst-image3.jpg')}}" class="img-responsive" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="tst-author">--}}
{{--                                <h4>Barbie</h4>--}}
{{--                                <span>Art Director</span>--}}
{{--                            </div>--}}
{{--                            <p>Donec erat libero, blandit vitae arcu eu, lacinia placerat justo. Sed sollicitudin quis--}}
{{--                                felis vitae hendrerit.</p>--}}
{{--                            <div class="tst-rating">--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-sm-4">--}}
{{--                        <div class="item">--}}
{{--                            <div class="tst-image">--}}
{{--                                <img src="{{asset('images/tst-image4.jpg')}}" class="img-responsive" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="tst-author">--}}
{{--                                <h4>Andrio</h4>--}}
{{--                                <span>Web Developer</span>--}}
{{--                            </div>--}}
{{--                            <p>Nam eget mi eu ante faucibus viverra nec sed magna. Vivamus viverra sapien ex, elementum--}}
{{--                                varius ex sagittis vel.</p>--}}
{{--                            <div class="tst-rating">--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--</section>--}}


<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="" method="post">
                    <div class="section-title">
                        <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">

                        <input type="email" class="form-control" placeholder="Enter email address" name="email"
                               required="">

                        <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message"
                                  required=""></textarea>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <input type="submit" class="form-control" name="send message" value="Send Message">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="{{asset('images/contact-image.jpg')}}" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>


<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Headquarter</h2>
                    </div>
                    <address>
                        <p>1800 dapibus a tortor pretium,<br> Integer nisl dui, ABC 12000</p>
                    </address>

                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>

                    <div class="copyright-text">
                        <p>Copyright &copy; 2019 Company Name</p>

                        <p>Design:www.dynamb.com</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Contact Info</h2>
                    </div>
                    <address>
                        <p>+91 9818930288, +91 9818930288</p>
                        <p><a href="mailto:yashwinder@dynamb.com">yashwinder@dynamb.com</a></p>
                    </address>

                    <div class="footer_menu">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Investor</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Refund Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="footer-info newsletter-form">
                    <div class="section-title">
                        <h2>Newsletter Signup</h2>
                    </div>
                    <div>
                        <div class="form-group">
                            <form action="#" method="get">
                                <input type="email" class="form-control" placeholder="Enter your email" name="email"
                                       id="email" required="">
                                <input type="submit" class="form-control" name="submit" id="form-submit"
                                       value="Send me">
                            </form>
                            <span><sup>*</sup> Please note - we do not spam your email.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>


<!-- SCRIPTS -->
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
