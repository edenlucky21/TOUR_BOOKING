<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="/dashboard">Tour System</a>

<div>
<a class="nav-link text-white d-inline" href="/dashboard">Dashboard</a>
<a class="nav-link text-white d-inline" href="/tours">Tours</a>
<a class="nav-link text-white d-inline" href="/guides">Guides</a>
<a class="nav-link text-white d-inline" href="/bookings">Bookings</a>
</div>

</div>
</nav>

<div class="container mt-4">

<h1>Admin Dashboard</h1>

</div>

</body>
</html><h1 class="mb-4">Admin Dashboard</h1>

<div class="row">

<div class="col-md-4">
<div class="card bg-primary text-white">
<div class="card-body">
<h3>{{$tours}}</h3>
<p>Total Tours</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card bg-success text-white">
<div class="card-body">
<h3>{{$guides}}</h3>
<p>Total Guides</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card bg-warning text-white">
<div class="card-body">
<h3>{{$bookings}}</h3>
<p>Total Bookings</p>
</div>
</div>
</div>

</div>