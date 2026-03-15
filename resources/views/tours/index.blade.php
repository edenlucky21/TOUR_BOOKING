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