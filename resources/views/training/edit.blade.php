@extends('layouts.app2')

@section('css')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/dropzone/dist/min/dropzone.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/flatpickr/flatpickr.min.css') }}">
@endsection

@section('hero')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Edit Data Training</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Data Data Training</li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Data Training</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content content-full content-boxed">
    <!-- New Post -->
    <form action="{{ route('update.training', encrypt($training['id'])) }}" method="POST">
        @csrf
        <div class="block">
            <div class="block-header block-header-default">
                <a class="btn btn-light" href="{{ route('backend.training') }}">
                    <i class="fa fa-arrow-left mr-1"></i> Data Training
                </a>
            </div>
            <div class="block-content">
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label>Pitch</label>
                            <select name="pitch" id="" class="form-control">
                                <option disabled selected>Pilih Pitch</option>
                                <option value="1" {{ $training['pitch'] == 1 ? 'selected' : '' }}>Rendah</option>
                                <option value="2" {{ $training['pitch'] == 2 ? 'selected' : '' }}>Tinggi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="1" {{ $training['jenis_kelamin'] == 1 ? 'selected' : '' }}>Pria</option>
                                <option value="2" {{ $training['jenis_kelamin'] == 2 ? 'selected' : '' }}>Wanita</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Menirukan Sopran</label>
                                    <select name="c" id="" class="form-control">
                                        <option disabled selected>Menirukan Sopran</option>
                                        <option value="1" {{ $training['c'] == 1 ? 'selected' : '' }}>Bisa</option>
                                        <option value="0" {{ $training['c'] == 0 ? 'selected' : '' }}>Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Menirukan Alto</label>
                                    <select name="f" id="" class="form-control">
                                        <option disabled selected>Menirukan Alto</option>
                                        <option value="1" {{ $training['f'] == 1 ? 'selected' : '' }}>Bisa</option>
                                        <option value="0" {{ $training['f'] == 0 ? 'selected' : '' }}>Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Menirukan Tenor</label>
                                    <select name="b" id="" class="form-control">
                                        <option disabled selected>Menirukan Tenor</option>
                                        <option value="1" {{ $training['b'] == 1 ? 'selected' : '' }}>Bisa</option>
                                        <option value="0" {{ $training['b'] == 0 ? 'selected' : '' }}>Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Menirukan Bass</label>
                                    <select name="e" id="" class="form-control">
                                        <option disabled selected>Menirukan Bass</option>
                                        <option value="1" {{ $training['e'] == 1 ? 'selected' : '' }}>Bisa</option>
                                        <option value="0" {{ $training['e'] == 0 ? 'selected' : '' }}>Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Suara</label>
                            <select name="suara" id="" class="form-control">
                                <option disabled selected>Jenis Suara</option>
                                <option value="4" {{ $training['suara'] == '4' ? 'selected' : '' }}>Sopran</option>
                                <option value="3" {{ $training['suara'] == '3' ? 'selected' : '' }}>Alto</option>
                                <option value="2" {{ $training['suara'] == '2' ? 'selected' : '' }}>Tenor</option>
                                <option value="1" {{ $training['suara'] == 'Bass' ? 'selected' : '' }}>Bass</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content bg-body-light">
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                        <input type="submit" class="btn btn-alt-primary" value="Edit Data Training">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- END New Post -->
</div>
@endsection

@section('js')
<!-- Page JS Plugins -->
<script src="{{ asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/dropzone/dropzone.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/flatpickr/flatpickr.min.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('assets/js/plugins/ckeditor/ckeditor.js') }}"></script>

<!-- Page JS Helpers (CKEditor plugin) -->
<script>
    jQuery(function() {
        CKEDITOR.config.height = '450px';
        Dashmix.helpers(['ckeditor']);
    });
</script>

<!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Ion Range Slider + Masked Inputs + Password Strength Meter plugins) -->
<script>
    jQuery(function() {
        Dashmix.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'rangeslider', 'masked-inputs', 'pw-strength']);
    });
</script>
@endsection