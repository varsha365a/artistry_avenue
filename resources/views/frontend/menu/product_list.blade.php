<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistry Avenue - Products </title>
</head>
<body>
        

@extends('Frontend.main_master')
@section('content')
@section('title')
Artistry Avenue
@endsection

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>product list</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->
    
    <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            <form action="#">
                                <input type="text" name="#" placeholder="Search keyword">
                                <i class="ti-search"></i>
                            </form>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Category <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">Art Sets and Kits</a></p>
                                    <p><a href="#">Storage and Organization</a></p>
                                    <p><a href="#">Fine Art Materials</a></p>
                                    <p><a href="#">Drawing Tools</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">Adhesives (glue, tape)</a></p>
                                    <p><a href="#">Scissors and cutting tools</a></p>
                                    <p><a href="#">Decorative papers</a></p>
                                    <p><a href="#">Embellishments</a></p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-8" id="">
                    <div class="product_list">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->
    
    <!-- client review part here -->
    <section class="client_review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client_review_slider owl-carousel">
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{asset('assets/frontend/img/profile.avif')}}" alt="#">
                            </div>
                            <p>"Artistry Avenue has the best quality of art accessories."</p>
                            <h5>- Ali Ahmad</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{asset('assets/frontend/img/profile.avif')}}" alt="#">
                            </div>
                            <p>"Artistry Avenue has the best quality and good variety of art accessories."</p>
                            <h5>- Frederic Anderson</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{asset('assets/frontend/img/profile.avif')}}" alt="#">
                            </div>
                            <p>"Artistry Avenue is the most trusted place to buy artistry products."</p>
                            <h5>- Niklas Asker</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client review part end -->

    <!-- feature part here -->
    <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3>Credibly innovate granular
                        internal or organic sources
                        whereas standards.</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{asset('assets/frontend/img/icon/feature_icon_1.svg')}}" alt="#">
                        <h4>Credit Card Support</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{asset('assets/frontend/img/icon/feature_icon_2.svg')}}" alt="#">
                        <h4>Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{asset('assets/frontend/img/icon/feature_icon_3.svg')}}" alt="#">
                        <h4>Free Delivery</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{asset('assets/frontend/img/icon/feature_icon_4.svg')}}" alt="#">
                        <h4>Product with Gift</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature part end -->

    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Get promotions & updates!</h2>
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Enter your mail">
                            <a href="#" class="btn_1">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->

@endsection
</body>
</html>

