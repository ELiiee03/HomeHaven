@extends('layouts.app') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')

    <h2>Edit Book Request</h2>

    <form action="{{ route('requests.update', $bookRequest->id) }}" method="post">
        @csrf
        @method('PUT')

        <!-- User ID -->
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" id="user_id" value="{{ $bookRequest->user_id }}" required>
        <br>

        <!-- Property Type -->
        <label for="property_type">Property Type:</label>
        <input type="text" name="property_type" id="property_type" value="{{ $bookRequest->property_type }}" required>
        <br>

        <!-- House Type -->
        <label for="house_type">House Type:</label>
        <input type="text" name="house_type" id="house_type" value="{{ $bookRequest->house_type }}" required>
        <br>

        <!-- Budget -->
        <label for="budget">Budget:</label>
        <input type="number" name="budget" id="budget" value="{{ $bookRequest->budget }}" required>
        <br>

        <!-- Appointment Date -->
        <label for="appointment_date">Appointment Date:</label>
        <input type="date" name="appointment_date" id="appointment_date" value="{{ $bookRequest->appointment_date }}" required>
        <br>

        <!-- Appointment Time -->
        <label for="appointment_time">Appointment Time:</label>
        <input type="text" name="appointment_time" id="appointment_time" value="{{ $bookRequest->appointment_time }}" required>
        <br>

        <button type="submit">Update Request</button>
    </form>

@endsection
