@extends('admin.dashboard')

@section('admin_content')
<div class="container-xxl">
    <div class="row">
        <div class="col-6 mt-4">
    <h4 class="fw-bold text-center text-sm-start py-3">Lista e Agjenteve</h4>
</div>
<div class="col-6 mt-3">
    <div class="d-flex align-items-center flex-column flex-sm-row justify-content-between justify-content-md-end mt-3">
 
       <form action="{{route('agents.index')}}" method="get" class="d-flex  flex-column flex-md-row ">
            @csrf
        <input type="text" id="" name="searchName" class="form-control me-1" placeholder="Search Agent">
        <button class="btn btn-outline-primary me-3 w-100">Search</button>

       </form>
  
       <a href="{{route('agents.create')}}" class=" btn btn-outline-primary px-5 px-md-3 py-sm-3 py-md-2 " id="createBtn">Add Agent</a>
    </div>
    </div>
</div>
    
    <hr class="mt-0" />
    <div class="card">
        <h5 class="card-header">Agjentet</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
           
                        <th>Agent ID</th>
                        <th>Agent</th>
                        <th>Email</th>
                        <th>Phone</th>
            
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($users as $user )
                    @if ($user->id !== Auth::user()->id) 
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->first_name .' '. $user->last_name}}</td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            {{$user->phone}}
                        </td>
                       
                       
                        <td>
                    
                            <div>
                                
                                <a href="{{route('agents.show',$user->id)}}" class="btn btn-secondary text-white px-2" >
                                    <span></span> Show
                                </a>
                                
                                <a href="{{route('agents.edit',$user->id)}}" class="btn btn-primary text-white px-2" >
                                    <span></span> Edit
                                </a>
                                <a href="" class="btn btn-danger text-white px-2">
                                <form  action="{{ route('agents.destroy', $user->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger text-white px-2" style="padding: 0; border: none; background: none;">
                                        <span></span> Delete
                                    </button>
                                </form>
                            </a>
                                
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                  
                </tbody>
                
            </table>
            {{ $users->links('pagination::custom-dashboard') }}
        </div>
    </div>
</div>
@endsection
