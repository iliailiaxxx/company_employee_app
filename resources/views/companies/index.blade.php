@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Companies</h1>

        <a href="{{ route('companies.create') }}" class="btn btn-success mb-3">
            <i class="fas fa-plus"></i> Add New Company
        </a>

        <table class="table table-bordered" id="companies-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                    <td>
                        @if($company->logo)
                            <img src="{{ asset('storage/' . $company->logo) }}" alt="Logo" width="50">
                        @else
                            <span>No Logo</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this company?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $companies->links() }}  <!-- Pagination links -->
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#companies-table').DataTable({
                // Add any DataTable options here, if needed
                "paging": true,
                "searching": true,
                "lengthChange": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
@endpush
