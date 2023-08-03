@extends('admin.dashboard')

@section('admin_content')
    <div class="container-xxl">
        <div class="d-flex align-items-center justify-content-between flex-column flex-md-row mt-3">
            <h4 class="fw-bold py-3">Lista e Agjenteve</h4>
            <div class="d-flex justify-content-sm-center">

                <form action="{{ route('agents.index') }}" method="get">
                    @csrf
                    <div class="d-flex justify-content-end">
                        <input type="text" id="" name="searchName" class="form-control me-1 w-75"
                            placeholder="Search Agent">
                        <button class="btn btn-outline-primary me-3">Search</button>
                    </div>
                </form>
                <div class="me-3 text-end">
                    <a href="{{ route('agents.create') }}" class="btn btn-outline-primary" id="createBtn">Add Agent</a>
                </div>

            </div>
        </div>


        <hr class="mt-3 mt-md-0" />


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
                        @foreach ($users as $user)
                            @if ($user->id !== Auth::user()->id)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ $user->phone }}
                                    </td>


                                    <td>

                                        <div>

                                            <a href="{{ route('agents.show', $user->id) }}"
                                                class="btn btn-info btn-sm text-white px-2">
                                                Show
                                            </a>

                                            <a href="{{ route('agents.edit', $user->id) }}"
                                                class="btn btn-success btn-sm text-white px-2">
                                                Edit
                                            </a>

                                            <form action="{{ route('agents.destroy', $user->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm text-white px-2">
                                                    Delete
                                                </button>
                                            </form>


                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach

                    </tbody>

                </table>

            </div>
        </div>
        {{ $users->links('pagination::custom-dashboard') }}
    </div>
@endsection
