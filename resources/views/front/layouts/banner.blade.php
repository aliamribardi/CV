<div class="row banner">
    <div class="banner-text">
    <h1 class="responsive-headline">I'm {{ $banners->name }}.</h1>
    {{-- <h3>I'm a Manila based <span>graphic designer</span>, <span>illustrator</span> and <span>webdesigner</span> creating awesome and
    effective visual identities for companies of all sizes around the globe. Let's <a class="smoothscroll" href="#about">start scrolling</a>
    and learn more <a class="smoothscroll" href="#about">about me</a>.</h3> --}}
    <hr />
    <ul class="social">
        <li>
            @if (!is_null($sosmed->facebook))
                <a href="{{ $sosmed->facebook ?? '' }}" target="__blank"><i class="fa fa-facebook"></i></a>
            @endif
        </li>
        <li>
            @if (!is_null($sosmed->twitter))
                <a href="{{ $sosmed->twitter ?? '' }}" target="__blank"><i class="fa fa-twitter"></i></a>
            @endif
        </li>
        <li>
            @if (!is_null($sosmed->google_plus))
                <a href="{{ $sosmed->google_plus ?? '' }}" target="__blank"><i class="fa fa-google-plus"></i></a>
            @endif
        </li>
        <li>
            @if (!is_null($sosmed->linkedin))
                <a href="{{ $sosmed->linkedin ?? '' }}" target="__blank"><i class="fa fa-linkedin"></i></a>
            @endif
        </li>
        <li>
            @if (!is_null($sosmed->instagram))
                <a href="{{ $sosmed->instagram ?? '' }}" target="__blank"><i class="fa fa-instagram"></i></a>
            @endif
        </li>
        <li>
            @if (!is_null($sosmed->dribbble))
                <a href="{{ $sosmed->dribbblle ?? '' }}" target="__blank"><i class="fa fa-dribbble"></i></a>
            @endif
        </li>
        <li>
            @if (!is_null($sosmed->skype))
                <a href="{{ $sosmed->skype ?? '' }}" target="__blank"skype><i class="fa fa-skype"></i></a>
            @endif
        </li>
    </ul>
    </div>
</div>

<p class="scrolldown">
    <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
</p>
