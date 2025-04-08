@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Company Details</h1>

        <div class="row">
            <div class="col-md-6">
                <strong>Name:</strong> {{ $company->name }}
            </div>
            <div class="col-md-6">
                <strong>Email:</strong> {{ $company->email }}
            </div>
            <div class="col-md-6">
                <strong>Website:</strong> <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a>
            </div>
            <div class="col-md-6">
                @if ($company->logo)
                    <strong>Logo:</strong>
                    <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" width="150">
                @else
                    <strong>No Logo Uploaded</strong>
                @endif
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('companies.index') }}" class="btn btn-secondary">Back to Companies</a>

        </div>
    </div>
@endsection
