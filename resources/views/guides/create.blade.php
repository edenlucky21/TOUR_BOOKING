<!DOCTYPE html>
<html>
<head>
<title>Add Guide</title>
</head>

<body>

<body>

<a href="/dashboard">Dashboard</a> |
<a href="/tours">Tours</a> |
<a href="/guides">Guides</a> |
<a href="/bookings">Bookings</a>

<hr>

<h2>Add New Tour Guide</h2>

<form action="/guides/store" method="POST">

@csrf

<label>Name</label><br>
<input type="text" name="name"><br><br>

<label>Email</label><br>
<input type="email" name="email"><br><br>

<label>Phone</label><br>
<input type="text" name="phone"><br><br>

<button type="submit">Save Guide</button>

</form>

</body>
</html>