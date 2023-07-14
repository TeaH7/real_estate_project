@extends('admin.dashboard')

@section('admin_content')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-3">
        <h4 class="fw-bold py-3">Lista e Agjenteve</h4>
       
            <a href="{{route('agents.create')}}" class="btn btn-outline-primary">Add Agent</a>
       
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
