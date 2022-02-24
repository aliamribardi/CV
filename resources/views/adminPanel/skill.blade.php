<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <section class="widget">
                <header>
                    <h4>
                        Table <span class="fw-semi-bold">Skill</span>
                        @if (is_null($skillf))
                        <a href="{{ Route('createSkill') }}" class="pull-right">
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
                            <th style="width: 500px">Skill</th>
                            <th style="width: 400px">Percent</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($skills as $skill)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $skill->skill }}</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs js-progress-animate">
                                    <div class="progress-bar progress-bar-success" data-width="{{ $skill->percent.'%' }}" style="width: 0;"></div>
                                </div>
                            </td>
                            <td>
                                <a href="{{ Route('editSkill', $skill->id) }}"><i class="btn btn-default btn-sm mr-md glyphicon glyphicon-edit"></i></a>
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