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
                            <th>Company</th>
                            <th>Position</th>
                            <th class="hidden-xs">Year Of Entry</th>
                            <th class="hidden-xs">Year Out</th>
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
                        <div class="pull-right">
                            <button class="btn btn-default btn-sm mr-md">
                                Send to ...
                            </button>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-inverse dropdown-toggle" data-toggle="dropdown">
                                    &nbsp; Clear &nbsp;
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Clear</a></li>
                                    <li><a href="#">Move ...</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <p>Basic table with styled content</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>