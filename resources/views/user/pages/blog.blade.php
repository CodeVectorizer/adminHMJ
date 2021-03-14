@extends('user.layouts.master')

@section('content')
<main>
    <div class="section">
        <div class="title-heading">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mx-0">Berita HMJTI</h1>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>{{ request()->segment(1) }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row py-3">
            <!-- <div class="col-md-12"> -->
            <div class="col-md-8 col-sm-12">
                @foreach ($data['blogs'] as $artikel)

                <div class="achieve col-md-10 my-2 ">
                    <div class="card">
                        <img src=" {{ asset('user/img/articles/'.$artikel->gambar) }}" class="card-img-top" alt="...">

                        <div class="card-body lg">
                            <div class="card-head d-flex justify-content-between">
                                <a class="news-tag" href="#">{{ $artikel->kategori->kategori }}</a>
                                <p class="news-date">{{ \Carbon\Carbon::parse($artikel->tanggal_update)->diffForHumans() }}</p>
                            </div>
                            <h5 class="card-title pt-3">{{ $artikel->judul}}</a></h5>
                            <p class="card-text pt-1">{{ Str::substr($artikel->isi, 0, 250) }}........</p>
                            <a href="blog/{{ $artikel->slug }}" class="card-foot">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach




            </div>



            @include('user.layouts.blog-sidebar')


            {{-- Pagination --}}
            <div class=" mt-5 d-flex justify-content-center">
                {{ $data['blogs']->links() }}
            </div>
        </div>

    </div>

</main>
@endsection
