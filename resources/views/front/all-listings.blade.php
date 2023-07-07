@extends('front.layout.app')

@section('title')
    Te Gjitha Pronat  
@endsection


@section('content')
@include('front.components.hero', [
    'title' => 'Te gjitha Pronat',
])

{{-- Search SECTION --}}
<section class="bg-light py-3 card-section">

    <div class="container mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <form>
                    <div class="d-flex align-items-center justify-content-center gap-1">
                        <select name="" id="" class="form-select py-2">
                            <option disabled selected class="text-gray">Looking for</option>
                            <option value="rent">Rent</option>
                            <option value="buy">Buy</option>
                        </select>
                        <input type="text" placeholder="Property Type" class="form-control py-2">
                        <input type="text" placeholder="Location" class="form-control py-2">
                        <select name="" id="" class="form-select py-2">
                            <option disabled selected class="text-gray">Price Range</option>
                            <option value="10000">0-10000</option>
                            <option value="50000">10000-50000</option>
                            <option value="100000">50000-100000</option>
                        </select>
                        <input type="submit" value="Kërko" class="btn btn-primary py-2 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- End search bar --}}
    {{-- GRID CARDS --}}
 
    <div class="container mx-auto " >
        <div class="row mb-3 g-3">
            <div class="col-12  col-lg-3 col-md-6">
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
                                <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">Lorem ipsum dolor sit.
                                </h3>
                                <p class="my-2 text-dark ms-2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                </p>
                                <div class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
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
            <div class="col-12  col-lg-3 col-md-6">
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
                                <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">Lorem ipsum dolor sit.
                                </h3>
                                <p class="my-2 text-dark ms-2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                </p>
                                <div class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
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
            <div class="col-12  col-lg-3 col-md-6">
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
                                <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">Lorem ipsum dolor sit.
                                </h3>
                                <p class="my-2 text-dark ms-2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                </p>
                                <div class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
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
            <div class="col-12  col-lg-3 col-md-6">
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
                                <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">Lorem ipsum dolor sit.
                                </h3>
                                <p class="my-2 text-dark ms-2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                </p>
                                <div class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
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
            <div class="col-12  col-lg-3 col-md-6">
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
                                <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">Lorem ipsum dolor sit.
                                </h3>
                                <p class="my-2 text-dark ms-2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                </p>
                                <div class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
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
            <div class="col-12  col-lg-3 col-md-6">
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
                                <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">Lorem ipsum dolor sit.
                                </h3>
                                <p class="my-2 text-dark ms-2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                </p>
                                <div class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
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

            <div class="col-12  col-lg-3 col-md-6">
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
                                <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">Lorem ipsum dolor sit.
                                </h3>
                                <p class="my-2 text-dark ms-2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                </p>
                                <div class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
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
            <div class="col-12  col-lg-3 col-md-6">
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
                                <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">Lorem ipsum dolor sit.
                                </h3>
                                <p class="my-2 text-dark ms-2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Tirana
                                </p>
                                <div class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
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
            <div class="pagination-div ">
                < PAGINATION HERE >
             </div>
        </div>
    </div>
   
</section>
{{-- END GRID SECTION --}}


@endsection
