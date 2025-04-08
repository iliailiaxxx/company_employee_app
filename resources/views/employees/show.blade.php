@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employee Details</h1>

        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>First Name</th>
                    <td>{{ $employee->first_name }}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{ $employee->last_name }}</td>
                </tr>
                <tr>
                    <th>Company</th>
                    <td>{{ $employee->company->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $employee->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $employee->phone }}</td>
                </tr>
            </table>
        </div>

        <div class="mt-4">
            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to Employees</a>

        </div>

    </div>
@endsection
