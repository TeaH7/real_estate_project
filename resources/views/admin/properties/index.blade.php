@extends('admin.dashboard')

@section('admin_content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mt-3">
            <h4 class="fw-bold py-3">Lista e pronave</h4>
            @if (auth()->user()->role_id === 2)
                <a href="{{ route('properties.create') }}" class="btn btn-outline-primary">Add Property</a>
            @endif
        </div>
        <hr class="mt-0" />
        <div class="card">

            <div class="table-responsive text-nowrap ">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Address</th>
                            <th>Price</th>
                            <th>For</th>
                            <th>Status</th>
                            <th>Is Aproved</th>
                            @if (auth()->user()->role_id === 1)
                                <th>Agent</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if ($properties->count())
                            @foreach ($properties as $property)
                                <tr>
                                    <td>{{ $property->title }}</td>
                                    <td>{{ $property->type_of_property }}</td>
                                    <td>{{ $property->address }},{{ $property->location }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>{{ $property->sale_rent === 0 ? 'Rent' : 'Sale' }}</td>

                                    <td>
                                        @if ($property->status_id == 1)
                                            <span class="badge bg-label-success me-1">
                                                {{ $property->status->name }}
                                            </span>
                                        @endif

                                        @if ($property->status_id == 2)
                                            <span class="badge bg-label-warning me-1">
                                                {{ $property->status->name }}
                                            </span>
                                        @endif

                                        @if ($property->status_id == 3)
                                            <span class="badge bg-label-info me-1">
                                                {{ $property->status->name }}
                                            </span>
                                        @endif

                                    </td>
                                    <td>

                                        @if ($property->is_aproved !== null)
                                            <span
                                                class="badge bg-label-{{ $property->is_aproved === 1 ? 'success' : 'danger' }} me-1">
                                                {{ $property->is_aproved === 1 ? 'Active' : 'Refused' }}
                                            </span>
                                        @else
                                            <span class="badge bg-label-warning me-1">
                                                Waiting for aproval
                                            </span>
                                        @endif
                                    </td>

                                    @if (auth()->user()->role_id === 1)
                                        <td>{{ $property->user->first_name }}</td>
                                    @endif

                                    @if (auth()->user()->role_id !== 1)
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('properties.edit', $property->slug) }}"><i
                                                            class="bx bx-edit-alt me-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('properties.show', $property->slug) }}"><i
                                                            class="bx bx-edit-alt me-1"></i>
                                                        Show</a>
                                                    <form action="{{ route('properties.destroy', $property->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item"><i class="bx bx-trash me-1"></i>
                                                            Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">No Properties</td>
                            </tr>
                        @endif


                    </tbody>
                </table>

            </div>

        </div>
        {{ $properties->links('pagination::custom-dashboard') }}
    </div>
@endsection
