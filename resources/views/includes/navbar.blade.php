<nav class="navbar navbar-expand-md bg-white">
    <div class="container">
        <img src="{{ asset('assets/img/logo.png') }}" alt="" width="5%">
        {{-- <a class="navbar-brand" href="{{ asset('assets/img/logo.png') }}"></a> --}}
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation"></button>
        <div id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('book') ? 'active' : '' }}"
                        href="{{ route('book') }}">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('students') ? 'active' : '' }}"
                        href="{{ route('students') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('category') ? 'active' : '' }}"
                        href="{{ route('category') }}">Category</a>
                </li>
        </div>
        <div>
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">JohnDoe</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Dashboard</a>
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
            </ul>
        </div>
    </div>
</nav>
