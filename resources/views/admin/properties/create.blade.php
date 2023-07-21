@extends('admin.dashboard')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex align-items-center justify-content-between my-3">
            <h4 class="fw-bold">Create a Property</h4>

            <a href="{{ route('properties.index') }}" class="btn btn-outline-primary">Go Back</a>

        </div>

        <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">Property Details</h5>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="defaultFormControlInput" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid  @enderror"
                                    id="defaultFormControlInput" name="title" value="{{ old('title') }}" />
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
                                            value="{{ old('type_of_property') }}" />
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
                                            value="{{ old('price') }}" />
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
                                            value="{{ old('address') }}" />
                                        @error('address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="defaultFormControlInput" class="form-label">City</label>
                                        <input type="text" class="form-control @error('location') is-invalid  @enderror"
                                            id="defaultFormControlInput" placeholder="Albania" name="location"
                                            value="{{ old('location') }}" />
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
                                            value="{{ old('nr_of_beds') }}" />
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
                                            value="{{ old('nr_of_baths') }}" />
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
                                            value="{{ old('area') }}" />
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
                                    rows="3" name="description">{{ old('description') }}</textarea>
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
                                        <input class="form-control @error('cover_image') is-invalid  @enderror"
                                            type="file" id="formFileDisabled" name="cover_image" />
                                        @error('cover_image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Image 1</label>
                                        <input class="form-control @error('img1') is-invalid  @enderror" type="file"
                                            id="formFileDisabled" name="img1" />
                                        @error('img1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Image 2</label>
                                        <input class="form-control @error('img2') is-invalid  @enderror" type="file"
                                            id="formFileDisabled" name="img2" />
                                        @error('img2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Image 3</label>
                                        <input class="form-control @error('img3') is-invalid  @enderror" type="file"
                                            id="formFileDisabled" name="img3" />
                                        @error('img3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>


                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Image 4</label>
                                        <input class="form-control @error('img4') is-invalid  @enderror" type="file"
                                            id="formFileDisabled" name="img4" />
                                        @error('img4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="exampleFormControlSelect1" class="form-label">Example select</label>
                                <select class="form-select @error('status_id') is-invalid  @enderror"
                                    id="exampleFormControlSelect1" name="status_id" aria-label="Default select example">
                                    <option selected disabled>Select Status</option>
                                    <option value="1">Publish</option>
                                    <option value="2">Archived</option>
                                    <option value="3">Draft</option>
                                </select>
                                @error('status_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="exampleFormControlSelect1" class="form-label">For</label>
                                <select class="form-select @error('sale_rent') is-invalid  @enderror"
                                    id="exampleFormControlSelect1" name="sale_rent" aria-label="Default select example">
                                    <option selected disabled>Rent or Sale</option>
                                    <option value="0">Rent</option>
                                    <option value="1">Sale</option>

                                </select>
                                @error('sale_rent')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                    </div>


                </div>


            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection
