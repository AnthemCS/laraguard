<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reservations.index') }}">
                    <span data-feather="file"></span>
                    Reservations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('rooms.index') }}">
                    <span data-feather="tag"></span>
                   Rooms
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guests.index') }}">
                    <span data-feather="users"></span>
                    Guests
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('services.index') }}">
                    <span data-feather="package"></span>
                    Products & Services
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('invoices.index') }}">
                    <span data-feather="layers"></span>
                    Invoices
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Settings</span>
            <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="circle"></span>
                    General
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="circle"></span>
                    Management
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="circle"></span>
                   Referrals
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="circle"></span>
                   Booking
                </a>
            </li>
        </ul>
    </div>
</nav>