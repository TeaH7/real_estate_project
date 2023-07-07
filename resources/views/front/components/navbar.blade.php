<header class="container-fluid px-0">
    <div class="top-bar container-fluid py-2 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <ul class="d-flex list-unstyled gap-3 m-0">
                        <li>
                            <a class="text-decoration-none text-black" href="#">Rr.Don Bosko</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-black" href="#">0683158859</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-black"
                                href="mailto:travel@gmail.com">realestate@gmail.com</a>
                        </li>


                    </ul>
                </div>
                <div class="col-6">
                    <ul class="d-flex list-unstyled gap-2 justify-content-end m-0">
                        <li>
                            <a class="text-decoration-none text-black" href="#"><i class="bi bi-facebook"></i></a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-black" href="#"><i class="bi bi-whatsapp"></i></a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-black" href="#"><i
                                    class="bi bi-instagram"></i></a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="">
                <div class="img-contain">
                    <img class="mb-2" src="{{ asset('assets/front/images/wheat-svgrepo-com.svg') }}" alt="Logo"
                        width="250px">
                    <span class="text-white">TIG ESTATE</span>

                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa-solid fa-bars text-white"
                        style="font-size: 25px"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav custom-nav-homepage">
                    <li class="nav-item mx-3 {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a class="nav-link text-uppercase fs-6 fw-semibold text-white" aria-current="page"
                            href="/">Kryefaqja</a>
                    </li>

                    <li class="nav-item mx-3 ">
                        <a class="nav-link text-uppercase fs-6 fw-semibold text-white" href="">Prona</a>
                    </li>
                    <li class="nav-item mx-3 {{ request()->routeIs('about-us') ? 'active' : '' }}">
                        <a class="nav-link text-uppercase fs-6 fw-semibold text-white" href="/about-us">Rreth
                            Nesh</a>
                    </li>
                    <li class="nav-item mx-3 {{ request()->routeIs('contact-us') ? 'active' : '' }}">
                        <a class="nav-link text-uppercase fs-6 fw-semibold text-white" href="/contact-us">Kontakt</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
