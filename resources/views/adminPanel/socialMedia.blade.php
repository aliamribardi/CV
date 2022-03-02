<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <section class="widget">
                <header>
                    <h4>
                        Table <span class="fw-semi-bold">Social Media</span>
                        <a href="{{ Route('createSosmed') }}" class="pull-right">
                            <button class="btn btn-default btn-sm mr-md">Add Data</button>
                        </a>
                    </h4>
                </header>
                <div class="body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 200px">Facebook</th>
                            <th style="width: 200px">Twitter</th>
                            <th style="width: 200px">Google Plus</th>
                            <th style="width: 200px">Linkedin</th>
                            <th style="width: 200px">Instagram</th>
                            <th style="width: 200px">Dribbble</th>
                            <th style="width: 200px">Skype</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                @if (!is_null($sosmeds->facebook))
                                    <a href="{{ $sosmeds->facebook }}" target="__blank"><i class="btn btn-default btn-sm mr-md fa fa-facebook"></i></a>
                                @endif
                            </td>
                            <td>
                                @if (!is_null($sosmeds->twitter))
                                    <a href="{{ $sosmeds->twitter }}" target="__blank"><i class="btn btn-default btn-sm mr-md fa fa-twitter"></i></a>
                                @endif
                            </td>
                            <td>
                                @if (!is_null($sosmeds->google_plus))
                                    <a href="{{ $sosmeds->google_plus }}" target="__blank"><i class="btn btn-default btn-sm mr-md fa fa-google-plus"></i></a>
                                @endif
                            </td>
                            <td>
                                @if (!is_null($sosmeds->linkedin))
                                    <a href="{{ $sosmeds->linkedin }}" target="__blank"><i class="btn btn-default btn-sm mr-md fa fa-linkedin"></i></a>
                                @endif
                            </td>
                            <td>
                                @if (!is_null($sosmeds->instagram))
                                    <a href="{{ $sosmeds->instagram }}" target="__blank"><i class="btn btn-default btn-sm mr-md fa fa-instagram"></i></a>
                                @endif
                            </td>
                            <td>
                                @if (!is_null($sosmeds->dribbble))
                                    <a href="{{ $sosmeds->dribbble }}" target="__blank"><i class="btn btn-default btn-sm mr-md fa fa-dribbble"></i></a>
                                @endif
                            </td>
                            <td>
                                @if (!is_null($sosmeds->skype))
                                    <a href="{{ $sosmeds->skype }}" target="__blank"><i class="btn btn-default btn-sm mr-md fa fa-skype"></i></a>
                                @endif
                            </td>
                            <td>
                                <a href="#"><i class="btn btn-default btn-sm mr-md glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                        </tbody>

                    </table>
                    {{-- <div class="clearfix">
                        @if (is_null($abouts))
                            <p>Insert Data</p>
                        @endif
                    </div> --}}
                </div>
            </section>
        </div>
    </div>
</div>