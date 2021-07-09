@extends('frontend.layouts.app')

@section('content')
<!-- Faqs -->
<section class="faqs section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2><span>Daftar Anggota </span>Paduan Suara</h2>
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
                            <form action="{{ route('klasifikasi.proses') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="panel panel-default">
                                    <div class="faq-heading" id="FaqTitle1">
                                        <h4 class="faq-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq1"><i class="fa fa-question"></i>
                                                Pengalaman Dalam Paduan Suara ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="faq1" class="panel-collapse collapse show" role="tabpane1" aria-labelledby="FaqTitle1">
                                        <div class="faq-body">
                                            <div class="form-group">
                                                <select name="pengalaman" id="" class="form-control">
                                                    <option value="25">1 Tahun</option>
                                                    <option value="50">2 Tahun</option>
                                                    <option value="75">3 Tahun</option>
                                                    <option value="100">3 Tahun</option>
                                                </select>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="faq-heading" id="FaqTitle2">
                                        <h4 class="faq-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq2"><i class="fa fa-question"></i>
                                                Nilai Akhir Semester
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="faq2" class="panel-collapse collapse" role="tabpane2" aria-labelledby="FaqTitle2">
                                        <div class="faq-body">
                                            <div class="form-group">
                                                <select name="nilai_semester" id="" class="form-control">
                                                    <option value="25">NAS < 2.50</option>
                                                    <option value="50">2.50 >= NAS <= 3.00 </option>
                                                    <option value="75">3.00 >= NAS <=3.50 </option>
                                                    <option value="100">NAS > 3.50</option>
                                                </select>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="faq-heading" id="FaqTitle3">
                                        <h4 class="faq-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq3"><i class="fa fa-question"></i>
                                                Bisa Alat Musik?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="faq3" class="panel-collapse collapse" role="tabpane3" aria-labelledby="FaqTitle3">
                                        <div class="faq-body">
                                            <div class="form-group">
                                                <select name="alat_musik" id="" class="form-control">
                                                    <option value="50">Tidak</option>
                                                    <option value="100">Bisa</option>
                                                </select>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="faq-heading" id="FaqTitle4">
                                        <h4 class="faq-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq4"><i class="fa fa-question"></i>
                                                Pernah Ikut Organisasi?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="faq4" class="panel-collapse collapse" role="tabpane4" aria-labelledby="FaqTitle4">
                                        <div class="faq-body">
                                            <div class="form-group">
                                                <select name="organisasi" id="" class="form-control">
                                                    <option value="50">Tidak</option>
                                                    <option value="100">Pernah</option>
                                                </select>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="faq-heading" id="FaqTitle5">
                                        <h4 class="faq-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq5"><i class="fa fa-question"></i>
                                                Jarak dari rumah ke sekolah?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="faq5" class="panel-collapse collapse" role="tabpane5" aria-labelledby="FaqTitle5">
                                        <div class="faq-body">
                                            <div class="form-group">
                                                <select name="jarak" id="" class="form-control">
                                                    <option value="25">Jarak < 0.5 Km</option>
                                                    <option value="50">0.5 Km >= Jarak <= 1.5 Km</option>
                                                    <option value="75">1.5 Km >= Jarak <= 2.0 Km</option>
                                                    <option value="100">Jarak > 2.0 Km</option>
                                                </select>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-info">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection