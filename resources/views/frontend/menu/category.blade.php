@extends('Frontend.main_master')
@section('content')
@section('title')
Artistry Avenue
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- breadcrumb part start-->
<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2>Categories</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!-- Tab content part start -->
<div class="tab-content col-lg-6 float-right">   
        <div class="tab-pane fade mt-5 text-center" role="tabpanel" id="home" aria-labelledby="home-tab">
            <div>
                <div class="product_list">
                    <div>
                        <div class="feature_part_content ">
                            <h2>ART SETS AND KITS</h2>
                            <h6>Starter kits for beginners (drawing, painting, mixed media)</h6>
                            <img src="{{asset('assets/frontend/img/kit1.webp')}}" class="img-fluid" width="70%" alt="#">
                            <h6>Gift sets for special occasions (holiday sets, themed sets)</h6>
                            <img src="{{asset('assets/frontend/img/giftset.jpg')}}" class="img-fluid" width="70%" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade mt-5 text-center" role="tabpanel" id="about" aria-labelledby="about-tab">
            <div>
                <div class="product_list">
                    <div>
                        <div class="feature_part_content">
                            <h2>STORAGE AND ORGANIZATION</h2>
                            <h6>Art supply storage boxes and organizers</h6>
                            <img src="{{asset('assets/frontend/img/organizeer.jpg')}}" class="img-fluid" width="70%" alt="#">
                            <h6>Portfolio cases and art bags for transporting artwork</h6>
                            <img src="{{asset('assets/frontend/img/artbox.jpg')}}" class="img-fluid" width="70%" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade mt-5  text-center" role="tabpanel" id="info" aria-labelledby="info-tab">
            <div>
                <div class="product_list">
                    <div>
                    <div class="feature_part_content">
                            <h2>FINE ART MATERIALS</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6>Sculpting clay</h6>
                                    <img src="{{asset('assets/frontend/img/sculpting clay.jpg')}}" class="img-fluid" alt="#">
                                </div>
                                <div class="col-lg-6">
                                    <h6>Modeling clay</h6>
                                    <img src="{{asset('assets/frontend/img/clay.jpg')}}" class="img-fluid" alt="#">
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6>Pottery wheels and ceramic supplies</h6>
                                    <img src="{{asset('assets/frontend/img/Pottery wheels.jpg')}}" class="img-fluid" alt="#">
                                </div>
                                <div class="col-lg-6">
                                    <h6>Woodworking tools (for art projects)</h6>
                                    <img src="{{asset('assets/frontend/img/giftset.jpg')}}" class="img-fluid" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="tab-pane fade mt-5 text-center" role="tabpanel" id="contact" aria-labelledby="contact-tab">
            <div>
                <div class="product_list">
                    <div>
                        <div class="feature_part_content">
                            <h2>DRAWING TOOLS</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6>Graphite pencils</h6>
                                    <img src="{{asset('assets/frontend/img/pencils.avif')}}" class="img-fluid" width="70%" alt="#">
                                </div>
                                <div class="col-lg-6"> 
                                    <h6>Colored pencils</h6>
                                    <img src="{{asset('assets/frontend/img/coloredpencils.avif')}}" width="80%" class="img-fluid" alt="#">
                                </div>

                            </div>
                            <div class="row">   
                                <div class="col-lg-6">
                                    <h6>Charcoal pencils and sticks</h6>
                                    <img src="{{asset('assets/frontend/img/charcoal.jpg')}}" class="img-fluid" alt="#">
                                </div>
                                <div class="col-lg-6">
                                    <h6>Pastels(soft pastels, oil pastels)</h6>
                                    <img src="{{asset('assets/frontend/img/oilpastel.jpg')}}" class="img-fluid" alt="#">
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Tab content part end -->

<!-- product list part start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product_sidebar">
                    <!-- <div class="single_sedebar">
                        <form action="#">
                            <input type="text" name="#" placeholder="Search keyword">
                            <i class="ti-search"></i>
                        </form>
                    </div> -->
                    <div class="single_sedebar" style="margin-bottom:200px;">
                        <div class="select_option">
                            <div class="select_option_list">Category <i class="right fas fa-caret-down"></i></div>
                            <div class="select_option_dropdown nav nav-tabs">
                                <li class="nav-item" role="presentation">
                                    <a type="button" role="tab" class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" aria-controls="home">Art Sets and Kits</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a type="button" role="tab" class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" aria-controls="about">Storage and Organization</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a type="button" role="tab" class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" aria-controls="info">Fine Art Materials</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a type="button" role="tab" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" aria-controls="contact">Drawing Tools</a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

<!-- client review part here -->
<section class="client_review">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="client_review_slider owl-carousel">
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="{{ asset('assets/frontend/img/profile.avif') }}" alt="#">
                        </div>
                        <p>"Artistry Avenue has the best quality of art accessories."</p>
                        <h5>- Ali Ahmad</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="{{ asset('assets/frontend/img/profile.avif') }}" alt="#">
                        </div>
                        <p>"Artistry Avenue has the best quality and good variety of art accessories."</p>
                        <h5>- Frederic Anderson</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="{{ asset('assets/frontend/img/profile.avif') }}" alt="#">
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
                    <h3>Credibly innovate granular internal or organic sources whereas standards.</h3>
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
                    <img src="{{ asset('assets/frontend/img/icon/feature_icon_1.svg') }}" alt="#">
                    <h4>Credit Card Support</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="{{ asset('assets/frontend/img/icon/feature_icon_2.svg') }}" alt="#">
                    <h4>Online Order</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="{{ asset('assets/frontend/img/icon/feature_icon_3.svg') }}" alt="#">
                    <h4>Free Delivery</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="{{ asset('assets/frontend/img/icon/feature_icon_4.svg') }}" alt="#">
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
                    <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal.</p>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
