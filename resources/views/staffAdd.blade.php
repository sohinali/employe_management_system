<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>staff-Register</title>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    	body{
  font-family: 'Poiret One', cursive;
  background: #3494E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EC6EAD, #3494E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EC6EAD, #3494E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
h4{
  font-weight: bold;
  margin-bottom: 2.5rem;
}
.form-wrapper{
  background: #fff;
  border-radius: 5px;
  padding: 50px;
}
.form-control, .custom-select{
  border-radius: 0px;
    color: #495057;
    background-color: #f1f1f1;
    border-color: none;
   

}

.form-control:focus {
    color: #495057;
    background-color: #ffffff;
    border:1px solid #b5b6b3;
    outline: 0;
    box-shadow: none;

}

.btn{
  background: #3494E6;
  border: #3494E6;
  padding: 0.6rem 3rem;
  font-weight: bold;
}
.btn:hover, .btn:focus, .btn:active, .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
  background: #3494E6;
  border: #3494E6;
  outline: 0;
}
    </style>

</head>
<body>
	<section class="contact-from pt-4">
<div class="container">
                
                <div class="row mt-5">
                    <div class="col-md-7 mx-auto">
                      <div class="form-wrapper">
                        <div class="row">
                          <div class="col-md-12">
                            <center>
                            <h4>Registration form</h4></center>
                          </div>
                        </div>
                        <form _lpchecked="1" method="post" action="{{route('addstaff')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Department</label>
                                    <div class="form-group">
                                        <select  class="form-control" name="department">
                                            <option default>Select</option>
                                            @foreach ($data as $dpart )
                                            <option value="{{$dpart->d_name}}">{{$dpart->d_name}}</option>
                                            @endforeach
                                        </select>
                            
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <label>Gender</label>
                                        <div class="form-group">
                                          
                                            <select  class="form-control" name="gender" >
                                                <option value="Male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                   </div>
                                <div class="col-md-6">
                                    <label>Date of Joining</label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="doj">
                                        </div>
                                   </div>
                                   
                                   <div class="col-md-6">
                                    <label>Date of Birth</label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="dob">
                                        </div>
                                   </div>
                              <div class="col-md-6">
                                <label>Phone Number</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="mobile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>City</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Upload</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image" accept="image/*">
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <label>State</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="state">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="address">Address</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" style="height: 100px;"name="address" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Country</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="country">
                                    </div>
                                    
                                </div>                 
      <div class="mt-3">
        <center>
            <button class="btn btn-primary" name="submit">Register</button>
            {{-- &nbsp;&nbsp;&nbsp;&nbsp; 
            <button class="btn btn-secondary" style="background-color: red";> <a href="/" style="color: white;text-decoration:none"> back</a></button>
         --}}
        </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
  
  </div>
  </section>
</form>

</body>
</html>