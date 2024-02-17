@extends('layout.app1')
@section('konten1')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit User</h3>
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
                    <h4 class="card-title">Edit User</h4>
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
                                <small class="text-muted">eg.<i>someone@example.com</i></small>
                                <input type="text" class="form-control" id="helpInputTop">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Email</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="disabledInput">Nama</label>
                                <input type="text" class="form-control" id="disabledInput" placeholder="Disabled Text">
                            </div>
                            <div class="form-group">
                                <label for="readonlyInput">No telpon</label>
                                <input type="text" class="form-control" id="readonlyInput" readonly="readonly"
                                    value="You can't update me :P">
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Alamat</label>
                                <input type="text" class="form-control" id="" placeholder="Alamat">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
