<header>
    <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-faded">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <a class="navbar-brand" href="#"><span style="color: #CB0000">Images</span>Studio</a>
            </div>
            <div class="col-md-6 col-sm-6 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Estimations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>

            <div class="web">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Account</a>
                            <a class="dropdown-item" href="#">In Progress</a>
                            <a class="dropdown-item" href="#">Your Albums</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Sign Out</a>
                    </li>
                </ul>
            </div>

            <div class="mobile">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Account</a>
                            <a class="dropdown-item" href="#">In Progress</a>
                            <a class="dropdown-item" href="#">Your Albums</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>