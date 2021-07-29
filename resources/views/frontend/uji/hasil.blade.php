@extends('frontend.layouts.app')

@section('content')
<!-- Faqs -->
<section class="faqs section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2><span>Jenis Suara Terpilih Adalah </span>{{ $hasil_uji }}</h2>
                    <p></p>
                    <div class="icon"><i class="fa fa-clone"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection