<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <section class="widget">
                <header>
                    <h4>
                        Table <span class="fw-semi-bold">My Work</span>
                        <a href="{{ Route('createmyWork') }}" class="pull-right">
                            <button class="btn btn-default btn-sm mr-md">Add Data</button>
                        </a>
                    </h4>
                </header>
                <div class="body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th style="width: 700px">Project</th>
                            <th style="width: 200px">Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($myworks as $mywork)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mywork->name }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $mywork->image) }}" alt="" style="height: 50px; width: 50px">
                            </td>
                            <td>
                                <a href="#"><i class="btn btn-default btn-sm mr-md glyphicon glyphicon-edit"></i></a>
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