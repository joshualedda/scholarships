<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('staff.dashboardStaff') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <!-- Scholarships -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">Scholarships</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <!-- View -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('staff.scholarship.view') }}">View</a>
                    </li>
                    <!-- Add grantees -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('staff.scholarship.grantees') }}">Grantee</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Settings -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#settings" aria-expanded="false"
                aria-controls="settings">
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-settings menu-icon"></i>
            </a>
            <div class="collapse" id="settings">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('staff.settings.addScholar') }}"> Add
                            Scholarships </a></li>
                    {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('staff.settings.register')}}"> Add User Accounts </a></li> --}}
                    <li class="nav-item"> <a class="nav-link" href="{{ route('staff.settings.auditTrail') }}"> Audit
                            Trail </a></li>
                    <li class="nav-item"> <a class="nav-link" href="#"> Data back-up </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link w-full"
                    style="border: none; background: none; padding: 0; display: flex; align-items: center;">
                    <span class="menu-title">Log out</span>
                    <i class="mdi mdi-logout menu-icon" style="margin-left: 1.75rem;"></i>
                </button>
            </form>
        </li>


    </ul>
</nav>
