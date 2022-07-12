<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<style type="text/css">
	*{
        
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.bg{
  background-color: purple;
}
</style>
<body style="background-color:whitesmoke;">

	<nav class="navbar navbar-expand-md bg">
  
    <a class="navbar-brand   fs-3 ms-4 text-white  fw-bold " href="#">ROSE E-EVENTS</a>
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="btn">
      <ul class="navbar-nav ms-auto">
        
        <li class="nav-item">
          <a href="\adminlogout" class="nav-link mx-4 fs-5 text-white"><i class="bi bi-box-arrow-left"></i> Logout</i></a>
        </li>
      </ul>
    </div>
  </nav>

	<!--Table-->
	<center>
		<h2  style="margin-top:50px; font-style: italic;color: purple;">Booking Details</h2>
<table class="table table-striped w-auto" style="margin-top: 10px;height: 280px;">

  <!--Table head-->
  <thead>
    <tr>
      <th style="color:purple;">Sl No.</th>
      <th style="color:purple;">User Name</th>
      <th style="color:purple;">Phone Number</th>
      
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
  	@foreach($result as $value)   
    <tr class="table" style="background-color:#BA87AE">
      <th scope="row" >{{$value->id}}</th>
      
	<td style="font-weight: 600;">{{$value->username}}</td>
	<td style="font-weight: 600;">{{$value->phone}}</td>
	
	<td><a href="/bkdetails/{{$value->id}}" style="text-decoration: none;color: black;">Event Details</a></td>
					
    </tr>
    @endforeach
  </tbody>
  <!--Table body-->


</table>
</center>


<footer class="bg text-center text-lg-start" style="height: 200px;">
  <!-- Copyright -->
  <div class="text-center " style="background-color: rgba(0, 0, 0, 0.2); height: 80px;
  border-radius: 0 0 50% 50% / 0 0 100% 100%;padding-top: 140px;">
    © 2022 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">Rose E-Events.com</a>
  </div>
  <!-- Copyright -->
</footer>




</body>


</html>






<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="/adminaction">
	@csrf
	<table border="3">
		<tr>
			<th>id</th>
			<th>userid</th>
			<th>name</th>
			<th>place</th>
			<th>date</th>
			<th>time</th>
			<th>status</th>
		</tr>
		@foreach($result as $value)  
		<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->uid}}</td>
					<td>{{$value->name}}</td>
					<td>{{$value->place}}</td>
					<td>{{$value->dte}}</td>
					<td>{{$value->time}}</td>
					<td>{{$value->status}}</td>
					<td><a href="/adminapprove/{{$value->id}}">Confirm</a></td>
					<td><a href="/admincancel/{{$value->id}}">Cancel</a></td>
					@endforeach
	</table>
</form>
</body>
</html> -->