<!-- light-blue - v4.0.2 - 2020-12-08 -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - CV</title>

    <link href="{{ asset('adminPanel/css/application.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Light Blue Dashboard - Bootstrap Admin Template">
    <meta name="keywords" content="bootstrap admin template,admin template,admin dashboard,admin dashboard template,admin,dashboard,bootstrap,template">
    <meta name="author" content="Flatlogic LLC">
    <meta charset="utf-8">

    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body>
    <div class="logo">
        <h4><a href="{{ Route('home') }}"><strong>Admin</strong> Panel</a></h4>
    </div>

    {{-- Sidebar --}}
    {{-- @include('adminPanel.layouts.sidebar') --}}
    {{-- End Sidebar --}}

    {{-- <div class="wrap"> --}}
        
    {{-- Header --}}
    @include('adminPanel.layouts.header')
    {{-- End Header --}}
    
    <div class="container">
                
    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}

    {{-- Footer --}}
    @include('adminPanel.layouts.footer')
    {{-- End Footer --}}

        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>
<!-- common libraries. required for every page-->
<script src="{{ asset('adminPanel/lib/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('adminPanel/lib/jquery-pjax/jquery.pjax.js') }}"></script>
<script src="{{ asset('adminPanel/lib/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminPanel/lib/widgster/widgster.js') }}"></script>
<script src="{{ asset('adminPanel/lib/underscore/underscore.js') }}"></script>

<!-- common application js -->
<script src="{{ asset('adminPanel/js/app.js') }}"></script>
<script src="{{ asset('adminPanel/js/settings.js') }}"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->
<!-- page libs -->
<script src="{{ asset('adminPanel/lib/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('adminPanel/lib/jquery.sparkline/index.js') }}"></script>

<script src="{{ asset('adminPanel/lib/backbone/backbone.js') }}"></script>
<script src="{{ asset('adminPanel/lib/backbone.localStorage/build/backbone.localStorage.min.js') }}"></script>

<script src="{{ asset('adminPanel/lib/d3/d3.min.js') }}"></script>
<script src="{{ asset('adminPanel/lib/nvd3/build/nv.d3.min.js') }}"></script>

<!-- page application js -->
<script src="{{ asset('adminPanel/js/index.js') }}"></script>
<script src="{{ asset('adminPanel/js/chat.js') }}"></script>

<!-- page template -->
<script type="text/template" id="message-template">
            <div class="sender pull-left">
                <div class="icon">
                    <img src="adminPanel/img/avatars/2.png" class="img-circle" alt="">
                </div>
                <div class="time">
                    just now
                </div>
            </div>
            <div class="chat-message-body">
                <span class="arrow"></span>
                <div class="sender"><a href="#">Tikhon Laninga</a></div>
                <div class="text">
                    <%- text %>
                </div>
            </div>
        </script>

</body>
</html>