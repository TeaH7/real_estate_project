@extends('admin.dashboard')

@section('admin_content')
<div class="container">
    <div class="card special mt-4">
    <div class="row mt-2 mx-2">
        <div class="d-flex align-items-center justify-content-between my-3">
    <h5 class="card-header">Contact Information</h5>
    <a href="{{ route('contact.index') }}" class="btn btn-outline-primary">Go Back</a>
</div>
<hr class="mb-0">
<div class="mt-4 ms-4">
    <div class="col-12 mb-2"><span class="fst-italic text-black fw-bold" >Name: </span>{{$contact->name}}</div>

    <div class="col-12 mb-2"><span class="fst-italic text-black  fw-bold" >Email: </span>{{$contact->email}}</div>
    <div class="col-12 mb-2"><span class="fst-italic  text-black fw-bold" >Message: </span>{{$contact->message}}</div>
</div>
</div>
</div>
</div>
@endsection
