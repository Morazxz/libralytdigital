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
                    <h3>Tambah User</h3>
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
                    <h4 class="card-title">Create User</h4>
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
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="post">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput">Nama</label>
                                    <input type="text" name="name" class="form-control" id="basicInput"
                                        placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <label for="helperText">Email</label>
                                    <small class="text-muted">eg.<i>someone@example.com</i></small>
                                    <input type="text" name="email" id="helperText" class="form-control"
                                        placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">Password</label>
                                    <input type="password" name="password" class="form-control" id="helpInputTop">
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">Role</label>
                                    <select name="role" class="form-control" id="helpInputTop">
                                        <option value="">pilih akses</option>
                                        <option value="admin">admin</option>
                                        <option value="peminjam">peminjam</option>
                                        <option value="petugas">petugas</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="disabledInput">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="" placeholder="Alamat">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
