@extends('front.layout.app')

@section('content')
    <!-- Hero Section -->
    <div id="image-hero" class="mb-5 text-center d-flex justify-content-center flex-column"
        style=" background: url({{ asset('assets/front/images/luca-bravo-O453M2Liufs-unsplash.jpg') }}) center center/cover
 no-repeat;">
        <div class="container z-3">
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


            <div class="container position-absolute bottom-0 hero-section">
                <div class="card w-75 mx-auto mt-5 custom-card">
                    <div class="card-body">
                        <form action="" method="GET">
                            <a href="">ShIKO TE GJITHA PRONAT <span><i class="bi bi-arrow-right ms-2"></i></span></a>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    <!-- Hero Section End -->


    <!-- Presentation Section 1 -->

    <section class="custom-home-about py-md-5 py-sm-0">
        <div class="container d-flex py-4 ">
            <div class="row d-flex">
                <div class="col-6 d-none d-md-block">
                    <div>
                        <img src="{{ asset('assets/front/images/luca-bravo-O453M2Liufs-unsplash.jpg') }}" alt=""
                            width="500px" height="300px">
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <div class="mt-5 mt-md-0 pe-3">
                        <h1 class="display-6">You're in good hands</h1>
                        <p class="mt-5 me-5 mb-5">Torquatos nostros? quos dolores eos, qui dolorem ipsum per se texit, ne
                            ferae quidem se repellere, idque instituit docere sic: omne animal, simul atque integre
                            iudicante itaque aiunt hanc quasi involuta aperiri, altera occulta quaedam et voluptatem
                            accusantium doloremque.</p>


                        <section class="section-1">
                            <a href="#">TO PROPERTIES<i class="fa-solid fa-arrow-right-long"></i></a>

                        </section>
                    </div>

                </div>
            </div>
        </div>


    </section>
@endsection
