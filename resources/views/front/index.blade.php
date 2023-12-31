@extends('front.layout.app')


@section('title')
    Kryefaqja
@endsection

@section('content')
    <!-- Hero Section -->
    <div id="image-hero" class="mb-5 text-center d-flex justify-content-center flex-column"
        style=" background: url({{ asset('assets/front/images/house-ge0fcf6f64_1920.jpg') }}) center center/cover
 no-repeat;">
        <div class="container z-3 mt-auto">
            <div class="text-white">
                <h1 class="display-5 text-start"> Mirësevini në TIG Estate</h1>
                <div class="row">
                    <div class="col-6">
                        <p class="mt-4 text-start text-white bg-shade">Zgjidhni pronën tuaj të ëndrrave me TIG Estate -
                            Partneri juaj i besueshëm në tregun e patundshmërisë. Gjeni, blini, qirani shtëpinë tuaj ideale
                            me ekspertizën tonë të përkushtuar. Bëni hapin drejt një jete të re në një pronë të re!</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="container display-flex justify-content-center align-items-end mt-auto hero-section">
            <div class="card w-75 custom-pres-card mx-auto">
                <div class="card-body custom-pres-body">
                    <a href="/all-listings">SHIKO TE GJITHA PRONAT <span><i class="bi bi-arrow-right ms-2"></i></span></a>

                </div>
            </div>
        </div>

    </div>
    <!-- Hero Section End -->

    <!-- Presentation Section 1 -->
    <section class="py-md-5 py-sm-0">
        <div class="container d-flex py-4 ">
            <div class="row ">
                <div class="col-12 col-md-6">
                    <div class="img-pres-style">
                        <img src="{{ asset('assets/front/images/WhatsApp Image 2023-07-05 at 13.56.59.jpg') }}"
                            alt="" width="100%" height="90%">
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <div class="mt-5 mt-md-0 pe-3">
                        <div class="line"></div>
                        <h1 class="display-6 text-end">Jeni ne duar te sigurta</h1>
                        <p class="mt-5 text-end"> Ne TIG ESTATE ,ne ri-definojmë mënyrën se si eksploroni, blini dhe shisni
                            pronat.
                            Platforma jonë e avancuar për pasuritë e patundshme ofron një përvojë përdoruesi të qëndrueshme,
                            duke ju fuqizuar me listat e pasurive të plota, informacion të saktë mbi
                            tregun dhe udhëzime ekspertesh. Pavarësisht nëse jeni një investitor i përvojshëm ose një blerës
                            i parë këmbë, TIG Estate ofron një udhëtim të personalizuar, duke ju lidhur me pronën e ëndrrave
                            tuaja.
                            <br> Zbuloni një botë të mundësive me platformën tonë inovative,
                            e mbështetur nga angazhimi ynë për transparencë, ndershmëri dhe
                            shërbim të shkëlqyer. Përjetoni shkëlqimin e pasurive të patundshme me
                            TIG Estate sot.
                        </p>


                        <div class="section-1 d-flex align-items-center justify-content-end">
                            <a href="/all-listings">Shko Tek Pronat<i class="fa-solid fa-arrow-right-long"></i></a>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>




    {{-- Search SECTION --}}
    <section class="bg-light py-3 card-section">

        <div class="container mb-4">
            <div class="card border-0 shadow">
                <div class="card-body ">

                    <form action="{{ route('search-listings') }}"method="GET">
                        <div class="row">
                            <div class="d-md-flex align-items-center justify-content-center  ">

                                <div class="col-12 col-md-2 me-2 mb-2 mb-md-0">
                                    <select name="sale_rent" id="" class="form-select py-2 ">
                                        <option disabled selected class="text-gray">Looking for</option>
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sale</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-3  me-2 mb-2 mb-md-0">
                                    <input type="text" name="search_property" placeholder="Property Type"
                                        class="form-control py-2 col-2">
                                </div>
                                <div class="col-12 col-md-2  me-2 mb-2 mb-md-0">
                                    <input type="text" name="location" placeholder="Location" class="form-control py-2">
                                </div>
                                <div class="col-12 col-md-3  me-2 mb-2 mb-md-0">
                                    <select name="price" id="" class="form-select py-2">
                                        <option disabled selected class="text-gray">Price Range</option>
                                        <option value="100-2000">0-2000</option>
                                        <option value="2000-10000">2000-10000</option>
                                        <option value="10000+">10000+</option>
                                    </select>
                                </div>
                                <div class=" d-flex justify-content-center ">
                                    <input type="submit" value="Kërko" class="btn btn-primary py-2 px-4 search-button ">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- End search bar --}}
        {{-- GRID CARDS --}}

        <div class="container mx-auto card-padding ">
            <div class="row my-2 ">
                <div class="col-12">
                    <h2 class="h2 fw-bold text-uppercase text-center">Më Të Fundit</h2>
                </div>
            </div>

            <div class="row mb-3 g-3">
                @foreach ($properties as $property)
                    <div class="col-12 col-md-4">
                        <a href="{{ route('single-property', $property->slug) }}" class="text-decoration-none">
                            <div class="card rounded border-0 shadow">
                                <div class="card-body p-2">
                                    <div class="position-relative">
                                        <img src="{{ asset('storage/' . $property->cover_image) }}"
                                            class="card-img-top rounded min-height-50" alt="Property Image">
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
                                            {{ Str::limit($property->title, 38) }}
                                        </h3>
                                        <p class="my-2 text-dark ms-2">
                                            <i class="fa-sharp fa-solid fa-location-dot me-2"></i>{{ $property->address }},
                                            {{ $property->location }}
                                        </p>
                                        <div
                                            class="d-flex  flex-wrap align-items-center justify-content-start gap-3 my-2 ms-2">
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




            </div>

        </div>
    </section>
    {{-- END GRID SECTION --}}


    {{-- Presentation-2 Section --}}
    <section class="presentation-2">

        <div class="present2-half">
            <div class="div1"></div>
            <h2>Avantazhe të pabarazueshme për shitësit & bleresit e pronave.</h2>
            <div id="good-hands">
                <p>
                    TIG Estate është destinacioni juaj përfundimtar si për blerësit ashtu edhe për shitësit e pronave.
                    Platforma jonë inovative bashkon pa probleme blerësit dhe shitësit, duke krijuar një treg dinamik të
                    mundësive të pasurive të paluajtshme. Si blerës, ju mund të eksploroni një gamë të gjerë pronash, të
                    aksesoni informacione të detajuara dhe të merrni udhëzime të ekspertëve për të gjetur shtëpinë ose
                    investimin tuaj të ëndrrave.
                    <br> Zbuloni mundësitë dhe zhbllokoni qëllimet tuaja të pasurive të paluajtshme me TIG Estate sot.
                </p>
            </div>
            <div class="button-style half-btn">
                <a href="/all-listings">Shko Tek Pronat<i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
        <div class="present2-second-half">
            <img src="{{ asset('assets/front/images/realtor.jpg') }}" alt="">
        </div>
    </section>
    {{-- End- Presentation-2 Section --}}

    {{-- Above Footer Section --}}
    <section class="above-footer button-style">
        <div>FIND YOUR DREAM <span>HOME</span></div>
        {{-- <a href="#">TO PROPERTIES<i class="fa-solid fa-arrow-right-long"></i></a> --}}

    </section>
    {{-- Above-footer End --}}
@endsection
