@extends('layouts.app2')

@section('hero')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Data Materi</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Data Materi</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content content-full">
    <!-- Posts Statistics -->
    <div class="row text-center">
        <div class="col-6 col-xl-3">
            <!-- All Posts -->
            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="far fa-2x fa-file-alt opacity-50"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            {{ $total }}
                        </p>
                        <p class="text-muted mb-0">
                            Jumlah Materi
                        </p>
                    </div>
                </div>
            </a>
            <!-- END All Posts -->
        </div>
        <div class="col-6 col-xl-3">
            <!-- Active Posts -->
            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="far fa-2x fa-eye opacity-50"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            {{ $published }}
                        </p>
                        <p class="text-muted mb-0">
                            Publish
                        </p>
                    </div>
                </div>
            </a>
            <!-- END Active Posts -->
        </div>
        <div class="col-6 col-xl-3">
            <!-- Draft Posts -->
            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="fa fa-2x fa-pencil-alt opacity-50"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            {{ $draft }}
                        </p>
                        <p class="text-muted mb-0">
                            Drafts
                        </p>
                    </div>
                </div>
            </a>
            <!-- END Draft Posts -->
        </div>
        <div class="col-6 col-xl-3">
            <!-- New Post -->
            <a class="block block-rounded" href="{{ route('add.materi') }}">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="fa fa-2x fa-plus text-success-light"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            <i class="fa fa-plus text-success-light mr-1 d-md-none"></i> Tambah Materi
                        </p>
                        <p class="text-muted mb-0">
                            oleh {{ Auth::user()->name }}
                        </p>
                    </div>
                </div>
            </a>
            <!-- END New Post -->
        </div>
    </div>
    <!-- Post Statistics -->

    <!-- Posts -->
    <div class="block">
        <div class="block-content">
            <!-- Posts Table -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th style="width: 60px;">No</th>
                        <th style="width: 33%;">Judul</th>
                        <th class="d-none d-xl-table-cell">Tanggal</th>
                        <th class="d-none d-xl-table-cell">Published</th>
                        <th style="width: 100px;" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materi as $key => $data_materi)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $data_materi['title'] }}</td>
                        <td>{{ $data_materi['created_at'] }}</td>
                        <td>
                            @if ($data_materi['publish'] == 1)
                            Published
                            @else
                            Drafted
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit.materi', encrypt($data_materi['id'])) }}"
                                class="btn btn-info btn-sm btn-block">Edit</a>
                            <a href="" class="btn btn-danger btn-sm btn-block">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- END Posts Table -->

            <!-- Posts Pagincation -->
            <nav aria-label="Posts Navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-double-left"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-double-right"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END Posts Pagincation -->
        </div>
    </div>
    <!-- END Posts -->
</div>
@endsection