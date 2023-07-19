<footer class="text-center text-lg-start text-muted">


    <!-- Section: Links  -->
    <section class="pt-3">
        <div class="container text-center text-md-start mt-4">
            <!-- Grid row -->
            <div class="row mt-1">
                <!-- Grid column -->
                <div class="col-md-12 col-lg-4 col-xl-3 mx-2 mb-4 text-white">
                    <!-- Content -->

                    <div class="logo-socials-container">
                        <a href="#">
                            <div class="img-contain d-flex align-items-center justify-content-center">
                                <img class="mb-2" src="{{ asset('assets/front/images/wheat.svg') }}" alt="Logo">
                                <span>TIG ESTATE</span>
                            </div>
                        </a>
                        <div class="mt-4 ms-md-3 socials d-flex align-items-center justify-content-center gap-3">
                            <a href="{{ route('contact-us') }}"> <i
                                    class="fa-brands fa-square-facebook text-white"></i></a> <a
                                href="{{ route('contact-us') }}"><i class="fa-brands fa-instagram text-white"></i></a>
                            <a href="{{ route('contact-us') }}"><i class="fa-solid fa-envelope text-white"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4 text-white click-links">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4 ">
                        Kompania
                    </h6>
                    <p class="text-white">
                        <a href="{{ route('about-us') }}" class="text-reset text-decoration-none">Rreth Nesh</a>
                    </p>
                    <p class="text-white">
                        <a href="{{ route('contact-us') }}" class="text-reset text-decoration-none">Kontakt</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4 text-white click-links">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Prona
                    </h6>

                    <p class="text-white">
                        <a href="{{ route('search-listings', ['sale_rent' => 'rent', 'search_property' => '', 'location' => '']) }}"
                            class="text-reset text-decoration-none">Me Qera</a>
                    </p>
                    <p class="text-white">
                        <a href="{{ route('search-listings', ['sale_rent' => 'sale', 'search_property' => '', 'location' => '']) }}"
                            class="text-reset text-decoration-none">Ne Shitje </a>
                    </p>
                    <p class="text-white">
                        <a href="{{ route('all-listings') }}" class="text-reset text-decoration-none">Të Gjitha</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-white">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Na Kontaktoni</h6>
                    <p class="text-white">
                        <i class="bi bi-geo-alt me-1"></i>
                        Rruga Don Bosko, Tiranë, Shqipëri
                    </p>
                    <p class="text-white">
                        <i class="bi bi-envelope me-1"></i>
                        property@real-estate.com
                    </p>
                    <p class="text-white"><i class="bi bi-phone me-1"></i> +355 68 XX 58 XXX</p>

                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 text-white" style="background-color: var(--secondary-color);">
        © <span id="year"></span> Copyright:
        <a class="text-reset fw-bold" href="/">TIG Estate</a>
    </div>
    <!-- Copyright -->
</footer>
