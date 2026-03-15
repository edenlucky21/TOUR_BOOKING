<!DOCTYPE html>
<html>
<head>
<title>Edit Tour</title>
</head>

<body>

<a href="/dashboard">Dashboard</a> |
<a href="/tours">Tours</a> |
<a href="/guides">Guides</a> |
<a href="/bookings">Bookings</a>

<hr>

<h2>Edit Tour</h2>

<form action="/tours/update/{{$tour->id}}" method="POST">

@csrf

<label>Tour Name</label><br>
<input type="text" name="tour_name" value="{{$tour->tour_name}}"><br><br>

<label>Location</label><br>
<input type="text" name="location" value="{{$tour->location}}"><br><br>

<label>Description</label><br>
<textarea name="description">{{$tour->description}}</textarea><br><br>

<label>Price</label><br>
<input type="number" name="price" value="{{$tour->price}}"><br><br>

<button type="submit">Update Tour</button>

</form>

</body>
</html>