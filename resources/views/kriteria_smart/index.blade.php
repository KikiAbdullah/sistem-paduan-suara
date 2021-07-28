@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
@endsection

@section('hero')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Data Kriteria</h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <a href="{{ route('add.kriteria_smart') }}" class="btn btn-primary float-right">+ Tambah Kriteria</a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">No</th>
                        <th>Kriteria</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kriteria_smart as $key => $data_kriteria_smart)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $data_kriteria_smart['kriteria'] }}</td>
                        <td>
                            <a href="{{ route('edit.kriteria_smart', encrypt($data_kriteria_smart['id'])) }}" class="btn btn-info btn-sm btn-block">Edit</a>
                            <a href="{{ route('destroy.kriteria_smart', encrypt($data_kriteria_smart['id'])) }}" class="btn btn-danger btn-sm btn-block">Delete</a>
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