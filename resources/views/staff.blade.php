<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>staff-Page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  img{
    		width: 70px;
    		height: 70px;
    		border-radius: 50%;
    	}
</style>
</head>
<body>
	<center> <h1 class="alert-success text-center mb-5 p-3">Details Staffs</h1>
  
    <div class="container">
            <a href="{{route('staffAdd')}}"><button class="btn btn-success" style="float:left;" >Registeration</button></a>
                <a href="/"><button class="btn btn-primary" style="float:right;" >Back To Home</button></a>
                <br><br>  
   
   <div class="container">
    <table class="table table-bordered" style="width: 105%">
  <thead>
    <tr>
      <th scope="col"style="width:50px">I0</th>
      <th scope="col" style="width:200px">Name</th>
      <th scope="col" style="width:70px">Image</th>
      <th scope="col" style="width:100px">Department</th>
      <th scope="col"style="width:60px">Gender</th>
      <th scope="col"style="width:95px">Email</th>
      <th scope="col"style="width:70px">Mobile</th>
      <th scope="col"style="width:200px">DOB</th>
      <th scope="col"style="width:160px">Joining On</th>
      <th scope="col"style="width:120px">Address</th>
      <th scope="col"style="width:80px">State</th>
      <th scope="col"style="width:60px">City</th>
      <th scope="col"style="width:80px">Country</th>
      <th scope="col"style="width:50px">Delete</th>
      <th scope="col"style="width:50px">Edit</th>
    </tr>
  </thead>
  <tbody>
 @foreach($data as $id => $user)
 <tr>
     <td>{{ $loop->iteration }}</td>
     <td>{{ $user->name }}</td>
     <td><img src="{{ asset('/storage/'.$user->image) }}"></td>
     <td>{{ $user->department }}</td>
     <td>{{ $user->gender }}</td>
     <td>{{ $user->email }}</td>
     <td>{{ $user->mobile }}</td>
     <td>{{ $user->dob }}</td>
     <td>{{ $user->doj }}</td>
     <td>{{ $user->address }}</td>
     <td>{{ $user->state }}</td>
     <td>{{ $user->city }}</td>
     <td>{{ $user->country }}</td>
     <td><a href="{{ route('deletestaff', $user->id) }}" class="btn btn-danger">Delete</a></td>
     <td><a href="{{ route('updatestaff', $user->id) }}" class="btn btn-warning">Edit</a></td>
 </tr>
@endforeach
   
  </tbody>
</table>
   </div>

</body>
</html>