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



{{-- Search Bar --}}
<div class="container mb-5 w-100 search-bar">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card shadow">
          <div class="card-body">
            <form class="d-flex align-items-center">
              <div class="input-group">
            
                <select class="form-select form-select-lg custom-select">
                  <option value="none">Looking For</option>
                  <option value="sale">Blerje</option>
                  <option value="rent">Shitje</option>
                </select>
                <div class="separator"></div>
                <select class="form-select form-select-lg custom-select">
                  <option value="none">Location</option>
                  <option value="city1">City 1</option>
                  <option value="city2">City 2</option>
                  <option value="city3">City 3</option>
                  <option value="city4">City 4</option>
                  <option value="city5">City 5</option>
                </select>
                <div class="separator"></div>
                <select class="form-select form-select-lg custom-select">
                  <option value="none">Property type</option>
                  <option value="apartment">Apartment</option>
                  <option value="studio">Studio</option>
                  <option value="villa">Villa</option>
                </select>
                <div class="separator"></div>
                <select class="form-select form-select-lg custom-select">
                    <option value="none">Price Range </option>
                    <option value="1000">0-1000</option>
                    <option value="10000">1000-10000</option>
                    <option value="50000">10000-50000</option>
                    <option value="100000">50000-100000</option>
                  </select>
              </div>
              <button class="btn btn-primary ms-3 search-button p-2 px-4" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- End search bar --}}
 
    {{-- GRID SECTION --}}
