<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  @include('admin.css')

  </head>


  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

    @include('admin.sidebar')

      <!-- partial -->
      
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">

      <div align="center" style="padding-top:100px; width:2000px;">

      <table class="table" style="padding-top:100px;">
        
            <tr style="background-color:white;" align="center" >
                <th style="padding:10px; font-size:20px;">Doctor Name</th>
                <th style="padding:10px; font-size:20px;">Phone</th>
                <th style="padding:10px; font-size:20px;">Speciality</th>
                <th style="padding:10px; font-size:20px;">Office number</th>
                <th style="padding:10px; font-size:20px;">Image</th>
                <th style="padding:10px; font-size:20px;">Delete</th>
                <th style="padding:10px; font-size:20px;">Update</th>
            </tr>
         
          
            @foreach($data as $doctor)
            <tr style="background-color:skyblue" align="center">
            <td style="padding:10px; font-size:20px; color:white;">{{$doctor->name}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$doctor->phone}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$doctor->speciality}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$doctor->office}}</td>
            <td> <img height="100" width="100" src="doctorimage/{{$doctor->image}}"> </td>
            <td ><a class="btn btn-danger" onclick="return confirm('Confirm delete doctor?')" href="{{url('delete_doctor',$doctor->id)}}">Delete</a></td>
            <td ><a class="btn btn-primary" href="{{}}">Update</a></td>
          </tr>

            @endforeach
          

        </table>

      </div>

      </div>
    

    
    @include('admin.script')
  
  </body>
</html>