@extends('admin.dashboard')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex align-items-center justify-content-between my-3">
            <h4 class="fw-bold">Update Property</h4>

            <a href="{{ route('properties.index') }}" class="btn btn-outline-primary">Go Back</a>

        </div>

        <form action="{{ route('properties.update', $property->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method('PATCH')
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">Property Details</h5>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="defaultFormControlInput" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid  @enderror"
                                    id="defaultFormControlInput" name="title" value="{{ $property->title }}" />
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="defaultFormControlInput" class="form-label">Type of Property</label>
                                        <input type="text"
                                            class="form-control @error('type_of_property') is-invalid  @enderror"
                                            id="defaultFormControlInput" placeholder="Apartment" name="type_of_property"
                                            value="{{ $property->type_of_property }}" />
                                        @error('type_of_property')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="defaultFormControlInput" class="form-label">Price</label>
                                        <input type="text" class="form-control @error('price') is-invalid  @enderror"
                                            id="defaultFormControlInput" placeholder="Euro" name="price"
                                            value="{{ $property->price }}" />
                                        @error('price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="defaultFormControlInput" class="form-label">Address</label>
                                        <input type="text" class="form-control @error('address') is-invalid  @enderror"
                                            id="defaultFormControlInput" placeholder="RR. Don Bosko" name="address"
                                            value="{{ $property->address }}" />
                                        @error('address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="defaultFormControlInput" class="form-label">Country</label>
                                        <input type="text" class="form-control @error('location') is-invalid  @enderror"
                                            id="defaultFormControlInput" placeholder="Albania" name="location"
                                            value="{{ $property->location }}" />
                                        @error('location')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="defaultFormControlInput" class="form-label">Beds</label>
                                        <input type="number"
                                            class="form-control @error('nr_of_beds') is-invalid  @enderror"
                                            id="defaultFormControlInput" placeholder="1" name="nr_of_beds"
                                            value="{{ $property->nr_of_beds }}" />
                                        @error('nr_of_beds')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="defaultFormControlInput" class="form-label">Baths</label>
                                        <input type="number"
                                            class="form-control @error('nr_of_baths') is-invalid  @enderror"
                                            id="defaultFormControlInput" placeholder="2" name="nr_of_baths"
                                            value="{{ $property->nr_of_baths }}" />
                                        @error('nr_of_baths')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="defaultFormControlInput" class="form-label">Area</label>
                                        <input type="number" class="form-control @error('area') is-invalid  @enderror"
                                            id="defaultFormControlInput" placeholder="120" name="area"
                                            value="{{ $property->area }}" />
                                        @error('area')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid  @enderror" id="exampleFormControlTextarea1"
                                    rows="3" name="description">{{ $property->description }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Cover Image</label>
                                        <img src="{{ asset('/storage/' . $property->cover_image) }}" alt=""
                                            class="img-thumbnail mb-2">
                                        <input class="form-control" type="file" id="formFileDisabled"
                                            name="cover_image" />
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Image 1</label>
                                        <img src="{{ asset('/storage/' . $property->img1) }}" alt=""
                                            class="img-thumbnail mb-2">
                                        <input class="form-control" type="file" id="formFileDisabled"
                                            name="img1" />

                                    </div>

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Image 2</label>
                                        <img src="{{ asset('/storage/' . $property->img2) }}" alt=""
                                            class="img-thumbnail mb-2">
                                        <input class="form-control" type="file" id="formFileDisabled"
                                            name="img2" />

                                    </div>

                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Image 3</label>
                                        <img src="{{ asset('/storage/' . $property->img3) }}" alt=""
                                            class="img-thumbnail mb-2">
                                        <input class="form-control" type="file" id="formFileDisabled"
                                            name="img3" />

                                    </div>

                                </div>


                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Image 4</label>
                                        <img src="{{ asset('/storage/' . $property->img4) }}" alt=""
                                            class="img-thumbnail mb-2">
                                        <input class="form-control" type="file" id="formFileDisabled"
                                            name="img4" />

                                    </div>

                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="exampleFormControlSelect1" class="form-label">Example select</label>
                                <select class="form-select" id="exampleFormControlSelect1" name="status_id"
                                    aria-label="Default select example">

                                    <option value="1" {{ $property->status_id == 1 ? 'selected' : '' }}>Publish
                                    </option>
                                    <option value="2" {{ $property->status_id == 2 ? 'selected' : '' }}>Archived
                                    </option>
                                    <option value="3" {{ $property->status_id == 3 ? 'selected' : '' }}>Draft
                                    </option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="exampleFormControlSelect1" class="form-label">For</label>
                                <select class="form-select" id="exampleFormControlSelect1" name="sale_rent"
                                    aria-label="Default select example">

                                    <option value="0" {{ $property->sale_rent == 0 ? 'selected' : '' }}>Rent</option>
                                    <option value="1" {{ $property->sale_rent == 1 ? 'selected' : '' }}>Sale</option>

                                </select>
                            </div>
                        </div>


                    </div>


                </div>


            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
