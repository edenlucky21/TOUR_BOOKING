<!DOCTYPE html>
<html>
<head>
    <title>Tours</title>
</head>

<body>

<a href="/dashboard">Dashboard</a> |
<a href="/tours">Tours</a> |
<a href="/guides">Guides</a> |
<a href="/bookings">Bookings</a>

<hr>

<h2>Available Tours</h2>

<a href="/tours/create">Add New Tour</a>

<br><br>

<form action="/tours/search" method="GET">
<input type="text" name="search" placeholder="Search tour or location">
<button type="submit">Search</button>
</form>

<br>

<table class="table table-bordered table-striped">

<tr>
<th>ID</th>
<th>Tour Name</th>
<th>Location</th>
<th>Description</th>
<th>Price</th>
<th>Action</th>
</tr>

@foreach($tours as $tour)

<tr>

<td>{{$tour->id}}</td>
<td>{{$tour->tour_name}}</td>
<td>{{$tour->location}}</td>
<td>{{$tour->description}}</td>
<td>{{$tour->price}}</td>

<td>

<a class="btn btn-primary btn-sm" href="/tours/edit/{{$tour->id}}">Edit</a>

<a class="btn btn-danger btn-sm" href="/tours/delete/{{$tour->id}}">Delete</a>

<a class="btn btn-success btn-sm" href="/book/{{$tour->id}}">Book</a>

</td>

</tr>

@endforeach

</table>