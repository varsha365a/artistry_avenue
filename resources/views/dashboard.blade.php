@extends('Frontend.main_master')
@section('content')
@section('title')
Artistry Avenue
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<x-app-layout>
    
    <!-- NAVBAR CODE -->
    <ul class="nav nav-pills mt-2" role="tablist" id="myTab">
    <li class="nav-item" role="presentation">
        <button type="button" role="tab" class="btn_3 nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" aria-controls="Orders">
            Orders
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button type="button" role="tab" class="btn_3 nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" aria-controls="profile">
            Profile
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button type="button" role="tab" class="btn_3 nav-link" id="rewards-tab" data-bs-toggle="tab" data-bs-target="#rewards" aria-controls="rewards">
            Rewards  
        </button>  
    </li>
    <li class="nav-item" role="presentation">
        <button type="button" role="tab" class="btn_3 nav-link" id="customercare-tab" data-bs-toggle="tab" data-bs-target="#customercare" aria-controls="customercare">
            Customer Care 
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button type="button" role="tab" class="btn_3 nav-link" id="-tab" data-bs-toggle="tab" data-bs-target="#reviews" aria-controls="reviews">
            Reviews 
        </button>
    </li>
</ul>
 
<div class="tab-content">   
    <div class="tab-pane fade mt-3 text-center" role="tabpanel" id="orders" aria-labelledby="orders-tab">
        Hello from ORDERS PAGE
    </div>
    <div class="tab-pane fade mt-3 text-center" role="tabpanel" id="profile" aria-labelledby="profile-tab">
        Hello from PROFILE PAGE
    </div>
    <div class="tab-pane fade mt-3 text-center" role="tabpanel" id="rewards" aria-labelledby="rewards-tab">
        Hello from REWARDS PAGE
    </div>  
    <div class="tab-pane fade mt-3 text-center" role="tabpanel" id="customercare" aria-labelledby="customercare-tab">
        Hello from CUSTOMER CARE PAGE
    </div>
    <div class="tab-pane fade mt-3 text-center" role="tabpanel" id="reviews" aria-labelledby="reviews-tab">
        Hello from REVIEWS PAGE
    </div>
</div>

</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection