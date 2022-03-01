@extends('adminPanel.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <section class="widget">
                <header>
                    <h4>
                        Table <span class="fw-semi-bold">Contact</span>
                        <a href="#" class="pull-right">
                            <button class="btn btn-default btn-sm mr-md">Add Data</button>
                        </a>
                    </h4>
                </header>
                <div class="body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th style="width: 200px">Name</th>
                            <th style="width: 200px">E-Mail</th>
                            <th style="width: 200px">Subject</th>
                            <th style="width: 400px">Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ Illuminate\Support\Str::substr($contact->message, 0, 60) }}...</td>
                            <td>
                                <a href="{{ Route('showContact', $contact->id) }}"><i class="btn btn-default btn-sm mr-md fa fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <div class="clearfix">
                        @if (is_null($contacts))
                            <p>Insert Data</p>
                        @endif
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection