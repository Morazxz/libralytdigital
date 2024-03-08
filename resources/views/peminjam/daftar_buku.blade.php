@extends('layout.app1')
@section('konten1')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Buku</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('peminjam.beranda') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Buku</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header ">
                        <h5 class="card-title">
                            Table Buku
                        </h5>
                        @dd($model)
                        <div class="d-flex justify-content-start">
                            {{--  <a href="{{ route('export.buku') }}" class="btn btn-success"><i class="fas fa-file-excel"> </i></a>  --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive datatable-minimal">
                            <table class="table" id="table2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar Cover</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>penulis</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>Deskripsi</th>
                                        <th>Stok</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($model as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ Storage::url('public/buku/') . $item->gambar }}"
                                                    class="rounded" style="width: 150px">
                                            </td>
                                            <td>{{ $item->judul }}</td>
                                            <td>
                                                {{ $kategoris->find($item->id_kategori)->nm_kategori }}
                                            </td>
                                            <td>{{ $item->penulis }}</td>
                                            <td>{{ $item->penerbit }}</td>
                                            <td>{{ $item->tahun_terbit }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>{{ $item->stok }}</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-primary"><i
                                                        class="fa-solid fa-eye"></i>DETAIL</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        import {
            Input,
            initMDB
        } from "mdb-ui-kit";

        initMDB({
            Input
        });
    </script>
@endsection
