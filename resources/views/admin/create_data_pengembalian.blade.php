@extends('layout.app')
@section('konten')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Data Pengembalian</h3>
                    <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks
                        to simple-datatables.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Data Pengembalian</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Username</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Username">
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Password</label>
                                <input type="text" class="form-control" id="helpInputTop" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="helperText">Email</label>
                                <input type="text" id="helperText" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="helperText">Nama</label>
                                <input type="text" id="helperText" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="helperText">Email</label>
                                <input type="text" id="helperText" class="form-control" placeholder="Email">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
