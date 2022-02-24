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
                            <th style="width: 400px">School</th>
                            <th style="width: 300px">Program Study</th>
                            <th style="width: 200px">Year</th>
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
                        @if (is_null($abouts))
                            <p>Insert Data</p>
                        @endif
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>