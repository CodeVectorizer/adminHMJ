@extends('admin.layouts.master')

@section('title', 'Admin - Edit Pengurus')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Pengurus</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Edit-Pengurus</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="{{route('update.pengurus', ['id' => $data->id_pengurus])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ $data->nim }}" required>
                  @error('nim')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $data->nama }}" required>
                  @error('nama')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ $data->no_hp }}" required>
                  @error('no_hp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Angkatan</label>
                  <input type="text" class="form-control @error('angkatan') is-invalid @enderror" name="angkatan" value="{{ $data->angkatan }}" required>
                  @error('angkatan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Prodi</label>
                  <select class="form-control @error('prodi') is-invalid @enderror" name="id_prodi" value="{{ $data->id_prodi }}">
                    @foreach($prodi as $prodis)
                      @if($data->id_prodi == $prodis->id_prodi)
                        <option value="{{$prodis->id_prodi}}" selected>{{$prodis->prodi}}</option>
                      @else
                        <option value="{{$prodis->id_prodi}}">{{$prodis->prodi}}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('prodi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control @error('jabatan') is-invalid @enderror" name="id_jabatan" value="{{ $data->id_jabatan }}">
                    @foreach($jabatan as $jabatans)
                      @if($data->id_jabatan == $jabatans->id_jabatan)
                        <option value="{{$jabatans->id_jabatan}}" selected>{{$jabatans->jabatan}}</option>
                      @else
                        <option value="{{$jabatans->id_jabatan}}">{{$jabatans->jabatan}}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('jabatan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Biro</label>
                  <select class="form-control @error('biro') is-invalid @enderror" name="id_biro" value="{{ $data->id_biro }}">
                    @foreach($biro as $biros)
                      @if($data->id_biro == $biros->id_biro)
                        <option value="{{$biros->id_biro}}" selected>{{$biros->biro}}</option>
                      @else
                        <option value="{{$biros->id_biro}}">{{$biros->biro}}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('biro')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="btn" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
