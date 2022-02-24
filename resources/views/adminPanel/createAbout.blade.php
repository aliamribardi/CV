@extends('adminPanel.layouts.app')

@section('content')

<h2 class="page-title"><small>Create</small> About Me </h2>
    
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <section class="widget">
                <div class="body">
                    <form class="no-margin" action="{{ Route('storeAbout') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="address" >Address</label>
                                <div class="input-addon">
                                    <input id="address" type="text" name="address" class="form-control input-lg input-transparent" placeholder="Your Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone_number" >Phone Number</label>
                                <div class="input-addon">
                                    <input id="phone_number" type="text" name="phone_number" class="form-control input-lg input-transparent" placeholder="Your phone_number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" >Image</label>
                                <div class="input-addon">
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                    <input id="image" type="file" name="image" class="form-control input-lg input-transparent" placeholder="Your image" onchange="previewImage()">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="about_me" >About_me</label>
                                <div class="input-addon">
                                    <textarea id="about_me" name="about_me" class="form-control input-lg input-transparent" placeholder="Your About Me"></textarea>
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