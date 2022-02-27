<section id="about">

    <div class="row">

        <div class="three columns">

        <img class="profile-pic"  src="{{ asset('storage/' . $abouts[0]->image) }}" alt="" />

        </div>

        <div class="nine columns main-col">

        <h2>About Me</h2>

        <p>{{ $abouts[0]->about_me }}</p>

        <div class="row">

            <div class="columns contact-details">

                <h2>Contact Details</h2>
                <p class="address">
                        <span>{{ $banners->name }}</span><br>
                        <span>{{ $abouts[0]->address }}</span><br>
                        <span>{{ $abouts[0]->phone_number }}</span><br>
                    {{-- <span>anyone@website.com</span> --}}
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