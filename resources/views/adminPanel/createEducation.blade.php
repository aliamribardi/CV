@extends('adminPanel.layouts.app')

@section('content')

<h2 class="page-title"><small>Create</small> Education </h2>
    
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <section class="widget">
                <div class="body">
                    <form class="no-margin" action="{{ Route('storeEducation') }}" method="POST">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="school" >School</label>
                                <div class="input-addon">
                                    <input id="school" type="text" name="school" class="form-control input-lg input-transparent" placeholder="School" autofocus>
                                     @error('school')
                                        <div class="invalid-feedback" style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="program_study" >Program Study</label>
                                <div class="input-addon">
                                    <input id="program_study" type="text" name="program_Study" class="form-control input-lg input-transparent" placeholder="Program Study">
                                     @error('program_Study')
                                        <div class="invalid-feedback" style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="year" >Year</label>
                                <div class="input-addon">
                                    <input id="year" type="text" name="year" class="form-control input-lg input-transparent" placeholder="Year">
                                     @error('year')
                                        <div class="invalid-feedback" style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
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