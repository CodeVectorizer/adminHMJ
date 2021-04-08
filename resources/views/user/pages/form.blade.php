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
        <center>
            <h3>FORM PENDAFTARAN HMJTI</h3>
        </center>
    </div>
</div>

@endsection
