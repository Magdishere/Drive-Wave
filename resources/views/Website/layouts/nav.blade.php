
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Drive Wave</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                        <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cars</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="car.html" class="dropdown-item">Car Listing</a>
                                <a href="detail.html" class="dropdown-item">Car Detail</a>
                                <a href="booking.html" class="dropdown-item">Car Booking</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">

                                <a href="#" class="dropdown-item">The Team</a>

                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>

                        @if (Auth::guard('admin')->check())
                        <a href="#" class="nav-item nav-link"  style="color: #F77D0A; border-color: #F77D0A;">{{ Auth::guard('admin')->user()->name }}</a>
                        <form method="POST" action="{{ route('logout.admin') }}">
                            @csrf
                            <a href="{{ route('logout.admin') }}"
                               onclick="event.preventDefault(); this.closest('form').submit();"
                               class="nav-item nav-link"
                               style="color: #F77D0A; border-color: #F77D0A;"
                            >
                                Logout
                            </a>
                        </form>
                    @elseif (Auth::check())
                        <a href="#" class="nav-item nav-link" style="color: #F77D0A; border-color: #F77D0A;">{{ Auth::user()->name }}</a>
                        <form method="POST" action="{{ route('logout.user') }}">
                            @csrf
                            <a href="{{ route('logout.user') }}"
                               onclick="event.preventDefault(); this.closest('form').submit();"
                               class="nav-item nav-link"
                               style="color: #F77D0A; border-color: #F77D0A;"
                            >
                                Logout
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="nav-item nav-link" style="color: #F77D0A; border-color: #F77D0A;">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-item nav-link" style="color: #F77D0A; border-color: #F77D0A;">Register</a>
                        @endif
                    @endif


                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

