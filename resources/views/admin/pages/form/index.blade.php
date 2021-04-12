@extends('admin.layouts.master')

@section('title', 'Admin - List Form')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>List Form</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">List-Form</div>
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
                <table class="table table-striped" id="tabel-form">
                  <thead>
                    <tr>
                      <th>ID form</th>
<<<<<<< HEAD
=======
                      <th>Slug</th>
>>>>>>> 17fa5fc8032a3b91e460ccaa86ab95cb67cf7710
                      <th>Judul Form</th>
                      <th>Deskripsi (opsional)</th>
                      <th>Contact Person</th>
                      <th>Link Form</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $form)
                    <tr>
                      <td>{{$form->id_form}}</td>
<<<<<<< HEAD
=======
                      <td>{{$form->slug}}</td>
>>>>>>> 17fa5fc8032a3b91e460ccaa86ab95cb67cf7710
                      <td>{{$form->judul_form}}</td>
                      <td>{{$form->deskripsi}}</td>
                      <td>{{$form->contact_person}}</td>
                      <td>{{$form->link_form}}</td>
                      <td>{{$form->date}}</td>
                      <td>
                        <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#exampleModaledit{{ $loop->iteration }}"> <i class="fa fa-edit"></i> </a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $loop->iteration }}"> <i class="fa fa-trash"></i> </a>
                      </td>
                    </tr>
                    @endforeach
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('add.form')}}" method="post">
        <div class="modal-body">
          {{csrf_field()}}
          <div class="form-group">
<<<<<<< HEAD
=======
            <label>Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" required>
          </div>
          @error('slug')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="form-group">
>>>>>>> 17fa5fc8032a3b91e460ccaa86ab95cb67cf7710
            <label>Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required>
          </div>
          @error('judul')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required></textarea>
          </div>
          @error('deskripsi')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="form-group">
            <label>Contact Person</label>
            <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required>
          </div>
          @error('contact')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="form-group">
            <label>Link Embed</label>
            <input type="text" class="form-control @error('linkEmbed') is-invalid @enderror" name="linkEmbed" value="{{ old('linkEmbed') }}" required>
          </div>
          @error('linkEmbed')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
@foreach($data as $form2)
<div class="modal fade" id="exampleModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          Apakah kamu yakin untuk menghapusnya ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="{{ route('delete.form', ['id' => $form2->id_form])}}" type="submit" class="btn btn-danger">Hapus</a>
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModaledit{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Form {{$form2->judul}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('update.form', ['id' => $form2->id_form])}}" method="post">
        <div class="modal-body">
          {{csrf_field()}}
          <div class="form-group">
<<<<<<< HEAD
=======
            <label>Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ $form2->slug }}" required>
          </div>
          @error('slug')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="form-group">
>>>>>>> 17fa5fc8032a3b91e460ccaa86ab95cb67cf7710
            <label>Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $form2->judul_form }}" required>
          </div>
          @error('judul')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required>{{$form2->deskripsi}}</textarea>
          </div>
          @error('deskripsi')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="form-group">
            <label>Contact Person</label>
            <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ $form2->contact_person }}" required>
          </div>
          @error('contact')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="form-group">
            <label>Link Embed</label>
            <input type="text" class="form-control @error('linkEmbed') is-invalid @enderror" name="linkEmbed" value="{{ $form2->link_form }}" required>
          </div>
          @error('linkEmbed')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection
@section('js-pages')
<script type="text/javascript">
  $(document).ready(function() {
    $('#tabel-form').DataTable();
  });
  </script>
@endsection
