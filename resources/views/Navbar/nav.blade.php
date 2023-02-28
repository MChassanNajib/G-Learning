<header class="p-0 text-bg-white">
    <div
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <h2> <b style="color: #284E8C;">G</b>-Learning&nbsp;&nbsp;</b></h2>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-black" style="color: #284E8C">Home</a></li>
                    <li><a href="/" class="nav-link px-2 text-black">Kursus</a></li>
                    <li><a href="/" class="nav-link px-2 text-black">Promo</a></li>
                    <li><a href="#" class="nav-link px-2 text-black">Paket Belajar</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-white text-bg-white" placeholder="Search ..."
                        aria-label="Search">
                </form>

                <ul class="nav-pills navbar-nav ms-auto ">
                    @auth
                        <li class="nav-link dropdown ">
                            <a class="text-light nav-link dropdown-toggle bg-primary " href="#" role="button"
                                data-bs-toggle="dropdown" style="
                                padding-right: 10px;
                                padding-left: 10px;">
                                Hi, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item" href="/admin/all"><i
                                            class="bi bi-layout-text-sidebar-reverse">Dashboard</i></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="get">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i
                                                class="bi bi-box-arrow-right">Logout</i></button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login/all" class="text-light nav-link bg-primary bi bi-box-arrow-right">Login</a>
                        </li>
                    @endauth
                </ul>

            </div>
        </div>

    </div>
</header>
