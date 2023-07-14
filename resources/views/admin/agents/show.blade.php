@extends('admin.dashboard')

@section('admin_content')
<div class="container">
    <hr class="mt-0" />
 <div class="card">
    <div class="d-flex align-items-center justify-content-between">
    <h5 class="card-header">Agent No: {{$user->id}}, Information</h5>
    <div>
        <a href="{{route('agents.edit',$user->id)}}" class="btn btn-primary text-white px-2" >
            <span></span> Edit
        </a>
        <a href="" class="btn btn-danger text-white px-2 mx-2">
        <form  action="{{ route('agents.destroy', $user->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger text-white px-2" style="padding: 0; border: none; background: none;">
                <span></span> Delete
            </button>
        </form>
    </a>
    </div>    
</div>
    <div class="table-responsive text-nowrap">
        
        <table class="table">
            
            <tbody class="table-border-bottom-0">
              
                <tr>
                    <th>First Name</th>
                    <td>{{$user->first_name}}</td>
                </tr>
                <tr> <th>Last Name</th>
                    <td>{{$user->last_name}}</td>
                </tr>
                <tr> <th>Username</th>
                    <td>{{$user->username}}</td>
                </tr>
                <tr> <th>Email</th>
                    <td>{{$user->email}}</td>
                </tr>
                <tr> <th>Phone</th>
                    <td>{{$user->phone}}</td>
                </tr>
                <tr> <th>Facebook</th>
                    <td>{{$user->icon1}}</td>
                </tr>
                <tr> <th>Instagram</th>
                    <td>{{$user->icon2}}</td>
                </tr>
                <tr> <th>Description</th>
                    <td>{{$user->id}}</td>
                </tr>

            
            </tbody>
        </table>
        
    </div>

</div>
</div>
@endsection