@extends('frontend.layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb -->
<div class="breadcrumbs overlay"
    style="background-image:url('https://images.unsplash.com/photo-1548795835-264877304664?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2>{{ $materi['title'] }}</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="#">Home<i class="fa fa-angle-right"></i></a></li>
                    <li><a href="{{ route('materi') }}">Materi<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a>{{ $materi['title'] }}</a></li>
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
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="{{ url('uploads/materi/'.$materi['slug'].'/image/'.$materi['image']) }}" alt="Image">
                    </div>
                    <!-- Course Body -->
                    <!-- Course Meta -->
                    <div class="course-meta">
                        <!-- Course Info -->
                        <div class="course-info">
                            <span><i class="fa fa-calendar-o"></i>{{ $materi['created_at'] }}</span>
                        </div>
                    </div>
                    <!--/ End Course Meta -->
                    <div class="course-body">
                        <h4 class="c-title">{{ $materi['title'] }}</h4>
                        <p align="justify">
                            {!! $materi['isi'] !!}
                        </p>
                    </div>
                    <br>
                    <div class="course-body">
                        <h4 class="c-title">Audio Sample</h4>
                        @foreach ($audio as $data_audio)
                        <p>{{ $data_audio['title'] }}</p>
                        <audio src="{{ url('uploads/materi/'.$data_audio['slug'].'/audio/'.$data_audio['audio']) }}"
                            controls>
                        </audio>
                        @endforeach
                    </div>

                </div>
                <!--/ End Single Course -->
            </div>
        </div>
    </div>
</section>
<!--/ End Courses -->
@endsection