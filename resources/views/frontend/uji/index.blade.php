@extends('frontend.layouts.app')

@section('content')
<!-- Faqs -->
<section class="faqs section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2><span>Tes Penentuan </span>Jenis Suara</h2>
                    <p></p>
                    <div class="icon"><i class="fa fa-question"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="faq-main">
                    <div class="faq-content">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <form action="{{ route('proses.smart') }}" method="post">
                                @csrf
                                @foreach ($questions as $key => $data_question)
                                <!-- Single Faq -->
                                <div class="panel panel-default">
                                    <div class="faq-heading" id="FaqTitle{{ $key+1 }}">
                                        <h4 class="faq-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq{{ $key+1 }}"><i class="fa fa-question"></i>
                                                {{ $data_question['kriteria'] }}
                                                {{ $data_question['jenis_suara'] }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="faq{{ $key+1 }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle{{ $key+1 }}">
                                        <div class="faq-body">
                                            {!! $data_question['question'] !!}
                                            <br>
                                            <?php $audio = $class_audio::where('slug', 'question-' . $data_question['id_quest'])->get(); ?>
                                            @if(!empty($audio))
                                            @foreach ($audio as $data_audio)
                                            <p>{{ $data_audio['title'] }}</p>
                                            <audio src="{{ url('uploads/question/'.$data_audio['slug'].'/audio/'.$data_audio['audio']) }}" controls>
                                            </audio>
                                            @endforeach
                                            @endif
                                            <br>
                                            <input type="hidden" name="kriteria[{{$key}}]" value="{{ $data_question['kriteria'] }}">
                                            <input type="hidden" name="jenis_suara[{{$key}}]" value="{{ $data_question['jenis_suara'] }}">

                                            <div class="ml-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="bobot[{{$key}}]" id="flexRadioDefault1" value="20">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="bobot[{{ $key }}]" id="flexRadioDefault2" value="10">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Faq -->
                                @endforeach
                                <button class="btn btn-info btn-block" id="btn_bobot" type="submit">
                                    <i class="fas fa-check"></i>&nbsp;Tampilkan Hasil
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection