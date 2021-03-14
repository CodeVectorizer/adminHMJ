@extends('user.layouts.master')

@section('content')
<main>
    <div class="section text-center">
        <div class="section">
            <div class="title-heading">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1>profil HMJTI</h1>
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li>{{ request()->segment(1) }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5 daftar-pengurus">
            <div class="row">
                <div class="col-md-12">
                    <div class="img-wrapper"><img class="struktur-img" src="{{asset('user/img/struktur.png')}}"
                        alt="image">
                </div>
                <div class="col-md-12 ">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <h2 class="title-section center-line">
                                    VISI HMJ TEKNOLOGI INFORMASI
                                </h2>
                                <div class="subtitle-section">
                                    <p class="subtitle-section-text py-3">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima enim
                                        praesentium unde commodi quia eos repellat error obcaecati. Alias ratione
                                        velit impedit dicta voluptatum! Nesciunt cumque omnis iusto ut quibusdam
                                        tenetur quos magnam dolorem a perferendis, aliquam pariatur, itaque
                                        assumenda sed harum impedit, corrupti dicta blanditiis quo unde? Omnis hic
                                        voluptatibus magnam sed accusamus mollitia sit non corporis vitae quis,
                                        assumenda enim, deserunt aliquid inventore aspernatur itaque ratione facilis
                                        temporibus consectetur saepe nobis? Quae consequuntur nostrum eaque qui,
                                        iusto, repellat impedit in itaque rerum alias accusantium eos quaerat at
                                        praesentium sunt enim eveniet quasi quia doloremque placeat perferendis ad
                                        voluptates.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 pt-3">
                                <h2 class="title-section center-line">
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
                <div class="col-md-12 ">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 pt-3">
                                <h2 class="title-section center-line">
                                    MOTO HMJ TEKNOLOGI INFORMASI 2021
                                </h2>
                                <div class="subtitle-section">
                                    <p class="subtitle-section-text py-3">“Bersinergi dari hati, berdedikasi untuk
                                        TI”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <!-- KAHIM dan WAKAHIM -->
            <div class="row justify-content-center">
                <div class="col-md-12 py-3">
                    <h2 class="title-section center-line">
                        STRUKTUR ORGANISASI HMJ TI 2021
                    </h2>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/alvin.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Alvin Eko Cahyo</p>
                        <p class="subtitle-caption">Ketua HMJTI 2021</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/bambang.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Bambang Suratno</p>
                        <p class="subtitle-caption">Wakil Ketua HMJTI 2021</p>
                    </div>
                </div>
            </div>
            <hr>






            <!-- SEKRETARIS DAN BEDAHARA -->
            <div class="row">
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/winda.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class=" caption py-1" data-aos="fade-in">
                        <p class="title-caption">Winda Budi Lestari</p>
                        <p class="subtitle-caption">Sekretaris 1</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/mita.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Mita Wafa Wulandari</p>
                        <p class="subtitle-caption">Sekretaris 2</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/eka.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class=" caption py-1" data-aos="fade-in">
                        <p class="title-caption">Eka Fahrika</p>
                        <p class="subtitle-caption">Bendahara</p>
                    </div>
                </div>
            </div>
            <hr>









            <!-- DEPT. Administrasi -->
            <div class="row">
                <div class="col-md-12 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/fina.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Rofina Aulia</p>
                        <p class="subtitle-caption">Kadep Administrasi</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 img-caption order-1 order-md-1 mt-3">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/yoga.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Hermawan Yoga</p>
                        <p class="subtitle-caption">CO Biro Kesekretariatan</p>
                    </div>
                </div>
                <div class="col-md-6 img-caption order-4 order-md-2 mt-3">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/fahmi.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Fahmi Ubaidillah</p>
                        <p class="subtitle-caption">Co Biro Sarpras</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-2 order-md-3">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/erlinda.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Erlinda Kristanti</p>
                        <p class="subtitle-caption">Anggota Biro Kesekretariatan</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-3 order-md-4">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/sinta.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Shinta Nuriyah</p>
                        <p class="subtitle-caption">Anggota Biro Kesekretariatan</p>
                    </div>
                </div>
                <div class="col-md-6 img-caption order-5 order-md-5">
                    <div class="col-md-6">
                        <div class="img-wrapper"><img src="{{asset('user/img/pengurus/ilmi.png') }}" class="foto-pengurus struktur"
                            data-aos="fade-down" alt=""></div>
                        <div class="caption py-1" data-aos="fade-in">
                            <p class="title-caption">Fikriatul Ilmi</p>
                            <p class="subtitle-caption">Anggota Biro Sarpras</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>







            <!-- DEPT. Keilmuan -->
            <div class="row">
                <div class="col-md-12 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/ageng.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Ageng Wijaya</p>
                        <p class="subtitle-caption">Kadep Administrasi</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 img-caption order-sm-1 order-md-1 mt-5">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/fara.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Kana Farira S</p>
                        <p class="subtitle-caption">CO Biro Multimedia</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption order-sm-4 order-md-2 mt-5">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/iqbal.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Iqbal Ikhlasul A.</p>
                        <p class="subtitle-caption">CO Biro Sistem Informasi</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption order-sm-7 order-md-3 mt-5">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/rafli.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Tahajuddin</p>
                        <p class="subtitle-caption">Co Biro Gamedev</p>
                    </div>
                </div>

                <div class="col-md-2 img-caption order-sm-2 order-md-4 ">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/pras.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Dwi Prasetyo</p>
                        <p class="subtitle-caption">Anggota Biro Multimedia</p>
                    </div>
                </div>
                <div class="col-md-2 img-caption order-sm-3 order-md-5 ">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/vivi.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Vivi Handayani</p>
                        <p class="subtitle-caption">Anggota Biro Multimedia</p>
                    </div>
                </div>
                <div class="col-md-2 img-caption order-sm-5 order-md-6 ">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/saifur.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Ahmad Saifur</p>
                        <p class="subtitle-caption">Anggota Biro Sistem Informasi</p>
                    </div>
                </div>
                <div class="col-md-2 img-caption order-sm-6 order-md-7 ">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/lukman.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Lukman Afandi</p>
                        <p class="subtitle-caption">Anggota Biro Sistem Informasi</p>
                    </div>
                </div>
                <div class="col-md-2 img-caption order-sm-8 order-md-8 ">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/dwiki.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Prasetyo Dwiki</p>
                        <p class="subtitle-caption">Anggota Biro Gamedev</p>
                    </div>
                </div>
                <div class="col-md-2 img-caption order-sm-9 order-md-9 ">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/indra.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Indra Wirawan</p>
                        <p class="subtitle-caption">Anggota Biro Gamedev</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 img-caption order-sm-1 order-md-1 mt-5">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/wahyu.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Wahyu Musthofa</p>
                        <p class="subtitle-caption">Co Biro Hardware</p>
                    </div>
                </div>
                <div class="col-md-6 img-caption order-sm-4 order-md-2 mt-5">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/igo.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Firgo Bahtiar</p>
                        <p class="subtitle-caption">CO Biro IT Support</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-2 order-md-3">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/saiful.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Saiful Bahri</p>
                        <p class="subtitle-caption">Anggota Biro Hardware</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-3 order-md-4">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/bayu.png')}}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Bayu Cahya Kurnia</p>
                        <p class="subtitle-caption">Anggota Biro Hardware</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-5 order-md-5">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/puja.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Puja Mahesa</p>
                        <p class="subtitle-caption">Anggota Biro IT Support</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-6 order-md-6">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/sirojudin.png') }}" class="foto-pengurus struktur"
                        data-aos="fade-down" alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Ahamd Sirojuddin</p>
                        <p class="subtitle-caption">Anggota Biro IT Support</p>
                    </div>
                </div>
            </div>
            <hr>





            <!-- DEPT. PERHUBUNGAN -->
            <div class="row">
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/sulis.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Sulistyawati</p>
                        <p class="subtitle-caption">Kadep Perhubungan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/decky.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Decky Setiawan</p>
                        <p class="subtitle-caption">CO Biro Eksternal</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption ">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/dayat.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">M. Hidayatullah</p>
                        <p class="subtitle-caption">Anggota Biro Eksternal</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/tyo.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Ardyas Setya N.</p>
                        <p class="subtitle-caption">Anggota Biro Eksternal</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/devi.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Devi Aryaningtyas</p>
                        <p class="subtitle-caption">Biro Internal MIF</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption ">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/hasan.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">M. Hasan</p>
                        <p class="subtitle-caption">Biro Internal TIF</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption ">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/nabila.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Tince Nabilah</p>
                        <p class="subtitle-caption">Biro Internal TKK</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/didin.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">M. Hafizhuddin</p>
                        <p class="subtitle-caption">Co Biro Kominfo</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/alvioni.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Alvioni Tineke</p>
                        <p class="subtitle-caption">Anggota Biro Kominfo</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/fafa.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Haris Faqih</p>
                        <p class="subtitle-caption">Anggota Biro Kominfo</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/nura.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Nur Afifah</p>
                        <p class="subtitle-caption">Anggota Biro Kominfo</p>
                    </div>
                </div>
            </div>
            <hr>








            <!-- DEPT. KEWIRAUSAHAAN -->
            <div class="row">
                <div class="col-md-12 img-caption">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/liga.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Liga Bayu</p>
                        <p class="subtitle-caption">Kadep Kewirausahaan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 img-caption order-sm-1 order-md-1">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/adi.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Adi Wijaya</p>
                        <p class="subtitle-caption">CO Biro Kewirausahaan</p>
                    </div>
                </div>
                <div class="col-md-6 img-caption order-sm-4 order-md-2">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/radit.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">Nanda Raditya</p>
                        <p class="subtitle-caption">Co Biro Usaha</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-2 order-md-3">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/udin.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">M. Syaifudin</p>
                        <p class="subtitle-caption">Anggota Biro Kewirausahaan</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-3 order-md-4">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/shafa.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Shafa Thalia</p>
                        <p class="subtitle-caption">Anggota Biro Kewirausahaan</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-5 order-md-5">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/ensas.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Vigo Ensas</p>
                        <p class="subtitle-caption">Anggota Biro Usaha</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-6 order-md-6">
                    <div class="img-wrapper"><img src="{{asset('user/img/pengurus/ruary.png') }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">Ruary Vina</p>
                        <p class="subtitle-caption">Anggota Biro Usaha</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
