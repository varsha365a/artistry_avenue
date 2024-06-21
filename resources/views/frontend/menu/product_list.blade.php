@extends('Frontend.main_master')
@section('content')
@section('title')
Artistry Avenue
@endsection

<link rel="stylesheet" href="{{asset('assets/backend/css/styles.min.css')}}" />

<!-- breadcrumb part start-->
<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2>Product List</h2>
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
                        <div class="feature_part_content">
                            <a href="#artset"><h2>ART SETS AND KITS</h2></a>
                            <a href="#set_kit"><h4 style="color:#6e0f1f;">Starter kits for beginners (drawing, painting, mixed media)</h4>
                            <div class="product-image-container">
                                <img src="{{asset('assets/frontend/img/kit1.webp')}}" class="img-fluid" width="70%" alt="#">
                                <div class="overlay">
                                    <div class="text">Click for product details</div>
                                </div>
                            </div>
                            </a>
                            
                            <a href="#set_gift"><h4 style="color:#6e0f1f;">Gift sets for special occasions (holiday sets, themed sets)</h4>
                            <div class="product-image-container">
                                <img src="{{asset('assets/frontend/img/giftset.jpg')}}" class="img-fluid" width="70%" alt="#">
                                <div class="overlay">
                                    <div class="text">Click for product details</div>
                                </div>
                            </div>
                            </a>

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
                            <a href="#storage_box"><h4 style="color:#6e0f1f;">Art supply storage boxes and organizers</h4>
                            <div class="product-image-container">
                                <img src="{{asset('assets/frontend/img/organizeer.jpg')}}" class="img-fluid" width="70%" alt="#">
                                <div class="overlay">
                                    <div class="text">Click for product details</div>
                                </div>
                            </div>
                            </a>
                            <a href="#storage_case"><h4 style="color:#6e0f1f;">Portfolio cases and art bags for transporting artwork</h4>
                            <div class="product-image-container">
                                <img src="{{asset('assets/frontend/img/artbox.jpg')}}" class="img-fluid" width="70%" alt="#">
                                <div class="overlay">
                                    <div class="text">Click for product details</div>
                                </div>
                            </div>
                            </a>
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
                                    <a href="#sculp_clay"><h4 style="color:#6e0f1f;">Sculpting clay</h4>
                                    <div class="product-image-container">
                                        <img src="{{asset('assets/frontend/img/sculpting clay.jpg')}}" class="img-fluid" alt="#">
                                        <div class="overlay">
                                            <div class="text">Click for product details</div>
                                        </div>
                                    </div>    
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#model_clay"><h4 style="color:#6e0f1f;">Modeling clay</h4>
                                    <div class="product-image-container">
                                        <img src="{{asset('assets/frontend/img/clay.jpg')}}" class="img-fluid" alt="#">
                                        <div class="overlay">
                                            <div class="text">Click for product details</div>
                                        </div>
                                    </div>    
                                    </a>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-lg-6">
                                <a href="#wheel"><h4 style="color:#6e0f1f;">Pottery wheels and ceramic supplies</h4>
                                <div class="product-image-container">
                                <img src="{{asset('assets/frontend/img/Pottery wheels.jpg')}}" class="img-fluid" alt="#">
                                <div class="overlay">
                                    <div class="text">Click for product details</div>
                                </div>
                                </div>    
                                </a>
                                </div>
                                <div class="col-lg-6">
                                <a href="#tools"><h4 style="color:#6e0f1f;">Woodworking tools (for art projects)</h4>
                                <div class="product-image-container">
                                    <img src="{{asset('assets/frontend/img/giftset.jpg')}}" class="img-fluid" alt="#">
                                    <div class="overlay">
                                        <div class="text">Click for product details</div>
                                    </div>
                                </div></a>    
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
                                <a href="#penc">    
                                <h4 style="color:#6e0f1f;">Graphite pencils</h4 style="color:#6e0f1f;">
                                    <div class="product-image-container"></div>            
                                            <img src="{{asset('assets/frontend/img/pencils.avif')}}" class="img-fluid" width="70%" alt="#">
                                            <div class="overlay">
                                                <div class="text">Click for product details</div>
                                            </div>
                                    </div></a>
                                <div class="col-lg-6"> 
                                <a href="#color_penc">    
                                <h4 style="color:#6e0f1f;">Colored pencils</h4 style="color:#6e0f1f;">
                                    <div class="product-image-container">
                                        <img src="{{asset('assets/frontend/img/coloredpencils.avif')}}" width="80%" class="img-fluid" alt="#">
                                        <div class="overlay">
                                            <div class="text">Click for product details</div>
                                        </div>
                                    </div>                                                                        
                                    </a>   
                                </div>

                            </div>
                            <div class="row">   
                                <div class="col-lg-6">
                                <a href="#charc_penc">    
                                <h4 style="color:#6e0f1f;">Charcoal pencils and sticks</h4 style="color:#6e0f1f;">
                                    <div class="product-image-container">
                                        <img src="{{asset('assets/frontend/img/charcoal.jpg')}}" class="img-fluid" alt="#">
                                        <div class="overlay">
                                            <div class="text">Click for product details</div>
                                        </div>
                                    </div>                                    
                                    </a>    
                                </div>
                                <div class="col-lg-6">
                                <a href="#pastel">    
                                <h4 style="color:#6e0f1f;">Pastels(soft pastels, oil pastels)</h4 style="color:#6e0f1f;">
                                    <div class="product-image-container">
                                        <img src="{{asset('assets/frontend/img/oilpastel.jpg')}}" class="img-fluid" alt="#">
                                        <div class="overlay">
                                            <div class="text">Click for product details</div>
                                        </div>
                                    </div>
                                    </a>  
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Tab content part end -->

