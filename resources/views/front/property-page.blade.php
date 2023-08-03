@extends('front.layout.app')
@section('title')
    Prona
@endsection

@section('content')
    <section class="single-page-title py-2" style="background-color: #031136 ; margin-top: 2px;">
        <div class="container head-single-page">
            <div class="row">
                <div class="d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
                    <div class="mb-3 mb-md-0">
                        <div>
                            <h2 class="text-white">{{ $property->title }}</h2>
                        </div>
                        <div class=>
                            <span class="text-white location-style"><i
                                    class="bi bi-geo-alt me-1"></i>{{ $property->address }}, {{ $property->location }}</span>
                        </div>
                    </div>
                    <div>
                        <div>
                            @if ($property->sale_rent === 0)
                                <h2 class="text-white">{{ number_format($property->price) }}€/Muaj</h2>
                            @else
                                <h2 class="text-white">{{ number_format($property->price) }}€</h2>
                            @endif
                        </div>
                        <div>
                            @if ($property->sale_rent == 0)
                                <p class="text-end m-0 badge" style="background-color: #ffac12; color:#031136">Rent
                                </p>
                            @else
                                <p class="text-end m-0 badge" style="background-color: #ffac12; color:#031136">Sale
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light pt-3">
        <div class="container">
            <div class="row g-2">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-12">
                            <div>
                                <div id="carouselExampleIndicators" class="carousel slide">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>

                                        @if ($property->img1)
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        @endif

                                        @if ($property->img2)
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        @endif


                                        @if ($property->img3)
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        @endif

                                        @if ($property->img4)
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="4" aria-label="Slide 5"></button>
                                        @endif

                                    </div>
                                    <div class="carousel-inner custom-carousel">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('storage/' . $property->cover_image) }}"
                                                class="d-block w-100" alt="...">
                                        </div>

                                        @if ($property->img1)
                                            <div class="carousel-item">
                                                <img src="{{ asset('storage/' . $property->img1) }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                        @endif

                                        @if ($property->img2)
                                            <div class="carousel-item">
                                                <img src="{{ asset('storage/' . $property->img2) }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                        @endif

                                        @if ($property->img3)
                                            <div class="carousel-item">
                                                <img src="{{ asset('storage/' . $property->img3) }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                        @endif

                                        @if ($property->img4)
                                            <div class="carousel-item">
                                                <img src="{{ asset('storage/' . $property->img4) }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                        @endif

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
                            <p class="mb-5" style="color: #697488;">{{ $property->description }}</p>
                        </div>

                        <div class="col-12 ">
                            <h5 class="mb-4">Detaje</h5>
                            <div class="row">
                                <div class="col-6 col-md-3 icons-styles">
                                    <ul>
                                        <li class="d-flex">
                                            <i
                                                class="fa-solid fa-house ms-3 me-3 mb-3"></i>{{ $property->type_of_property }}
                                        </li>
                                        @if ($property->nr_of_beds == 1)
                                            <li class="d-flex"><i
                                                    class="fas fa-bed ms-3 me-3 mb-3"></i>{{ $property->nr_of_beds }} Dhomë
                                            </li>
                                        @else
                                            <li class="d-flex"><i
                                                    class="fas fa-bed ms-3 me-3 mb-3"></i>{{ $property->nr_of_beds }} Dhoma
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3 icons-styles">
                                    <ul>
                                        <li class="d-flex"><i
                                                class="fas fa-bath ms-3 me-3 mb-3"></i>{{ $property->nr_of_baths }} Banjo
                                        </li>
                                        <li class="d-flex"><i
                                                class="fa-solid fa-chart-area ms-3 me-3 mb-3"></i>{{ $property->area }}
                                            m<sup class="top-0">2</sup>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card agent-card py-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    @if ($property->user->image)
                                        <div class="mt-2"><img src="{{ asset('storage/' . $property->user->image) }}"
                                                alt="" width="100px" height="100px"></div>
                                    @endif
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-center mt-2">
                                    <h6>{{ $property->user->first_name }} {{ $property->user->last_name }}</h6>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <a href="{{ $property->user->icon1 }}" target="_blank"
                                            class="text-decoration-none agent-href me-2"><i
                                                class="fa-brands fa-facebook agent-icons"></i></a>
                                    </div>
                                    <div>
                                        <a href="{{ $property->user->icon2 }}" target="_blank"
                                            class="text-decoration-none agent-href"><i
                                                class="fa-brands fa-instagram agent-icons"></i></a>
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
                                        <p class="mb-1"><i class="fa-solid fa-phone"></i> {{ $property->user->phone }}
                                        </p>
                                    </div>
                                    <div>
                                        <p> <i class="fa-regular fa-envelope"></i> {{ $property->user->email }}</p>
                                    </div>


                                </div>
                            </div>


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

                        <div class="row mb-3 my-2">
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->

                                    @if ($properties->count())
                                        @foreach ($properties as $property)
                                            <div class="swiper-slide">
                                                <a href="{{ route('single-property', $property->slug) }}"
                                                    class="text-decoration-none">
                                                    <div class="card rounded border-0 shadow">
                                                        <div class="card-body p-2">
                                                            <div class="position-relative">
                                                                <img src="{{ asset('storage/' . $property->cover_image) }}"
                                                                    class="card-img-top rounded" alt="Property Image">
                                                                @if ($property->sale_rent == 0)
                                                                    <span
                                                                        class="position-absolute top-0 end-0 mt-2 me-2 badge bg-main-color fs-6">Rent</span>
                                                                @else
                                                                    <span
                                                                        class="position-absolute top-0 end-0 mt-2 me-2 badge bg-second-color fs-6">Sale</span>
                                                                @endif
                                                            </div>
                                                            <div class="my-3">
                                                                <h3
                                                                    class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">
                                                                    {{ Str::limit($property->title, 38) }}
                                                                </h3>
                                                                <p class="my-2 text-dark ms-2">
                                                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                                                    {{ $property->address }}, {{ $property->location }}
                                                                </p>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
                                                                    <div class="badge px-2 py-1 bg-second-color">
                                                                        <i class="fa-sharp fa-solid fa-bed"></i>
                                                                        {{ $property->nr_of_beds }}
                                                                    </div>
                                                                    <div class="badge px-2 py-1 bg-second-color ">
                                                                        <i class="fa-sharp fa-solid fa-bath"></i>
                                                                        {{ $property->nr_of_baths }}
                                                                    </div>
                                                                    <div class="badge px-2 py-1 bg-second-color">
                                                                        <i class="fa-solid fa-house"></i>
                                                                        {{ $property->area }}m<sup>2</sup>
                                                                    </div>
                                                                    <div class="badge px-2 py-1 bg-second-color">
                                                                        <i class="fa-solid fa-house"></i>
                                                                        {{ $property->type_of_property }}
                                                                    </div>
                                                                </div>
                                                                @if ($property->sale_rent == 0)
                                                                    <h3 class="h4 mt-2 text-dark fw-bold ms-2">
                                                                        {{ number_format($property->price) }}€/Muaj</h3>
                                                                @else
                                                                    <h3 class="h4 mt-2 text-dark fw-bold ms-2">
                                                                        {{ number_format($property->price) }}€</h3>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        @endforeach
                                    @else
                                        <div class="py-5 ps-2">
                                            <h6>Nuk ka prona të ngjashme me këtë pronë</h6>
                                        </div>
                                    @endif





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
