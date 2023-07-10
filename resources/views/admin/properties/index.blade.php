@extends('admin.dashboard')

@section('admin_content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mt-3">
            <h4 class="fw-bold py-3">Lista e pronave</h4>
            {{-- @if (auth()->user()->role_id === 2) --}}
            <a href="{{ route('properties.create') }}" class="btn btn-outline-primary">Add Property</a>
            {{-- @endif --}}
        </div>
        <hr class="mt-0" />
        <div class="card">
            <h5 class="card-header">Table Basic</h5>
            <div class="table-responsive text-nowrap">
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
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>Prona 1</td>
                            <td>Apartment</td>
                            <td>Don Bosko, Tirane</td>
                            <td>400$</td>
                            <td>Rent</td>
                            <td>
                                @php
                                    $status = 1;
                                @endphp
                                @if ($status !== null)
                                    <span class="badge bg-label-{{ $status === 1 ? 'success' : 'danger' }} me-1">
                                        {{ $status === 1 ? 'Active' : 'Refused' }}
                                    </span>
                                @else
                                    <span class="badge bg-label-warning me-1">
                                        Waiting for aproval
                                    </span>
                                @endif
                            </td>
                            <td>
                                @php
                                    $is_aproved = 1;
                                @endphp
                                @if ($is_aproved !== null)
                                    <span class="badge bg-label-{{ $is_aproved === 1 ? 'success' : 'danger' }} me-1">
                                        {{ $is_aproved === 1 ? 'Active' : 'Refused' }}
                                    </span>
                                @else
                                    <span class="badge bg-label-warning me-1">
                                        Waiting for aproval
                                    </span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
