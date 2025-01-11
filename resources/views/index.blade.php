
@extends('layout')

@section('title', 'Home Page')

@section('content')
    <div class="text-center">
        <h1>Welcome to Our Website</h1>
        <p>This is the home page, featuring a responsive navigation bar and an attractive footer.</p>
        <p>Explore our features, pricing, and contact us for more information.</p>
    </div>

    <!-- Example Cards Section -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature 1</h5>
                    <p class="card-text">Description of Feature 1. It provides some brief details about the feature.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature 2</h5>
                    <p class="card-text">Description of Feature 2. It highlights the benefits of using this feature.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature 3</h5>
                    <p class="card-text">Description of Feature 3. It explains why this feature is useful.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
@endsection
  
