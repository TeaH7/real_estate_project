@extends('front.layout.app')

@section('content')
    <!-- Hero Section -->
    <div id="image-hero" class="mb-5 text-center d-flex justify-content-center flex-column"
        style=" background: url({{ asset('assets/front/images/luca-bravo-O453M2Liufs-unsplash.jpg') }}) center center/cover
 no-repeat;">
        <div class="container z-3 mt-auto">
            <div class="text-white">
                <h1 class="display-5 text-start"> Mirësevini në TIG Estate</h1>
                <div class="row">
                    <div class="col-6">
                        <p class="mt-4 text-start"> Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem
                            Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and
                            scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="container display-flex justify-content-center align-items-end mt-auto hero-section">
            <div class="card w-75 custom-pres-card mx-auto">
                <div class="card-body custom-pres-body">
                    <a href="">ShIKO TE GJITHA PRONAT <span><i class="bi bi-arrow-right ms-2"></i></span></a>

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
                        <h1 class="display-6 text-end">You're in good hands</h1>
                        <p class="mt-5 text-end">Torquatos nostros? quos dolores eos, qui dolorem ipsum per se texit, ne
                            ferae quidem se repellere, idque instituit docere sic: omne animal, simul atque integre
                            iudicante itaque aiunt hanc quasi involuta aperiri, altera occulta quaedam et voluptatem
                            accusantium doloremque.</p>


                        <div class="section-1 d-flex align-items-center justify-content-end">
                            <a href="#">TO PROPERTIES<i class="fa-solid fa-arrow-right-long"></i></a>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- Section --}}
    <section class="presentation-2">

        <div class="half">
            <div class="div1"></div>
            <h2>You're in good hands</h2>
            <div class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, nisi libero
                nesciunt nam voluptate eos fugiat ipsa voluptas, voluptatibus, enim assumenda accusamus
                voluptatum similique beatae nemo! Accusamus eaque eligendi in debitis facilis beatae ipsam saepe
                quia doloribus, eius quam similique quibusdam fuga laborum sint qui corrupti? Sed similique,
                dolore laudantium voluptates deserunt asperiores dignissimos sit, consequatur minus, veniam
                earum? Soluta quas illum iste, laudantium nobis ad, aspernatur officia consequatur illo
                molestiae quae aliquid ab maiores? Ad, accusantium unde doloremque inventore quas eum,
                consequatur architecto non voluptas porro
                officiis dolores ipsum nobis quo, vel nam? Labore earum excepturi mollitia eaque cumque.
            </div>
            <div class="button-style half-btn">
                <a href="#">TO PROPERTIES<i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>

        <div class="second-half">
            <img src="{{ asset('assets/front/images/realtor.jpg') }}" alt="">
        </div>
    </section>
    {{-- End- Section --}}
    {{-- Above Footer Section --}}
    <section class="above-footer button-style">
        <div>FIND YOUR DREAM <span>HOME</span></div>
        <a href="#">TO PROPERTIES<i class="fa-solid fa-arrow-right-long"></i></a>

    </section>
    {{-- Above-footer End --}}
@endsection
