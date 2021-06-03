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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Edit Materi</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Data Materi</li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Materi</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content content-full content-boxed">
    <!-- New Post -->
    <form action="{{ route('update.materi', encrypt($materi->id)) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="block">
            <div class="block-header block-header-default">
                <a class="btn btn-light" href="{{ route('backend.materi') }}">
                    <i class="fa fa-arrow-left mr-1"></i> Data Materi
                </a>
                <div class="block-options">
                    <div class="custom-control custom-switch custom-control-success">
                        <input type="checkbox" class="custom-control-input" id="publish" name="publish"
                            {{ $materi->publish == 1 ? 'checked' : '' }}>
                        <label class="custom-control-label" for="publish">Publish</label>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Masukan Judul Materi ..." value="{{ $materi->title }}">
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-6">
                                <label>Gambar</label>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="image" name="image"
                                        data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="image">{{ $materi->image }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
                            <!-- For more info and examples you can check out http://ckeditor.com -->
                            <label>Isi</label>
                            <textarea id="js-ckeditor" name="isi">{!! $materi->isi !!}</textarea>
                        </div>
                        <div class="form-group row">
                            @foreach ($audio as $data_audio)
                            @if (in_array($data_audio->vocal, $category))
                            <div class="col-xl-6">
                                <label>{{ $data_audio->title }}</label>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="audio"
                                        name="audio[{{ $data_audio->vocal }}]" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="audio">{{ $data_audio->audio }}</label>
                                    {{-- hidden id_audio --}}
                                    <input type="hidden" name="id_audio[{{ $data_audio->vocal }}]"
                                        value="{{ $data_audio->id }}">
                                </div>
                            </div>
                            @php
                            $index = array_search($data_audio->vocal, $category);
                            unset($category[$index]);
                            @endphp
                            @endif
                            @endforeach
                            @if(!empty($category))
                            @foreach ($category as $data_cat)
                            <div class="col-xl-6">
                                <label>Audio {{ $data_cat }}</label>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="audio"
                                        name="audio[{{ $data_cat }}]" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="audio">Pilih Audio ...
                                        ({{ $data_cat }})</label>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content bg-body-light">
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-fw fa-check mr-1"></i> Create Post
                        </button>
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
    jQuery(function () {
                            CKEDITOR.config.height = '450px';
                            Dashmix.helpers(['ckeditor']);
                        });
</script>

<!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Ion Range Slider + Masked Inputs + Password Strength Meter plugins) -->
<script>
    jQuery(function () { Dashmix.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'rangeslider', 'masked-inputs', 'pw-strength']); });
</script>
@endsection