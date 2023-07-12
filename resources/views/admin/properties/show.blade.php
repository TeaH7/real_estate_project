@extends('admin.dashboard')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y mt-4">

        <div class="card mb-4 p-4">
            <div class="row">
                <div class="col-12 col-md-6 p-0">
                    <div>
                        <img src="{{ asset('/storage/' . $property->cover_image) }}" alt="" width="500px"
                            height="300px" class="img-fluid">
                    </div>

                </div>

            </div>

            <div class="row mt-3">
                <div class="col-6 col-md-2 p-0">

                    @if ($property->img1 !== null)
                        <div class="me-2">

                            <img src="{{ asset('/storage/' . $property->img1) }}" alt="" width="250px"
                                height="150px" class="img-fluid">
                        </div>
                    @endif
                </div>
                <div class="col-6 col-md-2 p-0">
                    @if ($property->img2 !== null)
                        <div class="me-2">

                            <img src="{{ asset('/storage/' . $property->img2) }}" alt="" width="250px"
                                height="150px" class="img-fluid">
                        </div>
                    @endif
                </div>
                <div class="col-6 col-md-2 p-0">
                    @if ($property->img3 !== null)
                        <div class="me-2">

                            <img src="{{ asset('/storage/' . $property->img3) }}" alt="" width="250px"
                                height="150px" class="img-fluid">
                        </div>
                    @endif
                </div>
                <div class="col-6 col-md-2 p-0">
                    @if ($property->img4 !== null)
                        <div class="me-2">

                            <img src="{{ asset('/storage/' . $property->img4) }}" alt="" width="250px"
                                height="150px">
                        </div>
                    @endif
                </div>

            </div>



            <div class="row mt-4">
                <div class="col-6">
                    <div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-8">
                                <h3>{{ $property->title }}</h3>


                            </div>
                            <div class="col-12 col-md-4">
                                <h6 class="badge bg-label-secondary ">{{ $property->type_of_property }}</h6>
                            </div>

                        </div>
                        <span class="badge bg-label-info ">{{ $property->address }},{{ $property->location }}</span>

                        <div class="row mt-3">
                            <div class="col-12 col-md-4">
                                <h6>{{ $property->nr_of_beds }} {{ $property->nr_of_beds === 1 ? 'Bed' : 'Beds' }}</h6>


                            </div>
                            <div class="col-12 col-md-4 ">

                                <h6>{{ $property->nr_of_baths }} {{ $property->nr_of_baths === 1 ? 'Bath' : 'Baths' }}
                                </h6>


                            </div>
                            <div class="col-12 col-md-4">

                                <h6>{{ $property->area }}m<sup>2</sup></h6>

                            </div>
                        </div>


                    </div>

                </div>
                <div class="col-6">
                    <div>
                        <h3>{{ $property->price }}$</h3>
                        <h6 class="badge" style="background-color: #ffac12; color:#031136">
                            {{ $property->sale_rent === 0 ? 'Rent' : 'Sale' }}</h6>
                        @if ($property->status_id == 1)
                            <span class="badge bg-label-success me-1">
                                {{ $property->status->name }}
                            </span>
                        @endif

                        @if ($property->status_id == 2)
                            <span class="badge bg-label-warning me-1">
                                {{ $property->status->name }}
                            </span>
                        @endif

                        @if ($property->status_id == 3)
                            <span class="badge bg-label-info me-1">
                                {{ $property->status->name }}
                            </span>
                        @endif

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <p>{{ $property->description }}</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
