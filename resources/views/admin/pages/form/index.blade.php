@extends('admin.layouts.master')

@section('title', 'Admin - List Biro')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Management</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">form-management</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Form</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="tabel-biro">
                        <thead>
                          <tr>
                            <th>ID form</th>
                            <th>Judul Form</th>
                            <th>Deskripsi (opsional)</th>
                            <th>Contact Person</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>a</td>
                            <td>asd</td>
                            <td>asdasd</td>
                            <td>asdasd</td>
                            <td>
                              <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#exampleModaledit"> <i class="fa fa-edit"></i> </a>
                              <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-trash"></i> </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>
@endsection
