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
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Hasil Perhitungan KNN</h3>
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
                                <th>Jarak</th>
                                <th>Urutan</th>
                                <th>1-NN</th>
                                <th>3-NN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hasil as $key => $data_hasil)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $data_hasil['pitch'] }}</td>
                                <td>{{ $data_hasil['jenis_kelamin'] }}</td>
                                <td>{{ $data_hasil['c'] }}</td>
                                <td>{{ $data_hasil['f'] }}</td>
                                <td>{{ $data_hasil['b'] }}</td>
                                <td>{{ $data_hasil['e'] }}</td>
                                <td>{{ $data_hasil['suara'] }}</td>
                                <td> {!! "&radic;({$data_hasil['pitch']} - {$input['pitch']})<sup>2</sup> + ({$data_hasil['jenis_kelamin']} - {$input['jenis_kelamin']})<sup>2</sup> + ({$data_hasil['c']} - {$input['c']})<sup>2</sup> + ({$data_hasil['f']} - {$input['f']})<sup>2</sup> +({$data_hasil['b']} - {$input['b']})<sup>2</sup>+({$data_hasil['e']} - {$input['e']})<sup>2</sup>= " . number_format($data_hasil['jarak'], 2) !!}</td>
                                <td>{{ $data_hasil['urut'] }}</td>
                                <td>{{ $data_hasil['nn1'] }}</td>
                                <td>{{ $data_hasil['nn3'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Kesimpulan</h3>
                </div>
                <div class="block-content">
                    <h3 class="block-title">1-NN</h3>
                    {{ $nn1 }}
                </div>
                <div class="block-content">
                    <h3 class="block-title">3-NN</h3>
                    {{ $nn3 }}
                </div>
                <br><br>
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