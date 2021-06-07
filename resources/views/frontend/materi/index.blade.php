@extends('frontend.layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb -->
<div class="breadcrumbs overlay"
    style="background-image:url('https://images.unsplash.com/photo-1548795835-264877304664?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2>Materi</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="{{ route('home') }}">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">Materi<i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->
@endsection

@section('content')
<!-- Courses -->
<section class="courses archive section">
    <div class="container">
        <div class="row">
            @foreach ($materi as $data_materi)
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="{{ url('uploads/materi/'.$data_materi['slug'].'/image/'.$data_materi['image']) }}"
                            alt="Image">
                        <a href="{{ route('materi.detail', $data_materi['slug']) }}"
                            class="btn white primary">Detail</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <h4 class="c-title"><a
                                href="{{ route('materi.detail', $data_materi['slug']) }}">{{ $data_materi['title'] }}</a>
                        </h4>
                        <p align="justify">
                            @php
                            if ( str_word_count($data_materi['isi']) > 5 ){
                            echo substr($data_materi['isi'],0,250)."...";
                            } else {
                            echo $data_materi['isi'];
                            }
                            @endphp
                        </p>
                    </div>
                    <!-- Course Meta -->
                    <div class="course-meta">
                        <!-- Course Info -->
                        <div class="course-info">
                            <span><i class="fa fa-calendar-o"></i>{{ $data_materi['created_at'] }}</span>
                        </div>
                    </div>
                    <!--/ End Course Meta -->
                </div>
                <!--/ End Single Course -->
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--/ End Courses -->
@endsection