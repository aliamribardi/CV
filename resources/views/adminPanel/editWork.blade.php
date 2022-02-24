@extends('adminPanel.layouts.app')

@section('content')

<h2 class="page-title"><small>Create</small> Work </h2>
    
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <section class="widget">
                <div class="body">
                    <form class="no-margin" action="#" method="POST">
                        @method('PUT')
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="company" >Company</label>
                                <div class="input-addon">
                                    <input id="company" type="text" name="company" class="form-control input-lg input-transparent" placeholder="Company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="position" >Position</label>
                                <div class="input-addon">
                                    <input id="position" type="text" name="position" class="form-control input-lg input-transparent" placeholder="Position">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="year_of_entry" >Year Of Entry</label>
                                <div class="input-addon">
                                    <input id="year_of_entry" type="text" name="year_of_entry" class="form-control input-lg input-transparent" placeholder="Year Of Entry">
                                </div>
                            </div>    
                            <div class="form-group">
                                <label for="year_out" >Year Out</label>
                                <div class="input-addon">
                                    <input id="year_out" type="text" name="year_out" class="form-control input-lg input-transparent" placeholder="Year Out">
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