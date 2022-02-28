@extends('adminPanel.layouts.app')

@section('content')

<h2 class="page-title"><small>Create</small> My Work </h2>
    
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <section class="widget">
                <div class="body">
                    <form class="no-margin" action="#" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="name" >Name Project</label>
                                <div class="input-addon">
                                    <input id="name" type="text" name="name" class="form-control input-lg input-transparent" placeholder="Your Name Project" autofocus value="{{ $mywork->name }}">
                                     @error('name')
                                        <div class="invalid-feedback" style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" >Image</label>
                                <div class="input-addon">
                                    <input id="image" type="file" name="image" class="form-control input-lg input-transparent" placeholder="Your Image">
                                     @error('image')
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