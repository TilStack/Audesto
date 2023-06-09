<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('administrateur.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-badge"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('administrateur.userlist') }}">
                        <i class="bi bi-person"></i><span>List User</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-car-front-fill"></i><span>Cars</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="./car/model.html">
                        <i class="bi bi-book"></i><span>Add Model</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('administrateur.listmodel')}}">
                        <i class="bi bi-list"></i><span>List Model</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Administrateur.addcar')}}">
                        <i class="bi bi-car-front"></i><span>Add Car</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('administrateur.listcar')}}">
                        <i class="bi bi-list"></i><span>List Car</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-book-half"></i><span>Réservations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{route('Administrateur.reservation')}}">
                    <i class="bi bi-circle"></i><span>Listes</span>
                </a>
            </li>
            <li>
                <a href="{{route('Administrateur.agence')}}">
                    <i class="bi bi-circle"></i><span>Ajouter Agences</span>
                </a>
            </li>
        </ul>
    </li><!-- End Charts Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('Administrateur.profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('administrateur.message')}}">
                <i class="bi bi-question-circle"></i>
                <span>Messages</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
    </ul>

</aside>
