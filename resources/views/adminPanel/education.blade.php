<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <section class="widget">
                <header>
                    <h4>
                        Table <span class="fw-semi-bold">Education</span>
                        <a href="{{ Route('createEducation') }}" class="pull-right">
                            <button class="btn btn-default btn-sm mr-md">Add Data</button>
                        </a>
                    </h4>
                </header>
                <div class="body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>School</th>
                            <th>Program Study</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($educations as $education)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $education->school }}</td>
                            <td>{{ $education->program_Study }}</td>
                            <td>{{ $education->year }}</td>
                            <td>
                                <a href="{{ Route('editEducation', $education->id) }}"><i class="btn btn-default btn-sm mr-md glyphicon glyphicon-edit"></i></a>
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