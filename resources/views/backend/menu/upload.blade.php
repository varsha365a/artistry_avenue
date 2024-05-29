

@extends('Backend.main_master')
@section('content')
@section('title')
Artistry Avenue
@endsection

    <div class="container">

        <div class="row">
            <div class="col-md-12 pt-5">
                @if(session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <a href="{{ url('index') }}" class="btn btn-danger float-end">BACK</a>
                <h2>UPLOAD PRODUCT</h2>  
                <form method="post" action="{{ url('product_list') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3 pt-3">
                        <label for="name">Name of product: </label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="price">Price range starts from: </label>
                        <input type="text" name="price" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="image">Upload image: </label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

@endsection

