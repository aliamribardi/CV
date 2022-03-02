@extends('adminPanel.layouts.app')

@section('content')

<h2 class="page-title"><small>Create</small> Social Media </h2>
    
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <section class="widget">
                <div class="body">
                    <form class="no-margin" action="#" method="POST">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="facebook" >Facebook</label>
                                <div class="input-addon">
                                    <input id="facebook" type="text" name="facebook" class="form-control input-lg input-transparent" placeholder="facebook" autofocus>
                                     @error('facebook')
                                        <div class="invalid-feedback" style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="twitter" >Twitter</label>
                                <div class="input-addon">
                                    <input id="twitter" type="text" name="twitter" class="form-control input-lg input-transparent" placeholder="twitter" autofocus>
                                     @error('twitter')
                                        <div class="invalid-feedback" style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="google_plus" >Google Plus</label>
                                <div class="input-addon">
                                    <input id="google_plus" type="text" name="google_plus" class="form-control input-lg input-transparent" placeholder="google_plus" autofocus>
                                     @error('google_plus')
                                        <div class="invalid-feedback" style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="linkedin" >Linkedin</label>
                                <div class="input-addon">
                                    <input id="linkedin" type="text" name="linkedin" class="form-control input-lg input-transparent" placeholder="linkedin" autofocus>
                                     @error('linkedin')
                                        <div class="invalid-feedback" style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>  
                            <div class="form-group">
                                <label for="instagram" >Instagram</label>
                                <div class="input-addon">
                                    <input id="instagram" type="text" name="instagram" class="form-control input-lg input-transparent" placeholder="instagram" autofocus>
                                     @error('instagram')
                                        <div class="invalid-feedback" style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>   
                            <div class="form-group">
                                <label for="dribbble" >Dribbble</label>
                                <div class="input-addon">
                                    <input id="dribbble" type="text" name="dribbble" class="form-control input-lg input-transparent" placeholder="dribbble" autofocus>
                                     @error('dribbble')
                                        <div class="invalid-feedback" style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>  
                            <div class="form-group">
                                <label for="skype" >Skype</label>
                                <div class="input-addon">
                                    <input id="skype" type="text" name="skype" class="form-control input-lg input-transparent" placeholder="skype" autofocus>
                                     @error('skype')
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