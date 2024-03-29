@extends('adminPanel.layouts.app')

@section('content')

<h2 class="page-title"><small>Create</small> My Work </h2>
    
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <section class="widget">
                <div class="body">
                    <form class="no-margin" action="{{ Route('updatemyWork', $mywork->id) }}" method="POST" enctype="multipart/form-data">
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
                                    <input type="hidden" name="oldImage" value="{{ $mywork->image }}">
                                    <img class="img-preview img-fluid mb-3 col-sm-5">   
                                    <input id="image" type="file" name="image" class="form-control input-lg input-transparent" onchange="previewImage()">
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

<script>
    function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>
    
    
@endsection