<nav class="navbar navbar-top navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">tipspromenad.NU</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                      <li><a href="http://tipspromenad.dev/auth/login"><i class="fa fa-sign-in"></i> Logga in</a></li>
                      <li><a href="http://tipspromenad.dev/auth/register"><i class="fa fa-user-plus"></i> Skapa konto</a></li>
                    @else
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>{!! link_to('dashboard', 'Dashboard') !!}</li>
                            <li>{!! link_to('auth/password/change', 'Change Password') !!}</li>
                            @permission('view_admin_link')
                                {{-- This can also be @role('Administrator') instead --}}
                                <li>{!! link_to_route('backend.dashboard', 'Administration') !!}</li>
                            @endpermission
                          <li>{!! link_to('auth/logout', 'Logout') !!}</li>
                        </ul>
                      </li>
                    @endif
                  </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
