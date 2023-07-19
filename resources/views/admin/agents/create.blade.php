@extends('admin.dashboard')

@section('admin_content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li >{{ $error }}</li>

            @endforeach
        </ul>
    </div>
@endif
<div class="container-xxl flex-grow-1 container-p-y">
    <form action="{{ route('agents.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="d-flex align-items-center justify-content-between my-3">
            <h4 class="fw-bold">Create Agent</h4>

            <a href="{{ route('agents.index') }}" class="btn btn-outline-primary">Go Back</a>

        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="firstName" class="form-label ">First Name</label>
                <input type="text" id="firstName" class="form-control  @error('first_name') is-invalid  @enderror" placeholder="John" name="first_name" value="{{ old('first_name') }}">
                @error('first_name')
                     <div class="invalid-feedback">
                         {{ $message }}
                     </div>
                 @enderror
                 </div>
                 <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" id="lastName" class="form-control  @error('last_name') is-invalid  @enderror" placeholder="Doe" name="last_name" value="{{ old('last_name') }}">
                @error('last_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            
            <div class="mb-3">
                <label for="agentEmail" class="form-label">Email address</label>
                <input type="email" class="form-control  @error('email') is-invalid  @enderror" id="agentEmail" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="agentPassword" class="form-label">Password</label>
                <input type="password" id="agentPassword" class="form-control  @error('password') is-invalid  @enderror" placeholder="here" name="password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror        
            </div>
            <div class="mb-3">
                <label for="agentPassword2" class="form-label">Password Confirm</label>
                <input type="password" id="agentPassword2" class="form-control  @error('password_confirmation') is-invalid  @enderror" placeholder="re-write"
                    name="password_confirmation">
                    @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" id="phone" class="form-control  @error('phone') is-invalid  @enderror" placeholder="069 xx 59 xxx" name="phone" value="{{ old('phone') }}">
                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Facebook </label>
                <input type="text" id="phone" class="form-control" placeholder="facebook.com" name="icon1" value="{{ old('icon1') }}">
                <label for="phone" class="form-label">Instagram </label>
                <input type="text" id="phone" class="form-control" placeholder="instagram.com" name="icon2" value="{{ old('icon2') }}">
             
            </div>
            
            <div class="mb-3">
                <label for="image" class="form-label">Photo</label>
                <input class="form-control" type="file" id="image" name="image" >
              </div>
        
        <div class="mb-3">
            <label for="agentDesc" class=" form-label">Description</label>
            <textarea class=" form-control  @error('description') is-invalid  @enderror" id="agentDesc" rows="3" cols="20" name="description" value="{{ old('description') }}"></textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror  
        </div>
          <div class="mb-3">
          <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
</div>
@endsection
