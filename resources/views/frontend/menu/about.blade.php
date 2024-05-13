
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
                            <h2>About</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb part end-->
        
        <!-- product list part start-->
        <section class="about_us padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="about_us_content">
                            <h5>Our Mission</h5>
                            <h3>At Artistry Avenue, our mission is to empower artists with the tools they need to create and innovate. We are committed to providing a curated selection of high-quality art supplies, tools, and materials that inspire creativity and support artistic expression. Through our e-com
                                merce platform, we aim to cultivate a vibrant community of artists by offering exceptional products, expert guidance, and a seamless shopping experience. Our goal is to be the trusted partner for artists
                                 at every stage of their creative journey, fostering a passion for art and enabling artistic excellence.</h3>
                            <div class="about_us_video">
                                <img src="{{asset('assets/frontend/img/artist.avif')}}" alt="#" class="img-fluid">
                                <a class="about_video_icon popup-youtube" href="https://www.youtube.com/playlist?list=PLxJozjhh-Y9E3SahMcxqawVhy9uIqNJ_f"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product list part end-->

        <!-- feature part here -->
        <section class="feature_part section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="feature_part_tittle">
                            <h3>Inspiring Every Brushstroke to unleash Your Inner Artist</h3>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="feature_part_content">
                            <p>Whether you're a seasoned professional or an aspiring hobbyist, Artistry Avenue is your go-to destination for all things art-related. Our user-friendly website features intuitive navigation and helpful guides to assist artists in finding the perfect tools for their projects.</p>
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

        <!-- subscribe part here -->
        <section class="subscribe_part section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="subscribe_part_content">
                            <h2>Get promotions & updates!</h2>
                            <p>Join our community of creative individuals and share your artwork, ideas, and experiences through our online forums and social media channels.</p>
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

