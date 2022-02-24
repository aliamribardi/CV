<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <section class="widget">
                <header>
                    <h4>
                        Table <span class="fw-semi-bold">Work</span>
                        <a href="{{ Route('createWork') }}" class="pull-right">
                            <button class="btn btn-default btn-sm mr-md">Add Data</button>
                        </a>
                    </h4>
                </header>
                <div class="body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="hidden-xs">#</th>
                            <th style="width: 400px">Company</th>
                            <th style="width: 200px">Position</th>
                            <th style="width: 150px">Year Of Entry</th>
                            <th style="width: 150px">Year Out</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($works as $work)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $work->company }}</td>
                            <td>{{ $work->position }}</td>
                            <td>{{ $work->year_of_entry }}</td>
                            <td>{{ $work->year_out }}</td>
                            <td>
                                <a href="{{ Route('editWork', $work->id) }}"><i class="btn btn-default btn-sm mr-md glyphicon glyphicon-edit"></i></a>
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