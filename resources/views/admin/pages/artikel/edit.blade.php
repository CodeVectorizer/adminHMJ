@extends('admin.layouts.master')

@section('title', 'Admin - Tambah Artikel')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Artikel</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Tambah-Artikel</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <form action="{{route('add.artikel')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control  @error('judul') is-invalid @enderror" name="judul"  value="{{$data->judul}}" required>
                        @error('judul')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" value="{{$data->penulis}}" required>
                        @error('penulis')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control @error('kategori') is-invalid @enderror" name="id_kategori" >
                          @foreach($kategori as $item)                          
                          @if ($item->id_kategori == $data->id_kategori)
                            <option value="{{$item->id_kategori}}" selected>{{$item->kategori}}</option>                              
                          @else
                            <option value="{{$item->id_kategori}}">{{$item->kategori}}</option>                              
                          @endif
                          @endforeach
                        </select>
                        @error('kategori')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control value="{{$data->gambar}}"">
                      </div>
                      <div class="form-group">
                        <label>Tanggal Penulisan</label>
                        <input type="date" class="form-control @error('tanggal_penulisan') is-invalid @enderror" name="tanggal_penulisan" value="{{Carbon::parse($data->tanggal_penulisan)->format('Y-m-d')}}" required>
                        @error('tanggal_penulisan')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label>Isi</label>
                        <textarea class="form-control" id="summernote" name="isi" rows="" cols="20">
                            {{$data->isi}}
                        </textarea>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </div>
                   
                </form>             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
</div>
<script>
    $(document).ready(function() {
    $('#summernote').summernote({
        placeholder: 'Isi Artikel',
        tabsize: 2,
        height: 200
    });
});
// document.addEventListener("DOMContentLoaded", function() {
//   document.getElementById('summernote').summernote();
// });
</script>
@endsection
