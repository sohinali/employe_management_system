<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>staff-Register</title>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    label{
        color: white;
    }
     	body{
  font-family: 'Poiret One', cursive;
  background: #3494E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EC6EAD, #3494E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EC6EAD, #3494E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
img{
    		width: 70px;
    		height: 70px;
    		
    	}

</style>
<body>
	<section class="contact-from pt-4">
<div class="container">
                    <div class="row mt-5">
                    <div class="col-md-7 mx-auto">
                      <div class="form-wrapper">
                        <div class="row">
                          <div class="col-md-12">
                            <center>
                            <h4 style="color: white">Update form</h4></center>
                          </div>
                        </div>
                        @foreach ($data as $id=>$items )
                                
                        <form _lpchecked="1" method="post" action="{{route('updatedstaff',$items->id)}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="{{$items->name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="{{$items->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Department</label>
                                    <div class="form-group">
                                        <select  class="form-control" name="department">
                                            <option>{{$items->department}}</option>
                                            @foreach ($sql as $item)
                                            <option value="{{ $item->d_name}}">{{ $item->d_name }}</option>
                                        @endforeach                                        
                                            </select>
                                            
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <label>Gender</label>
                                        <div class="form-group">
                                          
                                            <select  class="form-control" name="gender">
                                                <option>{{$items->gender}}</option>
                                                <option value="Male">Male</option>
                                                <option value="female">FeMale</option>
                                            </select>
                                        </div>
                                   </div>
                                <div class="col-md-6">
                                    <label>Date of Joining</label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="doj" value="{{$items->doj}}">
                                        </div>
                                   </div>
                                   
                                   <div class="col-md-6">
                                    <label>Date of Birth</label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="dob" value="{{$items->dob}}">
                                        </div>
                                   </div>
                              <div class="col-md-6">
                                <label>Phone Number</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="mobile" value="{{$items->mobile}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>City</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" value="{{$items->city}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Upload</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image" accept="image/*" value="{{$items->image}}">
                                    </div>
                                    <img src='{{asset('/storage/'.$items->image)}}'>
                                </div>
                               
                                <div class="col-md-6">
                                    <label>State</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="state" value="{{$items->state}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="address">Address</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" style="height: 100px;"name="address" value="{{$items->address}}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Country</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="country" value="{{$items->country}}">
                                    </div>
                                    
                                </div>     
                                @endforeach            
      <div class="mt-3">
        <center>
            <button class="btn btn-primary" name="submit">Update</button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            
         <button class="btn btn-secondary" style="background-color: red"; ="back">   <a href="/" style="color: white;text-decoration:none">back</a></button>
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