<section class="grid-section">
    <div class="container mx-auto">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
    
            <div class="col d-flex justify-content-center">
                <div class="card w-75 pb-5">
                    <img src="{{ asset('assets/front/images/real-estate.jpg') }}" class="card-img-top h-sm-50" alt="Property Image">              <div class="card-body">
                    <h5 class="card-title fw-bold p-3">Property Name</h5>
                   
                    <div class="separate"></div>
                    <div class="card-icons d-flex justify-content-between align-items-center m-0 p-0 pb-sm-4 pb-md-4 pb-lg-5 pb-xl-0">
                      <div class="icon">
                        <i class="bi bi-door-open"></i>
                        <span>3</span>
                      </div>
                      <div class="icon">
                        <i class="fa-solid fa-bath"></i>
                        <span>2</span>
                      </div>
                      <div class="icon">
                        <i class="bi bi-microsoft"></i>
                        <span>2</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        
          <div class="col d-flex justify-content-center">
            <div class="card w-75 pb-5">
                <img src="{{ asset('assets/front/images/real-estate.jpg') }}" class="card-img-top h-sm-50" alt="Property Image">              <div class="card-body">
                <h5 class="card-title fw-bold p-3">Property Name</h5>
               
                <div class="separate"></div>
                <div class="card-icons d-flex justify-content-between align-items-center m-0 p-0 pb-sm-4 pb-md-4 pb-lg-5 pb-xl-0">
                  <div class="icon">
                    <i class="bi bi-door-open"></i>
                    <span>3</span>
                  </div>
                  <div class="icon">
                    <i class="fa-solid fa-bath"></i>
                    <span>2</span>
                  </div>
                  <div class="icon">
                    <i class="bi bi-microsoft"></i>
                    <span>2</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="col d-flex justify-content-center">
            <div class="card w-75 pb-5">
                <img src="{{ asset('assets/front/images/real-estate.jpg') }}" class="card-img-top h-sm-50" alt="Property Image">              <div class="card-body">
                <h5 class="card-title fw-bold p-3">Property Name</h5>
               
                <div class="separate"></div>
                <div class="card-icons d-flex justify-content-between align-items-center m-0 p-0 pb-sm-4 pb-md-4 pb-lg-5 pb-xl-0">
                  <div class="icon">
                    <i class="bi bi-door-open"></i>
                    <span>3</span>
                  </div>
                  <div class="icon">
                    <i class="fa-solid fa-bath"></i>
                    <span>2</span>
                  </div>
                  <div class="icon">
                    <i class="bi bi-microsoft"></i>
                    <span>2</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card w-75 pb-5">
                <img src="{{ asset('assets/front/images/real-estate.jpg') }}" class="card-img-top h-sm-50" alt="Property Image">              <div class="card-body">
                <h5 class="card-title fw-bold p-3">Property Name</h5>
               
                <div class="separate"></div>
                <div class="card-icons d-flex justify-content-between align-items-center m-0 p-0 pb-sm-4 pb-md-4 pb-lg-5 pb-xl-0">
                  <div class="icon">
                    <i class="bi bi-door-open"></i>
                    <span>3</span>
                  </div>
                  <div class="icon">
                    <i class="fa-solid fa-bath"></i>
                    <span>2</span>
                  </div>
                  <div class="icon">
                    <i class="bi bi-microsoft"></i>
                    <span>2</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="col d-flex justify-content-center">
            <div class="card w-75 pb-5">
                <img src="{{ asset('assets/front/images/real-estate.jpg') }}" class="card-img-top h-sm-50" alt="Property Image">              <div class="card-body">
                <h5 class="card-title fw-bold p-3">Property Name</h5>
               
                <div class="separate"></div>
                <div class="card-icons d-flex justify-content-between align-items-center m-0 p-0 pb-sm-4 pb-md-4 pb-lg-5 pb-xl-0">
                  <div class="icon">
                    <i class="bi bi-door-open"></i>
                    <span>3</span>
                  </div>
                  <div class="icon">
                    <i class="fa-solid fa-bath"></i>
                    <span>2</span>
                  </div>
                  <div class="icon">
                    <i class="bi bi-microsoft"></i>
                    <span>2</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        

          <div class="col d-flex justify-content-center">
            <div class="card w-75 pb-5">
                <img src="{{ asset('assets/front/images/real-estate.jpg') }}" class="card-img-top h-sm-50" alt="Property Image">              <div class="card-body">
                <h5 class="card-title fw-bold p-3">Property Name</h5>
               
                <div class="separate"></div>
                <div class="card-icons d-flex justify-content-between align-items-center m-0 p-0 pb-sm-4 pb-md-4 pb-lg-5 pb-xl-0">
                  <div class="icon">
                    <i class="bi bi-door-open"></i>
                    <span>3</span>
                  </div>
                  <div class="icon">
                    <i class="fa-solid fa-bath"></i>
                    <span>2</span>
                  </div>
                  <div class="icon">
                    <i class="bi bi-microsoft"></i>
                    <span>2</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        

      </div>
    </div>
  </section>
  {{-- END GRID SECTION --}}
  
 
    {{-- Presentation-2 Section --}}
    <section class="presentation-2">
        
        <div class="present2-half">
            <div class="div1"></div>
            <h2>You're in good hands</h2>
            <div id="good-hands">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, nisi libero nesciunt nam voluptate eos fugiat ipsa voluptas, voluptatibus, enim assumenda accusamus voluptatum similique beatae nemo! Accusamus eaque eligendi in debitis facilis beatae ipsam saepe quia doloribus, eius quam similique quibusdam fuga laborum sint qui corrupti? Sed similique, dolore laudantium voluptates deserunt asperiores dignissimos sit, consequatur minus, veniam earum? Soluta quas illum iste, laudantium nobis ad, aspernatur officia consequatur illo molestiae quae aliquid ab maiores? Ad, accusantium unde doloremque inventore quas eum, consequatur architecto non 
              .
            </div>
            <div class="button-style half-btn">
            <a href="#">TO PROPERTIES<i class="fa-solid fa-arrow-right-long"></i></a>
              </div>
        </div>
        <div class="present2-second-half">
            <img src="{{asset('assets/front/images/realtor.jpg')}}" alt="">
        </div>
    </section>
    {{--End- Presentation-2 Section --}}

    {{-- Above Footer Section --}}
    <section class="above-footer button-style">
        <div>FIND YOUR DREAM <span>HOME</span></div>
        <a href="#">TO PROPERTIES<i class="fa-solid fa-arrow-right-long"></i></a>

    </section>
    {{-- Above-footer End --}}
@endsection
