@extends('frontend.layouts.app')

@section('content')
<!-- Contact Us -->
<section id="contact" class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2>Tes Penentuan <span>Jenis Suara</span></h2>
                    <p> Media aplikasi ini akan membantu perserta paduan suara pemula untuk mengetahui apakah suaranya masuk ke bass, tenor, alto atau sopran.</p>
                    <div class="icon"><i class="fa fa-paper-plane"></i></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="form-head">
                    <!-- Contact Form -->
                    <form action="{{ route('uji.hasil') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Pitch</label>
                            <select name="pitch" id="" class="form-control">
                                <option disabled selected>Pilih Pitch</option>
                                <option value="1">Rendah</option>
                                <option value="2">Tinngi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="1">Pria</option>
                                <option value="2">Wanita</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Apakah Suara Anda cocok dengan jenis suara ini?</label>
                                    <select name="c" id="" class="form-control">
                                        <option disabled selected>Pilih</option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Contoh Suara</label>
                                    <audio src="{{ asset('uploads/suara/sopran.mp3') }}" controls>Suara 1</audio>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Apakah Suara Anda cocok dengan jenis suara ini?</label>
                                    <select name="f" id="" class="form-control">
                                        <option disabled selected>Pilih</option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Contoh Suara</label>
                                    <audio src="{{ asset('uploads/suara/alto.mp3') }}" controls>Suara 2</audio>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Apakah Suara Anda cocok dengan jenis suara ini?</label>
                                    <select name="b" id="" class="form-control">
                                        <option disabled selected>Pilih</option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Contoh Suara</label>
                                    <audio src="{{ asset('uploads/suara/tenor.mp3') }}" controls>Suara 3</audio>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Apakah Suara Anda cocok dengan jenis suara ini?</label>
                                    <select name="e" id="" class="form-control">
                                        <option disabled selected>Pilih</option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Contoh Suara</label>
                                    <audio src="{{ asset('uploads/suara/bass.mp3') }}" controls>Suara 4</audio>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-alt-primary" value="Submit">
                        </div>
                    </form>
                    <!--/ End Contact Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact Us -->
@endsection