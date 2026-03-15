<!DOCTYPE html>
<html>
<head><title>Bookings</title></head>
<body>
<h1>Bookings</h1>
<ul>
@foreach($bookings as $booking)
    <li>{{ $booking->customer_name }} - {{ $booking->tour->name ?? 'N/A' }}</li>
@endforeach
</ul>
<a href="{{ route('dashboard') }}">Back to Dashboard</a>
</body>
</html>