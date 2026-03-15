<!DOCTYPE html>
<html>

<head>
<title>Edit Guide</title>
</head>

<body>

<body>

<a href="/dashboard">Dashboard</a> |
<a href="/tours">Tours</a> |
<a href="/guides">Guides</a> |
<a href="/bookings">Bookings</a>

<hr>

<h2>Edit Tour Guide</h2>

<form action="/guides/update/{{$guide->id}}" method="POST">

@csrf

<label>Name</label><br>
<input type="text" name="name" value="{{$guide->name}}"><br><br>

<label>Email</label><br>
<input type="email" name="email" value="{{$guide->email}}"><br><br>

<label>Phone</label><br>
<input type="text" name="phone" value="{{$guide->phone}}"><br><br>

<button type="submit">Update Guide</button>

</form>

</body>
</html>