
@extends('admin.dashboard')

@section('admin_content')

    <div class="container">
        <div class="d-flex align-items-center justify-content-between mt-3">
            <h4 class="fw-bold py-3">Lista e Kontakteve</h4>

         
        </div>
        <hr class="mt-0" />
        <div class="card">
            <h5 class="card-header">Contacts</h5>
            <hr class="mt-0" />
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>

                            <th>Name </th>
                            <th>Email</th>
                            <th>Date</th>
                            
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if ($contacts->count())
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                 
                                <td>{{ $contact->email }}</td>
                                <td>{{$contact->created_at}}</td>
                               
                               
                                <td>

                                    <div>

                                        <a href="{{ route('contact.show', $contact->id) }}"
                                            class="btn btn-secondary text-white px-2">
                                            <span></span> Show
                                        </a>

                                        <a href="" class="btn btn-danger text-white px-2">
                                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST"
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
                        
                        @else
                        <tr><td colspan="7">No Contacts</td></tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


