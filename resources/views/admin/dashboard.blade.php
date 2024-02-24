@extends('layout.app')
@section('konten')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
               <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>DataTable</h3>
                                <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks
                                    to simple-datatables.</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data User</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h5 class="card-title ">
                                    Data User
                                </h5>
                                <a href="{{ url('admin/dashboard/create') }}" class="btn btn-primary">Tambah User</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive datatable-minimal">
                                    <table class="table table-striped" id="table2">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>City</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Emmanuel</td>
                                                <td>eget.lacus.Mauris@feugiatSednec.org</td>
                                                <td>(016977) 8208</td>
                                                <td>Saint-Remy-Geest</td>
                                                <td>
                                                    <a href="edit_user.html" class="btn btn-primary">Edit</a>
                                                    <a href="delete_user.html" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="page-content">
                            <section class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Our Locatian</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5756517582654!2d106.63685673618363!3d-6.187498721984438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f929162547c7%3A0xbbf35137362e584d!2sSMK%20Negeri%204%20Kota%20Tangerang!5e0!3m2!1sid!2sid!4v1708133287244!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-xl-4">
                                        </div>
                                        <div class="col-12 col-xl-8">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                </div>
                            </section>
                        </div>
             </section>
        </div>
    </header>
@endsection
