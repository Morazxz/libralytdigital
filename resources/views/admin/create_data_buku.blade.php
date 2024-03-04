@extends('layout.app')
@section('konten')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Tambah Siswa</title>
    </head>

    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Buku</h4>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" method="post"
                                enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="row">
                                        @csrf
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Judul Buku</label>
                                                <input type="text" id="first-name-vertical" class="form-control"
                                                    name="judul" placeholder="Judul Buku">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Penulis</label>
                                                <input type="text" id="first-name-vertical" class="form-control"
                                                    name="penulis" placeholder="Penulis">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Penerbit</label>
                                                <input type="text" id="first-name-vertical" class="form-control"
                                                    name="penerbit" placeholder="Penerbit">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">Tahun terbit</label>
                                                <input type="date" id="email-id-vertical" class="form-control"
                                                    name="tahun_terbit" placeholder="Tahun Terbit">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">deskripsi</label>
                                                <input type="text" id="first-name-vertical" class="form-control"
                                                    name="deskripsi" placeholder="Deskripsi">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="formFile" class="form-label">Cover Buku</label>
                                                <input class="form-control mb-3" name="gambar" type="file"
                                                    id="formFile" class="@error('image') is-invalid @enderror">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="formFile" class="form-label"><b>Kategori</b></label> <br>
                                                <input class="form-check-input" name="kategori[]" type="checkbox"
                                                <label class="form-check-label" for="flexCheckDefault">
                                                </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Stok</label>
                                            <input type="number" id="first-name-vertical" class="form-control"
                                                name="stok" placeholder="Stok">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class='form-check'>
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox3" class='form-check-input' checked>
                                                <label for="checkbox3">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    </div>

    </html>
@endsection
