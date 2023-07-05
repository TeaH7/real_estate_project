@extends('front.layout.app')

@section('content')
    <!-- Hero Section -->
    <div id="image-hero" class="mb-5 text-center d-flex justify-content-center flex-column"
        style=" background: url({{ asset('assets/front/images/luca-bravo-O453M2Liufs-unsplash.jpg') }}) center center/cover
 no-repeat;">
        <div class="container z-3">
            <div class="text-white">
                <h1 class="display-5"> Mirësevini në TIG Estate</h1>
                <p class="mt-4"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book.</p>
            </div>

        </div>

    </div>
    <!-- Hero Section End -->
@endsection
