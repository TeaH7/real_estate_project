@extends('admin.dashboard')

@section('admin_content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mt-3">
            <h4 class="fw-bold py-3">Aprove Properties</h4>

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
                            <th>Agent</th>


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
                                    <td>{{ $property->user->first_name }}</td>
                                    <td>

                                        <div>

                                            <form action="{{ route('properties.aprove', $property->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('PUT')

                                                <button type="submit" class="btn btn-success  btn-sm px-2">
                                                    Aprove
                                                </button>

                                            </form>
                                            <form action="{{ route('properties.refuse', $property->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('PUT')

                                                <button type="submit" class="btn btn-danger btn-sm px-2">
                                                    Refuse
                                                </button>

                                            </form>


                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">No Properties to Aprove</td>
                            </tr>
                        @endif


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
