<section id="about">

    <div class="row">

        <div class="three columns">

        <img class="profile-pic"  src="{{ asset('front/images/profilepic.jpg') }}" alt="" />

        </div>

        <div class="nine columns main-col">

        <h2>About Me</h2>

        <p>{{ $abouts->about_me }}</p>

        <div class="row">

            <div class="columns contact-details">

                <h2>Contact Details</h2>
                <p class="address">
                        <span>{{ $banners->name }}</span><br>
                        <span>1600 Amphitheatre Parkway<br>
                                Mountain View, CA 94043 US
                    </span><br>
                        <span>{{ $abouts->phone_number }}</span><br>
                    <span>anyone@website.com</span>
                    </p>

            </div>

            <div class="columns download">
                <p>
                    <a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a>
                </p>
            </div>

        </div> <!-- end row -->

        </div> <!-- end .main-col -->

    </div>

</section> 