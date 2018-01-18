<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
        <a class="nav-link nav-link-collapse collapsed"  data-toggle="collapse" href="#collapseBookings" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Bookings <span class="badge badge-pill badge-success">{{ $bookings->count() }}</span></span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseBookings">
            <li>
                <a href="navbar.html">Check Point</a>
            </li>
            <li>
                <a href="navbar.html">Walk-Ins</a>
            </li>
            <li>
                <a href="cards.html">Reservations</a>
            </li>
            <li>
                <a href="cards.html">Calendar</a>
            </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Billing</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
                <a href="navbar.html">Invoices</a>
            </li>
            <li>
                <a href="cards.html">Expenses</a>
            </li>
        </ul>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Control Center</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
                <a href="login.html">Properties</a>
            </li>
            <li>
                <a href="login.html">Guests <span class="badge badge-pill badge-primary"></span>{{ $bookings->count() }}</a>
            </li>
            <li>
                <a href="register.html">Rooms</a>
            </li>
            <li>
                <a href="forgot-password.html">Services</a>
            </li>
            <li>
                <a href="blank.html">Managers</a>
            </li>

        </ul>
    </li>
  @guest
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                <ul class="sidenav-third-level collapse" id="collapseMulti2">
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
        <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
        </a>
    </li>
   @endguest
</ul>
<ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
        </a>
    </li>
</ul>