<!-- product list dropdown start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product_sidebar">
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
    </div>
</section>
<!-- product list dropdown end-->


<!-- Product list start -->
<section id="artset">
    <h3 style="text-align:center;" class="mt-5">ART SETS AND KITS</h3>
    <div class="row">
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="set_kit">
                    <h5 style="text-align:center;" class="card-title">STARTER KITS</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/kit1.webp')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities. 
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="set_gift">
                    <h5 style="text-align:center;" class="card-title">BIRTHDAY SET</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/giftset.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities. 
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="storage">
    <h3 style="text-align:center;" class="mt-5">STORAGE AND ORGANIZATION</h3>
    <div class="row">
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="storage_box">
                    <h5 style="text-align:center;" class="card-title">STORAGE BOX</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/organizeer.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities.
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="storage_case">
                    <h5 style="text-align:center;" class="card-title">PORTFOLIO CASES</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/artbox.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities.
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="fineart">
    <h3 style="text-align:center;" class="mt-5">FINE ART MATERIALS</h3>
    <div class="row">
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="sculp_clay" >
                    <h5style="text-align:center;" class="card-title">SCULPTING CLAY</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/sculpting clay.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities.
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="model_clay" >
                    <h5 style="text-align:center;" class="card-title">MODELING CLAY</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/clay.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities.
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="wheel" >
                    <h5 style="text-align:center;" class="card-title">POTTERY WHEELS AND CERAMIC SUPPLIES</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/Pottery wheels.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities.
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="tools" >
                    <h5 style="text-align:center;" class="card-title">WOODWORKING TOOLS</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/Woodworking tools.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities.
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="draw_tools">
    <h3 style="text-align:center;" class="mt-5">FINE ART MATERIALS</h3>
    <div class="row">
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="penc">
                    <h5 style="text-align:center;" class="card-title">GRAPHITE PENCIL</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/graphite.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities.
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="color_penc">
                    <h5 style="text-align:center;" class="card-title">COLOURED PENCILS</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/colourpencil.avif')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities.
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="charc_penc">
                    <h5 style="text-align:center;" class="card-title">CHARCOAL PENCILS AND STICKS</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/charcoal.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities.
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 lg-6 mb-4">
            <div class="card">
                <div class="card-header" id="pastel">
                    <h5 style="text-align:center;" class="card-title">PASTELS</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('assets/frontend/img/softpastel.avif')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    This artistry supplies kit aims to provide a well-rounded selection of
                    essential materials that cater to both painting and drawing 
                    activities.
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn_3">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Product list end -->


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

<div class="container">
    <!-- Your content here -->

    <!-- Floating arrow to go back to the header -->
    <a href="#header" class="scroll-to-top" id="scrollToTop">
        &#8593; <!-- Unicode for an up arrow -->
    </a>
</div>

@endsection

<style>

.scroll-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    background-color: #333;
    color: white;
    padding: 10px 15px;
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
    display: none; /* Hidden by default */
    transition: opacity 0.5s ease;
}

.scroll-to-top:hover {
    background-color: #555;
}

.product-image-container {
    position: relative;
    /* width: 300px; 
    height: 300px;  */
}

.product-image {
    width: 100%;
    height: 100%;
    display: block;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 15px;
    opacity: 0;
    transition: opacity 0.5s ease;
}

.product-image-container:hover .product-image {
    opacity: 0.3; /* Adjust the translucency */
}

.product-image-container:hover .overlay {
    opacity: 1;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {  
    const scrollToTopButton = document.getElementById('scrollToTop');
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollToTopButton.style.display = 'block';
            scrollToTopButton.style.opacity = '1';
        } else {
            scrollToTopButton.style.display = 'none';
        }
    });
    scrollToTopButton.addEventListener('click', function(event) {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
</script>


<script src="{{asset('assets/backend/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/backend/js/sidebarmenu.js')}}"></script>
<script src="{{asset('assets/backend/js/app.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/simplebar/dist/simplebar.js')}}"></script>
<script src="{{asset('assets/backend/js/dashboard.js')}}"></script>