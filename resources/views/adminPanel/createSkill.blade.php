@extends('adminPanel.layouts.app')

@section('content')

<h2 class="page-title"><small>Create</small> Skill </h2>
    
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <section class="widget">
                <div class="body">
                    <form class="no-margin" action="index.html" method="get">
                        <fieldset>
                            <div class="form-group">
                                <label for="skill" >Skill</label>
                                <div class="input-addon">
                                    <input id="skill" type="text" class="form-control input-lg input-transparent" placeholder="Your skill">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="percent" >Percent</label>
                                <div class="input-addon">
                                    <input id="percent" type="text" class="form-control input-lg input-transparent" placeholder="Your percent">
                                </div>
                            </div>                       
                        </fieldset>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-block btn-lg btn-danger">
                                <span class="small-circle"><i class="fa fa-caret-right"></i></span>
                                <small>Create Data</small>
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
    
@endsection