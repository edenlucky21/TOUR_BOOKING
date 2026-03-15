<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
    <body>

<a href="/dashboard">Dashboard</a> |
<a href="/tours">Tours</a> |
<a href="/guides">Guides</a> |
<a href="/bookings">Bookings</a>

<hr>
<h1>Dashboard</h1>
<p>Tours: {{ $tours }}</p>
<p>Bookings: {{ $bookings }}</p>
<p>Guides: {{ $guides }}</p>
<a href="{{ route('tours.index') }}">Tours</a> |
<a href="{{ route('bookings.index') }}">Bookings</a>
</body>
</html>