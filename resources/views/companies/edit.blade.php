@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Edit Company</h1>

        <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Company Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $company->name) }}" required>
                @error('name')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="form-group">
                <label for="email">Company Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $company->email) }}" required>
                @error('email')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="form-group">
                <label for="website">Website</label>
                <input type="url" name="website" id="website" class="form-control" value="{{ old('website', $company->website) }}">
                @error('website')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control">
                @if ($company->logo)
                    <div>
                        <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" width="100">
                    </div>
                @endif
                @error('logo')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Company</button>
        </form>
    </div>
@endsection
