<header class="page-header">
    <div class="navbar">
        <ul class="nav navbar-nav navbar-right pull-right">
            <li class="visible-phone-landscape">
                <a href="#" id="search-toggle">
                    <i class="fa fa-search"></i>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" title="Messages" id="messages" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-comment"></i>
                </a>
                <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                    @foreach ($contacts as $contact)
                    <li role="presentation">
                        {{-- <a href="#" class="message"> --}}
                        <a href="#" class="">
                            {{-- <img src="adminPanel/img/1.png" alt=""> --}}
                            <div class="details">
                                <div class="sender">{{ $contact->name }}</div>
                                <div class="text">
                                    {{ Illuminate\Support\Str::substr($contact->message, 0, 50) }} ...
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                    <li role="presentation">
                        <a href="#" class="text-align-center see-all">
                            See all messages <i class="fa fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="hidden-xs">
                <a href="#" id="settings" title="Settings" data-toggle="popover" data-placement="bottom">
                    <i class="glyphicon glyphicon-cog"></i>
                </a>
            </li>
            <li class="hidden-xs dropdown">
                <a href="#" title="Account" id="account" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i>
                </a>
                <ul id="account-menu" class="dropdown-menu account" role="menu">
                    <li role="presentation" class="account-picture">
                        {{-- <img src="{{ asset('storage/' . $abouts->image) }}" alt="{{ $abouts->address }}" class="img-circle" style="height: 50px; width: 50px;"> --}}
                        {{ Auth::user()->name }}
                    </li>
                    <li role="presentation">
                        <a href="#" class="link">
                            <i class="fa fa-user"></i>
                            Profile
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#" class="link">
                            <i class="fa fa-calendar"></i>
                            Calendar
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#" class="link">
                            <i class="fa fa-inbox"></i>
                            Inbox
                        </a>
                    </li>
                </ul>
            </li>
            <li class="visible-xs">
                <a href="#" class="btn-navbar" data-toggle="collapse" data-target=".sidebar" title="">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
            <li class="hidden-xs">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="glyphicon glyphicon-off"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form></li>
        </ul>
        {{-- <form id="search-form" class="navbar-form pull-right" role="search">
            <input type="search" class="form-control search-query" placeholder="Search...">
        </form> --}}
        {{-- <div class="notifications pull-right">
            <div class="alert pull-right">
                <a href="#" class="close ml-xs" data-dismiss="alert">&times;</a>
                <i class="fa fa-info-circle mr-xs"></i> Check out Light Blue <a id="notification-link"
                    href="#">settings</a> on the right!
            </div>
        </div> --}}
    </div>
</header>