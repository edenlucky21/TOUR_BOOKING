<!DOCTYPE html>
<html>
<head>
    <title>Tour Guides</title>
</head>
<body>

<body>

<a href="/dashboard">Dashboard</a> |
<a href="/tours">Tours</a> |
<a href="/guides">Guides</a> |
<a href="/bookings">Bookings</a>

<hr>

<h2>Tour Guides</h2>

<a href="/guides/create">Add New Guide</a>

<br><br>

<table boarder="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Action</th>
</tr>

@foreach($guides as $guide)

<tr>
<td>{{$guide->id}}</td>
<td>{{$guide->name}}</td>
<td>{{$guide->email}}</td>
<td>{{$guide->phone}}</td>

<td>

<a href="/guides/edit/{{$guide->id}}">Edit</a>

<a href="/guides/delete/{{$guide->id}}">Delete</a>

</td>

</tr>

@endforeach

</table>

</body>
</html>