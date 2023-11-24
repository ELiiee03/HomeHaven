@extends('layouts.app') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')

    <h2>Book Requests</h2>

    <table border="1">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Property Type</th>
                <th>House Type</th>
                <th>Budget</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookRequests as $bookRequest)
                <tr>
                    <td>{{ $bookRequest->user_id }}</td>
                    <td>{{ $bookRequest->property_type }}</td>
                    <td>{{ $bookRequest->house_type }}</td>
                    <td>{{ $bookRequest->budget }}</td>
                    <td>{{ $bookRequest->appointment_date }}</td>
                    <td>{{ $bookRequest->appointment_time }}</td>
                    <td>
                        <a href="{{ route('requests.edit', $bookRequest->id) }}">Edit</a>
                        <!-- You may add a delete link/button as well -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('requests.create') }}">Create New Request</a>

@endsection
