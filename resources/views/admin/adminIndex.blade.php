@extends('admin.dashboard')

@section('admin_content')
    <div class="container mt-5">
        <h1 class="text-center">Mirësevini në Panelin e Administrimit të TIG Estate</h1>
    </div>
    <div>
        @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
@endif
@if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
    </div>
@endif
    </div>
@endsection
