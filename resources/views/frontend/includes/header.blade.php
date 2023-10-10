<!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav button theme circle solid">
                    <ul>
                        @if(!Auth::guard('advertiser')->check())
                        <li>
                            <a href="{{route('login')}}">Login</a>
                        </li>
                        <li>
                            <a href="{{route('register')}}" class="smooth-menu">Register</a>
                        </li>
                        @else
                        <li>
                            <a href="{{route('advertiser.index')}}" class="smooth-menu">Dashboard</a>
                        </li>
                        
                        @endif
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('frontend_assets/img/logo.png')}}" class="logo logo-display" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li>
                            <a class="smooth-menu" href="{{route('home')}}#home">Home</a>
                        </li>
                        <!-- <li>
                            <a class="smooth-menu" href="#about">About</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#overview">Overview</a>
                        </li> -->
                        <li>
                            <a class="smooth-menu" href="{{route('home')}}#pricing">Pricing</a>
                        </li>
                        <!-- <li>
                            <a class="smooth-menu" href="#team">Team</a>
                        </li> -->
                        <li>
                            <a class="smooth-menu" href="{{route('home')}}#contact">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->