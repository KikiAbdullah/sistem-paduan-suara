@extends('frontend.layouts.app')

@section('content')
<!-- Slider Area -->
<section class="home-slider">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider overlay">
            <div class="slider-image"
                style="background-image:url('https://images.unsplash.com/photo-1548795835-264877304664?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80')">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-10 col-12">
                        <!-- Slider Content -->
                        <div class="slider-content">
                            <h1 class="slider-title"><span>The Best University in the World!</span>Eduland Online
                                <b>University</b></h1>
                            <p class="slider-text">Mirum est notare quam littera gothica, quam nunc putamus parum
                                claram, anteposuerit litterarum formas humanitatis per seacula There are many variations
                                of passages of Lorem Ipsum available, but the majority</p>
                            <!-- Button -->
                            <div class="button">
                                <a href="about.html" class="btn white">About Eduland</a>
                                <a href="courses.html" class="btn white primary">Our Courses</a>
                            </div>
                            <!--/ End Button -->
                        </div>
                        <!--/ End Slider Content -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </div>
</section>
<!--/ End Slider Area -->
@endsection