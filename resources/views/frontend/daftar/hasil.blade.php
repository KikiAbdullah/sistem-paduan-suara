@extends('frontend.layouts.app')

@section('content')
<!-- Faqs -->
<section class="faqs section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2>{{ $hasil }}</h2>
                    <br>
                    <a href="{{ route('klasifikasi') }}" class="btn btn-info">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection