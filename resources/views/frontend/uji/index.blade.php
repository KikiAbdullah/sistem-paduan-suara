@extends('frontend.layouts.app')

@section('content')
<!-- Faqs -->
<section class="faqs section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2><span>Tes </span>Paduan Suara</h2>
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
                            @foreach ($questions as $key => $data_question)
                            <!-- Single Faq -->
                            <div class="panel panel-default {{ $key == 0 ? 'active' : ''}}">
                                <div class="faq-heading" id="FaqTitle1">
                                    <h4 class="faq-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#faq{{ $key+1 }}"><i class="fa fa-question"></i>
                                            Pertanyaan {{ $key+1 }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq{{ $key+1 }}" class="panel-collapse collapse {{ $key == 0 ? 'show' : ''}}"
                                    role="tabpane{{ $key+1 }}" aria-labelledby="FaqTitle1">
                                    <div class="faq-body">
                                        {!! $data_question['question'] !!}

                                        <br>
                                        <?php $audio = $class_audio::where('slug','question-'.$data_question['id'])->get(); ?>
                                        @foreach ($audio as $data_audio)
                                        <p>{{ $data_audio['title'] }}</p>
                                        <audio
                                            src="{{ url('uploads/question/'.$data_audio['slug'].'/audio/'.$data_audio['audio']) }}"
                                            controls>
                                        </audio>
                                        @endforeach
                                        <br>
                                        <a href="#" class="btn white">Ya</a>
                                        <a href="#" class="btn white primary">Tidak</a>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Faq -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection