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

                    <form action="{{ route('all-listings') }}" method="GET">
                        <div class="row">
                            <div class="d-flex justify-content-center ">

                                <div class="col-md-3 me-2">
                                    <select name="sale_rent" id="" class="form-select py-2">
                                        <option disabled selected class="text-gray">Looking for</option>
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sale</option>
                                    </select>
                                </div>
                                <div class="col-md-2 me-2">
                                    <input type="text" name="search_property" placeholder="Property Type"
                                        class="form-control py-2">
                                </div>
                                <div class="col-md-2 me-2">
                                    <input type="text" name="location" placeholder="Location" class="form-control py-2">
                                </div>
                                <div class="col-md-3 me-2">
                                    <select name="price" id="" class="form-select py-2">
                                        <option disabled selected class="text-gray">Price Range</option>
                                        <option value="100-2000">0-2000</option>
                                        <option value="2000-10000">2000-10000</option>
                                        <option value="10000+">10000+</option>
                                    </select>
                                </div>
                                <input type="submit" value="Kërko" class="btn btn-primary py-2 px-4 search-button">
                            </div>
                    </form>
                </div>
            </div>

        </div>
        </div>

        {{-- End search bar --}}
        {{-- GRID CARDS --}}

        <div class="container mx-auto ">
            <div class="row mb-3 g-3">
                @foreach ($properties as $property)
                    <div class="col-12  col-lg-3 col-md-6">
                        <a href="{{ route('single-property', $property->slug) }}" class="text-decoration-none">
                            <div class="card rounded border-0 shadow">
                                <div class="card-body p-2">
                                    <div class="position-relative">
                                        <img src="{{ asset('/storage/' . $property->cover_image) }}"
                                            class="card-img-top rounded" alt="Property Image">

                                        @if ($property->sale_rent === 0)
                                            <span
                                                class="position-absolute top-0 end-0 mt-2 me-2 badge bg-main-color fs-6">Rent</span>
                                        @else
                                            <span
                                                class="position-absolute top-0 end-0 mt-2 me-2 badge bg-second-color fs-6">Sale</span>
                                        @endif

                                    </div>
                                    <div class="my-3">
                                        <h3 class="h5 text-decoration-none text-dark fw-bold mt-2 ms-2">
                                            {{ $property->title }}
                                        </h3>
                                        <p class="my-2 text-dark ms-2">
                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                            {{ $property->address }},{{ $property->location }}
                                        </p>
                                        <div class="d-flex align-items-center justify-content-start gap-3 my-2 ms-2">
                                            <div class="badge px-2 py-1 bg-second-color">
                                                <i class="fa-sharp fa-solid fa-bed"></i> {{ $property->nr_of_beds }}
                                            </div>
                                            <div class="badge px-2 py-1 bg-second-color ">
                                                <i class="fa-sharp fa-solid fa-bath"></i> {{ $property->nr_of_baths }}
                                            </div>
                                            <div class="badge px-2 py-1 bg-second-color">
                                                <i class="fa-solid fa-house"></i> {{ $property->area }}m<sup>2</sup>
                                            </div>
                                            <div class="badge px-2 py-1 bg-second-color">
                                                <i class="fa-solid fa-house"></i>
                                                {{ $property->type_of_property }}
                                            </div>
                                        </div>
                                        <h3 class="h4 mt-2 text-dark fw-bold ms-2">€{{ $property->price }}</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                {{ $properties->links('pagination::frontend') }}

            </div>
        </div>

    </section>
    {{-- END GRID SECTION --}}
@endsection
