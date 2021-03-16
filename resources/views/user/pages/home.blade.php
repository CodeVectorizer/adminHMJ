@extends('user.layouts.master')

@section('content')
    <main>
        <!-- <div class="container-fluid"> -->
        <div class="section-1">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="display">
                            <h1 class="title title-section-1">SELAMAT DATANG DI WEBSITE HMJTI POLIJE</h1>
                            <p class="subtitle-section-1">“Bersinergi dari hati, berdedikasi untuk TI”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->

        <div class="section-2 ">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-6">
                        <h2 class="center title-section px-5">HMJ TEKNOLOGI INFORMASI POLITEKNIK NEGERI JEMBER</h2>
                        <p class="subtitle-section">Himpunan Mahasiswa Jurusan Teknologi Informasi adalah
                            organisasi
                            mahasiswa yang berada di jurusan teknologi informasi</p>
                    </div>
                </div>
            </div>
            <div class="class-visi">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title-section">
                                VISI HMJ TEKNOLOGI INFORMASI
                            </h2>
                            <p class="subtitle-section-2">
                                Mewujudkan mahasiswa yang bla bla bla bla bla bla bla bla bla bla bla bla
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                                bla bla
                                bla
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                                bla bla
                                bla
                            </p>
                        </div>
                        <div class="col-md-6 img-caption">
                            <img src="{{asset('user/img/pengurus/alvin 1.png')}}" class="foto-pengurus " data-aos="fade-left" alt="">
                            <div class="caption" data-aos="fade-up">
                                <p class="title-caption">Alvin Eko</p>
                                <p class="subtitle-caption">Ketua HMJTI 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="class-misi">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 img-caption">
                            <img src="{{asset('user/img/pengurus/bambang 1.png')}}" class="foto-pengurus " data-aos="fade-right"
                                alt="">
                            <div class="caption" data-aos="fade-up">
                                <p class="title-caption">Bambang Suratno</p>
                                <p class="subtitle-caption">Wakil Ketua HMJTI 2021</p>
                            </div>
                        </div>
                        <div class="col-md-6 pt-3">
                            <h2 class="title-section">
                                MISI HMJ TEKNOLOGI INFORMASI
                            </h2>
                            <div class="subtitle-section">
                                <span>1.</span>
                                <div class="subtile-section-text">Membawa HMJTI menjadi yang terdepan</div>
                            </div>
                            <div class="subtitle-section">
                                <span>2.</span>
                                <div class="subtile-section-text">Membawa HMJTI menjadi yang terdepan</div>
                            </div>
                            <div class="subtitle-section">
                                <span>3.</span>
                                <div class="subtile-section-text">Membawa HMJTI menjadi yang terdepan</div>
                            </div>
                            <div class="subtitle-section">
                                <span>4.</span>
                                <div class="subtile-section-text">Membawa HMJTI menjadi yang terdepan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-3" id="section-3">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-6">
                        <h2 class="center title-section px-5">BERITA TERBARU</h2>
                    </div>
                </div>

                <div class="row py-3 justify-content-center">
                    @foreach ($data as $artikel)
                    <div class="col-md-4 col-sm-10 my-3">
                        <div class="card border-0 shadow">
                            <a href="blog.html"><img src=" {{asset('user/img/articles/article.png')}}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <div class="card-head d-flex justify-content-between">
                                    <a class="news-tag" href="#">{{ $artikel->kategori->kategori }}</a>
                                    <p class="news-date">{{ \Carbon\Carbon::parse($artikel->tanggal_update)->diffForHumans() }}</p>
                                </div>
                                <h5 class="card-title"><a href="blog.html">{{ $artikel->judul}}</a></h5>

                                <p class="card-text">{{ Str::substr($artikel->isi, 0, 100) }}....</p>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <p class="publisher"><i class="fas fa-user fa-sm"></i>&nbsp<span>{{ $artikel->penulis}}</span></p>
                                    <a href="blog/{{ $artikel->slug }}" class="card-foot">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12 d-flex justify-content-center bot-section3">
                        <a href="/blog" class="btn btn-load">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
