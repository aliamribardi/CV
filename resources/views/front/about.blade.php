<section id="about">

    <div class="row">

        <div class="three columns">
        
        @if (!is_null($abouts))
            <img class="profile-pic"  src="{{ asset('storage/' . $abouts->image ) }}" alt="" />
        @else
            <img src="{{ asset('img/no-image.jpg') }}" class="profile-pic" alt="">
        @endif

        </div>

        <div class="nine columns main-col">

        <h2>About Me</h2>

        <p>{{ $abouts->about_me ?? 'No Data' }}</p>

        <div class="row">

            <div class="columns contact-details">

                <h2>Contact Details</h2>
                <p class="address">
                        <span>{{ $banners->name ?? 'No Data' }}</span><br>
                        <span>{{ $abouts->address ?? 'No Data' }}</span><br>
                        <span>{{ $abouts->phone_number ?? 'No Data' }}</span><br>
                    {{-- <span>anyone@website.com</span> --}}
                    </p>

            </div>

            <div class="columns download">
                <p>
                    {{-- <a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a> --}}
                </p>
            </div>

        </div> <!-- end row -->

        </div> <!-- end .main-col -->

    </div>

</section> 