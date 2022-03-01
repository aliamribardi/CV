
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link href="{{ asset('adminPanel/css/application.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('adminPanel/img/favicon.png') }}">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body>
        <div class="single-widget-container">
            <section class="widget login-widget">
                <header class="text-align-center">
                    <h4>Login to your account</h4>
                </header>
                <div class="body">
                    <form class="no-margin" action="{{ route('login') }}" method="POST">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="email" >Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input id="email" type="email" name="email" class="form-control input-lg input-transparent" value="{{ old('email') }}" required placeholder="Email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" >Password</label>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    <input id="password" type="password" name="password" class="form-control input-lg input-transparent" placeholder="Your Password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-block btn-lg btn-danger">
                                <span class="small-circle"><i class="fa fa-caret-right"></i></span>
                                <small>Sign In</small>
                            </button>
                            <a class="forgot" href="#">Forgot Username or Password?</a>
                        </div>
                    </form>
                </div>
                <footer>
                    <div class="facebook-login">
                        <a href="{{ Route('register') }}"><span><i class=""></i> Register</span></a>
                    </div>
                </footer>
            </section>
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


</body>
</html>