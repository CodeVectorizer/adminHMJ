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

    <div class="container">

        <div class="row py-3">
            <!-- <div class="col-md-12"> -->
            <div class="col-md-8 col-sm-12">

                <div class="achieve col-md-10 my-2 ">
                    <div class="card">
                        <img src=" {{ asset('user/img/articles/article.png') }}" class="card-img-top" alt="...">

                        <div class="card-body lg">
                            <div class="card-head d-flex justify-content-between">
                                <a class="news-tag" href="#">Artikel</a>
                                <p class="news-date">02 August, 2021</p>
                            </div>
                            <h5 class="card-title pt-3">HMJTI TELAH MELAKUKAN
                                PELANTIKAN PENGURUS </h5>
                            <p class="card-text pt-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Earum,
                                deserunt. Fugit possimus, labore reiciendis autem consequatur illum odio quae
                                accusantium quaerat odit inventore corporis laboriosam deserunt sint. Vero sunt
                                fugit aliquam. Fugiat eaque iure dolore distinctio iste. Veritatis voluptatibus
                                fugiat ut ullam, ea ab laborum in culpa, id, saepe unde repellendus tenetur!
                                Pariatur quidem nisi eos fuga eaque! Quod veniam eaque fugiat incidunt possimus
                                quia
                                similique, adipisci voluptas praesentium, deleniti atque laborum? Doloribus
                                nulla
                                debitis accusantium sint, hic doloremque, tenetur iste incidunt numquam error,
                                expedita excepturi? Saepe autem eius aliquid architecto natus, tenetur
                                distinctio
                                reprehenderit provident nemo, ut numquam dolor.</p>
                            <a href="#" class="card-foot">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="achieve col-md-10 my-2">
                    <div class="card">
                        <img src=" {{ asset('user/img/articles/article.png') }}" class="card-img-top" alt="...">

                        <div class="card-body lg">
                            <div class="card-head d-flex justify-content-between">
                                <a class="news-tag" href="#">Artikel</a>
                                <p class="news-date">02 August, 2021</p>
                            </div>
                            <h5 class="card-title pt-3">HMJTI TELAH MELAKUKAN
                                PELANTIKAN PENGURUS </h5>
                            <p class="card-text pt-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Earum,
                                deserunt. Fugit possimus, labore reiciendis autem consequatur illum odio quae
                                accusantium quaerat odit inventore corporis laboriosam deserunt sint. Vero sunt
                                fugit aliquam. Fugiat eaque iure dolore distinctio iste. Veritatis voluptatibus
                                fugiat ut ullam, ea ab laborum in culpa, id, saepe unde repellendus tenetur!
                                Pariatur quidem nisi eos fuga eaque! Quod veniam eaque fugiat incidunt possimus
                                quia
                                similique, adipisci voluptas praesentium, deleniti atque laborum? Doloribus
                                nulla
                                debitis accusantium sint, hic doloremque, tenetur iste incidunt numquam error,
                                expedita excepturi? Saepe autem eius aliquid architecto natus, tenetur
                                distinctio
                                reprehenderit provident nemo, ut numquam dolor.</p>
                            <a href="#" class="card-foot">Read More</a>
                        </div>
                    </div>
                </div>
            </div>





            <!-- </div> -->
            <aside class="sidebar col-md-4 col-sm-12">
                <!-- <div class="col-md-12">
                    <h4 class="sidebar-title title-section">Kategori</h4>
                    <a class="subtitle-section">Beranda</a>
                    <a class="subtitle-section">Artikel</a>
                    <a class="subtitle-section">Profil HMJ TI</a>
                    <a class="subtitle-section">Kontak</a>
                </div> -->
                <div class="col-md-12 sidebar-link">
                    <h4 class="sidebar title-section">Berita Terbaru</h4>
                    <a class="subtitle-section article-link">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Quod
                        autem sit eveniet nostrum quam temporibus ex quia soluta cupiditate pariatur?</a>
                    <a class="subtitle-section article-link">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Quod
                        autem sit eveniet nostrum quam temporibus ex quia soluta cupiditate pariatur?</a>
                    <a class="subtitle-section article-link">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Quod
                        autem sit eveniet nostrum quam temporibus ex quia soluta cupiditate pariatur?</a>
                    <a class="subtitle-section article-link">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Quod
                        autem sit eveniet nostrum quam temporibus ex quia soluta cupiditate pariatur?</a>
                </div>
                <div class="col-md-12 sidebar-link">
                    <h4 class="sidebar title-section">Kategori</h4>
                    <ul>
                        <li><a class="subtitle-section">Artikel</a></li>
                        <li><a class="subtitle-section">Event</a></li>
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
