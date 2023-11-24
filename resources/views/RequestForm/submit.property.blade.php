@extends('layouts.app') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')

    <h2>Booking</h2>

    
    <form action="{{ route('requests.store') }}" method="post">
        @csrf

        <!-- User ID (Assuming you get it from the authenticated user) -->
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

        <!-- Property Type -->
        <label for="property_type">Property Type:</label>
        <input type="text" name="property_type" id="property_type" required>
        <br>

        <!-- House Type -->
        <label for="house_type">House Type:</label>
        <input type="text" name="house_type" id="house_type" required>
        <br>

        <!-- Budget -->
        <label for="budget">Budget:</label>
        <input type="number" name="budget" id="budget" required>
        <br>

        <!-- Appointment Date -->
        <label for="appointment_date">Appointment Date:</label>
        <input type="date" name="appointment_date" id="appointment_date" required>
        <br>

        <!-- Appointment Time -->
        <label for="appointment_time">Appointment Time:</label>
        <input type="text" name="appointment_time" id="appointment_time" required>
        <br>

        <button type="submit">Submit Property</button>
    </form>

@endsection
