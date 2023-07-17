@extends('admin.dashboard')

@section('admin_content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('agents.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">

  @method('put')
    @csrf
<h5 class="card-header">Update Agent Info</h5>
<div class="card-body">
    <div class="mb-3">
        <label for="firstName" class="form-label ">First Name</label>
        <input type="text" id="firstName" class="form-control " placeholder="John" name="first_name" value="{{ old('firstName') }}">
        @error('firstName')
             <div class="invalid-feedback">
                 {{ $message }}
             </div>
         @enderror
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" id="lastName" class="form-control " placeholder="Doe" name="last_name" value="{{ old('lastName') }}">
        @error('lastName')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control"  id="username" placeholder="JohnDoe30" 
         name="username" value="{{ old('username') }}">
         @error('username')
        <div class="invalid-feedback">
          {{ $message }}
         </div>
 @enderror
    </div>

    <div class="mb-3">
        <label for="agentEmail" class="form-label">Email address</label>
        <input type="email" class="form-control " id="agentEmail" placeholder="name@example.com" name="email" value="{{ old('agentEmail') }}">
        @error('agentEmail')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="agentPassword" class="form-label">Password</label>
        <input type="password" id="agentPassword" class="form-control " placeholder="here" name="password">
        @error('agentPassword')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror        
    </div>

    <div class="mb-3">
        <label for="agentPassword2" class="form-label">Password Confirm</label>
        <input type="password" id="agentPassword2" class="form-control " placeholder="re-write"
            name="password_confirmation">
            @error('password_confirmation')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" id="phone" class="form-control " placeholder="069 xx 59 xxx" name="phone" value="{{ old('phone') }}">
        @error('phone')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Facebook </label>
        <input type="text" id="phone" class="form-control" placeholder="facebook.com" name="icon1" value="{{ old('icon1') }}">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Instagram </label>
        <input type="text" id="phone" class="form-control" placeholder="instagram.com" name="icon2" value="{{ old('icon2') }}">
     
    </div>
    
    <div class="mb-3">
        <label for="image" class="form-label">Photo</label>
        <input class="form-control" type="file" id="image" name="image" >
    </div>

    <div class="mb-3">
        <label for="agentDesc" class=" form-label">Description</label>
         <textarea class="form-control" id="agentDesc" rows="3" name="description" value="{{ old('description') }}"></textarea>
         @error('description')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
        @enderror  
    </div>
  
  <button type="submit" class="btn btn-primary">Save</button>

</div>

</form>
@endsection