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


    {{-- Section --}}
    <section class="presentation-2">
        
        <div class="half">
            <div class="div1"></div>
            <h2>You're in good hands</h2>
            <div class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, nisi libero nesciunt nam voluptate eos fugiat ipsa voluptas, voluptatibus, enim assumenda accusamus voluptatum similique beatae nemo! Accusamus eaque eligendi in debitis facilis beatae ipsam saepe quia doloribus, eius quam similique quibusdam fuga laborum sint qui corrupti? Sed similique, dolore laudantium voluptates deserunt asperiores dignissimos sit, consequatur minus, veniam earum? Soluta quas illum iste, laudantium nobis ad, aspernatur officia consequatur illo molestiae quae aliquid ab maiores? Ad, accusantium unde doloremque inventore quas eum, consequatur architecto non voluptas porro 
                officiis dolores ipsum nobis quo, vel nam? Labore earum excepturi mollitia eaque cumque.
            </div>
            <div class="button-style half-btn">
            <a href="#">TO PROPERTIES<i class="fa-solid fa-arrow-right-long"></i></a>
              </div>
        </div>
        <div class="second-half">
            <img src="{{asset('assets/front/images/realtor.jpg')}}" alt="">
        </div>
    </section>
    {{--End- Section --}}
    {{-- Above Footer Section --}}
    <section class="above-footer button-style">
        <div>FIND YOUR DREAM <span>HOME</span></div>
        <a href="#">TO PROPERTIES<i class="fa-solid fa-arrow-right-long"></i></a>

    </section>
    {{-- Above-footer End --}}
@endsection
