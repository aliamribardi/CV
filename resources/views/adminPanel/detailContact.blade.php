@extends('adminPanel.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <section class="widget">
                <header>
                    <h4>
                        Detail <span class="fw-semi-bold">Contact</span>
                        <a href="{{ Route('Contact') }}" class="pull-right">
                            <button class="btn btn-default btn-sm mr-md">Back to Contact</button>
                        </a>
                    </h4>
                </header>
                <div class="body">
                    <div class="row">
                        {{-- <div class="col-md-1"></div> --}}
                        <div class="col-md-3">
                            <h1>Name</h1>
                            <h1>E-Mail</h1>
                            <h1>Subject</h1>
                            <h1>Message</h1>
                        </div>
                        <div class="col-md-1">
                            <h1>:</h1>
                            <h1>:</h1>
                            <h1>:</h1>
                            <h1>:</h1>
                        </div>
                        <div class="col-md-8">
                            <h1>{{ $contactt->name }}</h1>
                            <h1>{{ $contactt->email }}</h1>
                            <h1>{{ $contactt->subject }}</h1>
                            <h1>{{ $contactt->message }}</h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection