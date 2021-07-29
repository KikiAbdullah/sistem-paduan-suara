@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
@endsection

@section('hero')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Data Data Training</h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <a href="{{ route('add.training') }}" class="btn btn-primary float-right">+ Tambah Data Training</a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">No</th>
                        <th>Pitch</th>
                        <th>Jenis Kelamin</th>
                        <th>Menirukan Sopran</th>
                        <!-- <th>Menirukan Sopran 2</th>
                        <th>Menirukan Sopran 3</th> -->
                        <th>Menirukan Alto</th>
                        <!-- <th>Menirukan Alto 2</th>
                        <th>Menirukan Alto 3</th> -->
                        <th>Menirukan Tenor</th>
                        <!-- <th>Menirukan Tenor 2</th>
                        <th>Menirukan Tenor 3</th> -->
                        <th>Menirukan Bass</th>
                        <!-- <th>Menirukan Bass 2</th>
                        <th>Menirukan Bass 3</th> -->
                        <th>Jenis Suara/th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($training as $key => $data_training)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $data_training['pitch'] == 1 ? 'Rendah' : 'Tinggi' }}</td>
                        <td>{{ $data_training['jenis_kelamin'] == 1 ? 'Pria' : 'Wanita' }}</td>
                        <td>{{ $data_training['c'] == 1 ? 'Bisa' : 'Tidak' }}</td>
                        <td>{{ $data_training['f'] == 1 ? 'Bisa' : 'Tidak' }}</td>
                        <td>{{ $data_training['b'] == 1 ? 'Bisa' : 'Tidak' }}</td>
                        <td>{{ $data_training['e'] == 1 ? 'Bisa' : 'Tidak' }}</td>
                        <td>
                            @if($data_training['suara'] == 4)
                            Sopran
                            @elseif($data_training['suara'] == 3)
                            Alto
                            @elseif($data_training['suara'] == 2)
                            Tenor
                            @elseif($data_training['suara'] == 1)
                            Bass
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit.training', encrypt($data_training['id'])) }}" class="btn btn-info btn-sm btn-block">Edit</a>
                            <a href="{{ route('destroy.training', encrypt($data_training['id'])) }}" class="btn btn-danger btn-sm btn-block">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->
</div>>
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