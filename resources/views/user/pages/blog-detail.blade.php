@extends('user.layouts.master')

@section('content')
<main>
    <div class="section">
        <div class="title-heading">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mx-0">Berita HMJTI</h1>
                    <ol>
                        <li><a href="">Home</a></li>
                        <li>Artikel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">

        <div class="row py-3 ">            
            <div class="col-md-8 col-sm-12 ">
               <div class="blog_detail">
                   <h1>{{$data['blog']['judul']}}</h1>
               </div>

                <div class="d-flex justify-content-start align-items-center my-3">
                    <img src="{{ asset('user/img/user-default.png') }}" class="img-artikel" alt="">
                    <div class="ms-2 blog_detail_caption">
                        <span class="d-block fw-bold">{{$data['blog']['penulis']}}</span>
                        <span class="d-block">{{$data['blog']['tanggal_penulisan']}}</span>
                    </div>
                </div>

                <div class="blog_detail_img">
                    <img src=" {{ asset('user/img/articles/'.$data['blog']['gambar']) }}" class="card-img-top" alt="...">
                </div>
                
                
                <div class="mt-4 mb-5 text-left blog_detail ">
                    <p>{{$data['blog']['isi']}}</p>
                </div>
            </div>
          
    

            <aside class="sidebar col-md-4 col-sm-12">              
                <div class="col-md-12 sidebar-link">
                    <h4 class="sidebar title-section">Berita Terbaru</h4>
                    @foreach ($data['blogsTab'] as $artikel)                        
                        <a href="{{ route('blog.detail',['artikel' => $artikel->slug]) }}" class="subtitle-section article-link">{{ $artikel->judul }}</a>                   
                    @endforeach
                </div>
                <div class="col-md-12 sidebar-link">
                    <h4 class="sidebar title-section">Kategori</h4>
                    <ul>
                        <li> <a href="{{ route('blog.kategori',['kategori' => 'artikel']) }}" class="subtitle-section">Artikel</a></li>

                        <li> <a href="{{ route('blog.kategori',['kategori' => 'event']) }}" class="subtitle-section">Event</a></li>
                    </ul>
                </div>
                <div class="col-md-12 sidebar-link">
                    <h4 class="sidebar title-section">Link</h4>
                    <ul>
                        <li><a class="subtitle-section">Politeknik Negeri Jember</a></li>
                        <li><a class="subtitle-section">Jurusan Teknologi Informasi
                                Polije</a></li>
                    </ul>
                </div>
            </aside>
                       
        </div>

    </div>

</main>
@endsection
