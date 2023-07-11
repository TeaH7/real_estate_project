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
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="JohnDoe30" name="username">
          </div>
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" id="firstName" class="form-control"  placeholder="John" name="first_name">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" id="lastName" class="form-control"  placeholder="Doe" name="last_name"> 
      </div>
      <div class="mb-3">
        <label for="agentEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="agentEmail" placeholder="name@example.com" name="email">
      </div>
      <div class="mb-3">
        <label for="agentPassword" class="form-label">Password</label>
        <input type="password" id="agentPassword" class="form-control"  placeholder="here" name="password">
      </div>
      <div class="mb-3">
        <label for="agentPassword2" class="form-label">Password Confirm</label>
        <input type="password" id="agentPassword2" class="form-control"  placeholder="re-write" name="password_confirmation">
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" id="phone" class="form-control"  placeholder="069 xx 59 xxx" name="phone">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Photo</label>
        <input class="form-control" type="file" id="image" name="image">
      </div>
    <div class="mb-3">
      <label for="agentDesc" class="form-label">Description</label>
      <textarea class="form-control" id="agentDesc" rows="3" name="description"></textarea>
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
@endsection