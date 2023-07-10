@extends('front.layout.app')
@section('title')
    Prona
@endsection

@section('content')
    <section class="single-page-title py-2" style="background-color: #031136 ; margin-top: 2px;">
        <div class="container head-single-page">
            <div class="row">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="col-12">
                            <h2 class="text-white">Titulli</h2>

                        </div>
                        <div class="col-12">
                            <span class="text-white location-style"><i class="bi bi-geo-alt me-1"></i>Shqiperi</span>
                        </div>
                    </div>

                    <div>
                        <div class="col-12">
                            <h2 class="text-white">450$</h2>

                        </div>
                        <div class="col-12">
                            <p class="text-end m-0 badge" style="background-color: #ffac12; color:#031136">Rent
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light pt-3">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between">
                    <div class="col-12 col-md-6 carousel-col">
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <div id="carouselExampleIndicators" class="carousel slide">
                                        <div class="carousel-indicators ">
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>

                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>

                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>


                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="3" aria-label="Slide 4"></button>

                                        </div>
                                        <div class="carousel-inner custom-carousel">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>

                                            <div class="carousel-item">
                                                <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>


                                            <div class="carousel-item">
                                                <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>


                                            <div class="carousel-item">
                                                <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>



                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row bg-white mt-3" style="border-radius: 30px">
                            <div class="col-12">
                                <h3 class="mt-4 mb-4">Përshkrimi</h3>
                                <p class="mb-5" style="color: #697488;">Lorem ipsum dolor sit amet consectetur,
                                    adipisicing
                                    elit.
                                    At
                                    officia et enim, odit natus quibusdam soluta velit molestiae vitae quaerat omnis,
                                    voluptates
                                    voluptatum animi. At omnis maxime ratione corrupti. Molestiae excepturi enim inventore
                                    non
                                    facilis
                                    necessitatibus. Assumenda corporis ipsa commodi voluptatem ipsam consequatur cumque
                                    sint?
                                    Tempore,
                                    quisquam in! Distinctio vel id error voluptate doloremque, amet voluptates ut aperiam
                                    incidunt
                                    delectus adipisci voluptatem quaerat alias voluptatibus earum possimus ullam sed
                                    asperiores
                                    fuga
                                    nulla? Repudiandae, ipsam repellendus magni assumenda molestiae incidunt fugit,
                                    doloremque
                                    iste,
                                    veritatis repellat sunt tempore sit commodi quasi quibusdam sint delectus quae illo
                                    corrupti
                                    culpa
                                    deserunt ratione. Dicta, quo?</p>
                            </div>

                            <div class="col-12 ">
                                <h5 class="mb-4">Detaje</h5>

                                <div class="row">
                                    <div class="col-3 icons-styles">
                                        <ul>

                                            <li><i class="bi bi-check-lg me-2"></i>Dhoma</li>

                                            <li><i class="bi bi-check-lg me-2"></i>Nuk ka</li>
                                            <li><i class="bi bi-check-lg me-2"></i>Dhoma</li>
                                            <li><i class="bi bi-check-lg me-2"></i>Nuk ka</li>
                                        </ul>
                                    </div>
                                    <div class="col-3 icons-styles">
                                        <ul>

                                            <li><i class="bi bi-check-lg me-2"></i>Dhoma</li>

                                            <li><i class="bi bi-check-lg me-2"></i>Nuk ka</li>
                                            <li><i class="bi bi-check-lg me-2"></i>Dhoma</li>
                                            <li><i class="bi bi-check-lg me-2"></i>Nuk ka</li>


                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card agent-card py-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center">
                                        <div class="mt-2"><img src="{{ asset('assets/front/images/dude.jpeg') }}"
                                                alt="" width="100px" height="100px"></div>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-center mt-2">
                                        <h6>Emer Mbiemer</h6>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <a href="" class="text-decoration-none agent-href me-2"><i
                                                    class="fa-brands fa-facebook agent-icons"></i></a>
                                        </div>
                                        <div>
                                            <a href=""class="text-decoration-none agent-href"><i
                                                    class="fa-brands fa-instagram agent-icons"></i></i></a>
                                        </div>


                                    </div>
                                </div>


                                <div class="col-12 d-flex justify-content-center mt-3">

                                    <div>
                                        <h6>Kontakto Agjent</h6>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-center mt-3">
                                        <div>
                                            <p class="mb-1"><i class="fa-solid fa-phone"></i> +355 68 06 635
                                            </p>
                                        </div>
                                        <div>
                                            <p> <i class="fa-regular fa-envelope"></i> xhimi.neutro@property.al</p>
                                        </div>


                                    </div>
                                </div>


                            </div>


                            {{-- <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Name</label>
                                            <input type="text" placeholder="John" class="form-control"
                                                id="name">
                                        </div>
                                    </div>
                                    <div class="col-">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" placeholder="john.doe@gmail.com"
                                                class="form-control em-1" id="email">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Example
                                                textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="w-100 d-block">
                                        <button type="submit" class="btn btn-primary w-100">Dergo</button>
                                    </div>
                                </div> --}}
                        </div>

                    </div>

                </div>
            </div>

        </div>
        </div>
    </section>


    <section class="pt-4 bg-light">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="line mb-3" style="margin-left: 5px; width:10%"></div>
                    <h2>Te ngjashme</h2>
                    <div class="container mx-auto">

                        {{-- <div class="row mb-3 g-3">
                            <div class="col-12 col-md-4">
                                <a href="#" class="text-decoration-none">
                                    <div class="card rounded border-0 shadow">
                                        <div class="card-body p-2">
                                            <div class="position-relative">
                                                <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                    class="card-img-top rounded" alt="Property Image">
                                                <span
                                                    class="position-absolute top-0 end-0 mt-2 me-2 badge bg-main-color fs-6">Rent</span>
                                            </div>
                                            <div class="my-3">
                                                <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">Lorem ipsum
                                                    dolor sit.
                                                </h3>
                                                <p class="my-2 text-dark ms-2">
                                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                                </p>
                                                <div
                                                    class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
                                                    <div class="badge px-2 py-1 bg-second-color">
                                                        <i class="fa-sharp fa-solid fa-bed"></i> 4
                                                    </div>
                                                    <div class="badge px-2 py-1 bg-second-color ">
                                                        <i class="fa-sharp fa-solid fa-bath"></i> 2
                                                    </div>
                                                    <div class="badge px-2 py-1 bg-second-color">
                                                        <i class="fa-solid fa-house"></i> 150m<sup>2</sup>
                                                    </div>
                                                </div>
                                                <h3 class="h4 mt-2 text-dark fw-bold ms-2">$1500</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-4">
                                <a href="#" class="text-decoration-none">
                                    <div class="card rounded border-0 shadow">
                                        <div class="card-body p-2">
                                            <div class="position-relative">
                                                <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                    class="card-img-top rounded" alt="Property Image">
                                                <span
                                                    class="position-absolute top-0 end-0 mt-2 me-2 badge bg-main-color fs-6">Rent</span>
                                            </div>
                                            <div class="my-3">
                                                <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">Lorem ipsum
                                                    dolor sit.
                                                </h3>
                                                <p class="my-2 text-dark ms-2">
                                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                                </p>
                                                <div
                                                    class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
                                                    <div class="badge px-2 py-1 bg-second-color">
                                                        <i class="fa-sharp fa-solid fa-bed"></i> 4
                                                    </div>
                                                    <div class="badge px-2 py-1 bg-second-color ">
                                                        <i class="fa-sharp fa-solid fa-bath"></i> 2
                                                    </div>
                                                    <div class="badge px-2 py-1 bg-second-color">
                                                        <i class="fa-solid fa-house"></i> 150m<sup>2</sup>
                                                    </div>
                                                </div>
                                                <h3 class="h4 mt-2 text-dark fw-bold ms-2">$1500</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-4">
                                <a href="#" class="text-decoration-none">
                                    <div class="card rounded border-0 shadow">
                                        <div class="card-body p-2">
                                            <div class="position-relative">
                                                <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                    class="card-img-top rounded" alt="Property Image">
                                                <span
                                                    class="position-absolute top-0 end-0 mt-2 me-2 badge bg-main-color fs-6">Rent</span>
                                            </div>
                                            <div class="my-3">
                                                <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">Lorem ipsum
                                                    dolor sit.
                                                </h3>
                                                <p class="my-2 text-dark ms-2">
                                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                                </p>
                                                <div
                                                    class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
                                                    <div class="badge px-2 py-1 bg-second-color">
                                                        <i class="fa-sharp fa-solid fa-bed"></i> 4
                                                    </div>
                                                    <div class="badge px-2 py-1 bg-second-color ">
                                                        <i class="fa-sharp fa-solid fa-bath"></i> 2
                                                    </div>
                                                    <div class="badge px-2 py-1 bg-second-color">
                                                        <i class="fa-solid fa-house"></i> 150m<sup>2</sup>
                                                    </div>
                                                </div>
                                                <h3 class="h4 mt-2 text-dark fw-bold ms-2">$1500</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>



                        </div> --}}
                        <div class="row mb-3 my-2">
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->

                                    <div class="swiper-slide">
                                        <a href="#" class="text-decoration-none">
                                            <div class="card rounded border-0 shadow">
                                                <div class="card-body p-2">
                                                    <div class="position-relative">
                                                        <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                            class="card-img-top rounded" alt="Property Image">
                                                        <span
                                                            class="position-absolute top-0 end-0 mt-2 me-2 badge bg-main-color fs-6">Rent</span>
                                                    </div>
                                                    <div class="my-3">
                                                        <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">
                                                            Lorem ipsum
                                                            dolor sit.
                                                        </h3>
                                                        <p class="my-2 text-dark ms-2">
                                                            <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                                        </p>
                                                        <div
                                                            class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
                                                            <div class="badge px-2 py-1 bg-second-color">
                                                                <i class="fa-sharp fa-solid fa-bed"></i> 4
                                                            </div>
                                                            <div class="badge px-2 py-1 bg-second-color ">
                                                                <i class="fa-sharp fa-solid fa-bath"></i> 2
                                                            </div>
                                                            <div class="badge px-2 py-1 bg-second-color">
                                                                <i class="fa-solid fa-house"></i> 150m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                        <h3 class="h4 mt-2 text-dark fw-bold ms-2">$1500</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="text-decoration-none">
                                            <div class="card rounded border-0 shadow">
                                                <div class="card-body p-2">
                                                    <div class="position-relative">
                                                        <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                            class="card-img-top rounded" alt="Property Image">
                                                        <span
                                                            class="position-absolute top-0 end-0 mt-2 me-2 badge bg-main-color fs-6">Rent</span>
                                                    </div>
                                                    <div class="my-3">
                                                        <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">
                                                            Lorem ipsum
                                                            dolor sit.
                                                        </h3>
                                                        <p class="my-2 text-dark ms-2">
                                                            <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                                        </p>
                                                        <div
                                                            class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
                                                            <div class="badge px-2 py-1 bg-second-color">
                                                                <i class="fa-sharp fa-solid fa-bed"></i> 4
                                                            </div>
                                                            <div class="badge px-2 py-1 bg-second-color ">
                                                                <i class="fa-sharp fa-solid fa-bath"></i> 2
                                                            </div>
                                                            <div class="badge px-2 py-1 bg-second-color">
                                                                <i class="fa-solid fa-house"></i> 150m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                        <h3 class="h4 mt-2 text-dark fw-bold ms-2">$1500</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="text-decoration-none">
                                            <div class="card rounded border-0 shadow">
                                                <div class="card-body p-2">
                                                    <div class="position-relative">
                                                        <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                            class="card-img-top rounded" alt="Property Image">
                                                        <span
                                                            class="position-absolute top-0 end-0 mt-2 me-2 badge bg-main-color fs-6">Rent</span>
                                                    </div>
                                                    <div class="my-3">
                                                        <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">
                                                            Lorem ipsum
                                                            dolor sit.
                                                        </h3>
                                                        <p class="my-2 text-dark ms-2">
                                                            <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                                        </p>
                                                        <div
                                                            class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
                                                            <div class="badge px-2 py-1 bg-second-color">
                                                                <i class="fa-sharp fa-solid fa-bed"></i> 4
                                                            </div>
                                                            <div class="badge px-2 py-1 bg-second-color ">
                                                                <i class="fa-sharp fa-solid fa-bath"></i> 2
                                                            </div>
                                                            <div class="badge px-2 py-1 bg-second-color">
                                                                <i class="fa-solid fa-house"></i> 150m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                        <h3 class="h4 mt-2 text-dark fw-bold ms-2">$1500</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="text-decoration-none">
                                            <div class="card rounded border-0 shadow">
                                                <div class="card-body p-2">
                                                    <div class="position-relative">
                                                        <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                            class="card-img-top rounded" alt="Property Image">
                                                        <span
                                                            class="position-absolute top-0 end-0 mt-2 me-2 badge bg-main-color fs-6">Rent</span>
                                                    </div>
                                                    <div class="my-3">
                                                        <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">
                                                            Lorem ipsum
                                                            dolor sit.
                                                        </h3>
                                                        <p class="my-2 text-dark ms-2">
                                                            <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                                        </p>
                                                        <div
                                                            class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
                                                            <div class="badge px-2 py-1 bg-second-color">
                                                                <i class="fa-sharp fa-solid fa-bed"></i> 4
                                                            </div>
                                                            <div class="badge px-2 py-1 bg-second-color ">
                                                                <i class="fa-sharp fa-solid fa-bath"></i> 2
                                                            </div>
                                                            <div class="badge px-2 py-1 bg-second-color">
                                                                <i class="fa-solid fa-house"></i> 150m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                        <h3 class="h4 mt-2 text-dark fw-bold ms-2">$1500</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="text-decoration-none">
                                            <div class="card rounded border-0 shadow">
                                                <div class="card-body p-2">
                                                    <div class="position-relative">
                                                        <img src="{{ asset('assets/front/images/real-estate.jpg') }}"
                                                            class="card-img-top rounded" alt="Property Image">
                                                        <span
                                                            class="position-absolute top-0 end-0 mt-2 me-2 badge bg-main-color fs-6">Rent</span>
                                                    </div>
                                                    <div class="my-3">
                                                        <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">
                                                            Lorem ipsum
                                                            dolor sit.
                                                        </h3>
                                                        <p class="my-2 text-dark ms-2">
                                                            <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                                        </p>
                                                        <div
                                                            class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
                                                            <div class="badge px-2 py-1 bg-second-color">
                                                                <i class="fa-sharp fa-solid fa-bed"></i> 4
                                                            </div>
                                                            <div class="badge px-2 py-1 bg-second-color ">
                                                                <i class="fa-sharp fa-solid fa-bath"></i> 2
                                                            </div>
                                                            <div class="badge px-2 py-1 bg-second-color">
                                                                <i class="fa-solid fa-house"></i> 150m<sup>2</sup>
                                                            </div>
                                                        </div>
                                                        <h3 class="h4 mt-2 text-dark fw-bold ms-2">$1500</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>




                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
