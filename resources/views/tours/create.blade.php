<!DOCTYPE html>
<html>
<head>
<title>Add Tour</title>
</head>

<body>

<a href="/dashboard">Dashboard</a> |
<a href="/tours">Tours</a> |
<a href="/guides">Guides</a> |
<a href="/bookings">Bookings</a>

<hr>

<h2>Add New Tour</h2>

<form action="/tours/store" method="POST">

@csrf

<label>Tour Name</label><br>
<input type="text" name="tour_name"><br><br>

<label>Location</label><br>
<input type="text" name="location"><br><br>

<label>Description</label><br>
<textarea name="description"></textarea><br><br>

<label>Price</label><br>
<input type="number" name="price"><br><br>

<button type="submit">Save Tour</button>

</form>

</body>
</html>