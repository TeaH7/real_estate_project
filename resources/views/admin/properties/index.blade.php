@extends('admin.dashboard')

@section('admin_content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mt-3">
            <h4 class="fw-bold py-3">Lista e pronave</h4>
            @if (auth()->user()->role_id === 2)
                <a href="#" class="btn btn-outline-primary">Add Property</a>
            @endif
        </div>
        <hr class="mt-0" />
        <div class="card">
            <h5 class="card-header">Table Basic</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Client</th>
                            <th>Users</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                            <td>Albert Cook</td>
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
