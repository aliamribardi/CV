@extends('adminPanel.layouts.app')

@section('content')

<h2 class="page-title"><small>Edit</small> Skill </h2>
    
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <section class="widget">
                <div class="body">
                    <form class="no-margin" action="{{ Route('updateSkill', $skills->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="skill" >Skill</label>
                                <div class="input-addon">
                                    <input id="skill" type="text" name="skill" class="form-control input-lg input-transparent" placeholder="Skill" value="{{ $skills->skill }}" autofocus>
                                     @error('skill')
                                        <div class="invalid-feedback" style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="percent" >Percent</label>
                                <div class="input-addon">
                                    <input id="percent" type="text" name="percent" class="form-control input-lg input-transparent" placeholder="Percent" value="{{ $skills->percent }}">
                                     @error('percent')
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