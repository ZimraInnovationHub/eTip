<nav class="navbar navbar-dark bg-green fixed-top">
    <div class="container-fluid">
        <div class="navItems">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon text-white"></span>
            </button>
            <a class="navbar-brand eTip " href="#">
                <strong> ZIMRA e-Tip </strong>
            </a>
        </div>
        <div class="offcanvas offcanvas-start text-bg-green" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h4 class="offcanvas-title hFour" id="offcanvasDarkNavbarLabel" style="color: #fff">
                    e-Tip Menu
                </h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item txtFont">
                        <a class="nav-link active" aria-current="page" href="#">New Application</a>
                    </li>
                    <li class="nav-item txtFont">
                        <a class="nav-link" href="#">Edit TIP</a>
                    </li>
                    <li class="nav-item txtFont">
                        <a class="nav-link" href="#">Reactivate TIP</a>
                    </li>
                    <li class="nav-item txtFont">
                        <a class="nav-link" href="/myaccount">Change Password</a>
                    </li>
                    <li class="nav-item txtFont">
                        <a class="nav-link" id='logout'>Logout</a>
                    </li>
                </ul>
                <!-- <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form> -->
            </div>
        </div>
    </div>
</nav>