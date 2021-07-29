@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
@endsection

@section('hero')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Perhitungan KNN</h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    <!-- Your Block -->
    <div class="row">
        <div class="col-md-7">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Data Training</h3>
                </div>
                <div class="block-content">
                    <table class="table table-bordered table-striped table-vcenter ">
                        <thead style="background-color: skyblue;">
                            <tr>
                                <th>No.</th>
                                <th>Pitch</th>
                                <th>Jenis<br>Kelamin</th>
                                <th>S</th>
                                <!-- <th>Menirukan Sopran 2</th>
                        <th>Menirukan Sopran 3</th> -->
                                <th>A</th>
                                <!-- <th>Menirukan Alto 2</th>
                        <th>Menirukan Alto 3</th> -->
                                <th>T</th>
                                <!-- <th>Menirukan Tenor 2</th>
                        <th>Menirukan Tenor 3</th> -->
                                <th>B</th>
                                <!-- <th>Menirukan Bass 2</th>
                        <th>Menirukan Bass 3</th> -->
                                <th>Suara</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($training as $key => $data_training)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $data_training['pitch'] }}</td>
                                <td>{{ $data_training['jenis_kelamin'] }}</td>
                                <td>{{ $data_training['c'] }}</td>
                                <td>{{ $data_training['f'] }}</td>
                                <td>{{ $data_training['b'] }}</td>
                                <td>{{ $data_training['e'] }}</td>
                                <td>{{ $data_training['suara'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Data Baru</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('process.knn') }}" method="post">
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
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Menirukan Sopran</label>
                                    <select name="c" id="" class="form-control">
                                        <option disabled selected>Menirukan Sopran</option>
                                        <option value="1">Bisa</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Menirukan Alto</label>
                                    <select name="f" id="" class="form-control">
                                        <option disabled selected>Menirukan Alto</option>
                                        <option value="1">Bisa</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Menirukan Tenor</label>
                                    <select name="b" id="" class="form-control">
                                        <option disabled selected>Menirukan Tenor</option>
                                        <option value="1">Bisa</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Menirukan Bass</label>
                                    <select name="e" id="" class="form-control">
                                        <option disabled selected>Menirukan Bass</option>
                                        <option value="1">Bisa</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-alt-primary" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- END Your Block -->
</div>
@endsection

@section('js')
<!-- Page JS Plugins -->
<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>
@endsection