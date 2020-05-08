
<header id="top">
    <nav class="nav" id="responsive-nav">
        <a href="#top"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a href="#aboutThis"><i class="fa fa-question" aria-hidden="true"></i> About Unplant.me</a>

        <a href="#contact"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>

        @if (Auth::guest())
            <a href="{{ route('login') }}"><i class="fa fa-envelope" aris-hidden="true"></i>Login</a>
            <a href="{{ route('register') }}">Register</a>
            <a href="#" class="icon" onclick="responsiveNav()"><i class="fa fa-bars" aria-hidden="true"></i></a>
        @else
        <!--    <notification :userid="{{auth()->id()}}" :unreads="{{auth()->user()->unreadNotifications}}"></notification>-->
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a>

            <a href="{{ route('user_profile',auth()->user()) }}">
                My Profile

            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>





            <!-- Authentication Links -->

                    {{--notification--}}







                @endif

        </div>
    </div>
</nav>
</header>



