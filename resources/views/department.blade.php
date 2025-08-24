{{-- @php
    if (!session()->has('username')) {
        return redirect('welcome');
    }
@endphp --}}


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Department-Page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<center> <h1 class="alert-success text-center mb-5 p-3">Departments</h1>
        <div class="container">
            <button type='button' class='btn btn-primary btn-edit' data-bs-toggle='modal' data-bs-target='#exampleModal' style="float:left;">Registeration</button>
               
                <a href="/logout"><button class="btn btn-danger" style="float:right;" >Logout</button></a>
                &nbsp&nbsp; &nbsp; &nbsp; &nbsp;; &nbsp; &nbsp; &nbsp;
                <a href="/"><button class="btn btn-success" style="float:right;" >Back To Home</button></a>
                <br><br>    
                	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <center>
            <div class="form-area" >  
                      <form role="form" method="post" action="{{route('addEmp')}}">
                        @csrf
            <div class="form-group">
                                      <div class="form-group">
                                      <input type="text" class="form-control" name="dpart" placeholder="Department Name" required value="">
                                      <br>
                                  </div>
    </center>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" name="submit" Value="Add"  class="btn btn-primary" data-bs-dismiss="modal">
        </div>
      </div>
    </div>
  </div>
  </form>
	<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">Department id</th>
      <th scope="col">Department Name</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($data as $id=>$user )

    <tr>
        <td>{{$user->id}}</td>
          <td>{{$user->d_name}}</td>
          <td><a href ="{{route('deleteEmp',$user->id)}}" class= "btn btn-danger">Delete </td>
          <td><a href ="{{route('updateEmp',$user->id)}}"class="btn btn-warning">Edit</td>
    </tr>
  @endforeach
  </tbody>
</table>
<br>
<div>
  {{$data->links()}}
</div>
</div>
</div>



</body>
</html>