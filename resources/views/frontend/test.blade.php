@extends('frontend.layouts.app')

@section('content')
<!-- Courses -->
<section class="courses archive section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="{{ asset('assets/media/photos/test1.jpg') }}" alt="#">
                        <a href="{{ route('klasifikasi') }}" class="btn white primary">Tes Daftar Anggota</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <br>
                        <h4 class="c-title text-center"><a href="{{ route('klasifikasi') }}">Tes Daftar Anggota</a>
                        </h4>
                        <p></p>
                    </div>
                </div>
                <!--/ End Single Course -->
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="{{ asset('assets/media/photos/test2.jpg') }}" alt="#">
                        <a href="{{ route('uji') }}" class="btn white primary">Tes Jenis Suara</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <br>
                        <h4 class="c-title text-center"><a href="{{ route('uji') }}">Tes Jenis Suara</a>
                        </h4>
                        <p></p>
                    </div>
                </div>
                <!--/ End Single Course -->
            </div>
        </div>
    </div>
</section>
<!--/ End Courses -->
@endsection