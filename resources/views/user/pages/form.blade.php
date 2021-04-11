@extends('user.layouts.master')
@section('content')

<div class="main">
    <div class="section">
        <div class="title-heading">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mx-0">Form</h1>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>{{ request()->segment(1) }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form-title">
            <h3 class="mt-5">FORM PENDAFTARAN HMJTI</h3>
        </div>
        <div class="form-desc">
            <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, temporibus amet rem
                incidunt saepe aut at cupiditate placeat id perferendis nostrum quidem quo maxime fugiat quisquam totam.
                Aut, facilis eligendi!
            </p>
        </div>
        <div class="form-container col-12 justify-content-center">
            <div class="form-wrapper">
                <iframe
                    src="https://docs.google.com/forms/d/e/1FAIpQLSe3gS6pamkceCh1zer0-ZpfeVxJ5anWTSis5rj1ud34k-OtBw/viewform?embedded=true"
                    width="640" height="720" frameborder="0" marginheight="0" marginwidth="0"
                    class="mt-3">Loading…</iframe>
            </div>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
            <a href="#" class="btn btn-cp"><i class="fab fa-whatsapp"></i><span> Ada pertanyaan? Klik disini</span></a>
        </div>
    </div>
</div>

@endsection
