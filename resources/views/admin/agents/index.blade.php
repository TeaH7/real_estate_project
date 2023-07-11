@extends('admin.dashboard')

@section('admin_content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mt-3">
            <h4 class="fw-bold py-3">Lista e Agjenteve</h4>

            <a href="{{ route('agents.create') }}" class="btn btn-outline-primary">Add Agent</a>

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
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($users as $user)
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

                                    <div>

                                        <a href="{{ route('agents.show', $user->id) }}"
                                            class="btn btn-secondary text-white px-2">
                                            <span></span> Show
                                        </a>

                                        <a href="{{ route('agents.edit', $user->id) }}"
                                            class="btn btn-primary text-white px-2">
                                            <span></span> Edit
                                        </a>
                                        <a href="" class="btn btn-danger text-white px-2">
                                            <form action="{{ route('agents.destroy', $user->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger text-white px-2"
                                                    style="padding: 0; border: none; background: none;">
                                                    <span></span> Delete
                                                </button>
                                            </form>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
