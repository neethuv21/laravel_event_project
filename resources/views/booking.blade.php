<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		@media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

 *{
        
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.bg{
  background-color: purple;
}
	</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  </head>


    <body >

    	<nav class="navbar navbar-expand-md bg">
  
    <a class="navbar-brand   fs-3 ms-4 text-white  fw-bold " href="#">ROSE E-EVENTS</a>
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="btn">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="\bdetails" class="nav-link mx-2 fs-5 text-white"><i class="bi bi-book"></i> Booking Details</i></a>
        </li>
        <li class="nav-item">
          <a href="\logout" class="nav-link mx-4 fs-5 text-white"><i class="bi bi-box-arrow-left"></i> Logout</i></a>
        </li>
      </ul>
    </div>
  </nav>
    	<section class="h-100 h-custom" style="background-color: #76528BFF;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
          	<center>
             <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Booking Info</h3>
             </center>


            <form class="px-md-2" action="/bookinsert" method="post">
           	@csrf
            	<div class=" mb-4" style="margin-left: 30px;">
              	 <label for="exampleDatepicker1" class="form-label fw-bold">Event Name</label>

                <select name="name" class="select" style="width:250px;margin-left: 15px;">
                  <option value="" disabled>Events</option>
                  <option value="birthday event">Birthday </option>
                  <option value="marriage event">Marriage </option>
                 
                </select>

              </div>
              <div class=" mb-4" style="margin-left: 30px;">
              	 <label for="exampleDatepicker1" class="form-label fw-bold">Event Type</label>

                <select name="place" class="select"   style="width:250px;margin-left: 18px;">
                  <option value="" disabled>Place</option>
                  <option value="open air">Open Air</option>
                  <option value="hall">Hall</option>
                 
                </select>

              </div>

               <div class=" mb-4" style="margin-left: 30px;">
              	 <label class="fw-bold"  >Date</label>

               <input type="date" name="dte" style="width:250px;margin-left: 65px;">

              </div>
              <div class=" mb-4" style="margin-left: 30px;">
              	 <label class="fw-bold" >Time</label>

               <input type="time" name="time" style="width:250px;margin-left: 65px;">

              </div>
              

              

              

              <button type="submit" name="login" class="btn btn-success btn-lg mb-1" style="margin-left:180px;">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>



  
</body>
</html>