<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <section class="widget">
                <header>
                    <h4>
                        Table <span class="fw-semi-bold">Skill</span>
                        <a href="{{ Route('createSkill') }}" class="pull-right">
                            <button class="btn btn-default btn-sm mr-md">Add Data</button>
                        </a>
                    </h4>
                </header>
                <div class="body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="hidden-xs">#</th>
                            <th>Skill</th>
                            <th>Percent</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="hidden-xs">1</td>
                            <td>Palo Alto</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs js-progress-animate">
                                    <div class="progress-bar progress-bar-success" data-width="29%" style="width: 0;"></div>
                                </div>
                            </td>
                            <td>nnn</td>
                        </tr>
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