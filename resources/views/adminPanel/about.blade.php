<div class="container">
    <div class="row">
        <div class="col-md-11">
            <section class="widget">
                <header>
                    <h4>
                        Table <span class="fw-semi-bold">About Me</span>
                        @if (is_null($abouts))
                        <a href="{{ Route('createAbout') }}" class="pull-right">
                            <button class="btn btn-default btn-sm mr-md">Add Data</button>
                        </a>
                        @endif
                    </h4>
                </header>
                <div class="body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="hidden-xs">#</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th class="hidden-xs">About Me</th>
                            <th class="hidden-xs">image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($aboutData as $about)
                        <tr>
                            <td class="hidden-xs">{{ $loop->iteration  }}</td>
                            <td>{{ $about->address }}</td>
                            <td class="hidden-xs">{{ $about->phone_number }}</td>
                            <td class="hidden-xs">{{ $about->about_me }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->address }}" class=" mt-3 d-block" style="height: 50px; width: 50px;">
                            </td>
                            <td>
                                <a href="{{ Route('editAbout', $about->id) }}"><i class="btn btn-default btn-sm mr-md glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <div class="clearfix">
                        @if (is_null($abouts))
                            <p>Insert Data</p>
                        @endif
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

