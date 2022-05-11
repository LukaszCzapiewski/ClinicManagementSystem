

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

        <table class="table">
            <tr style="background-color:white;">
                <th style="padding:10px">Patient name</th>
                <th style="padding:10px">Email</th>
                <th style="padding:10px">Phone</th>
                <th style="padding:10px">Doctor name</th>
                <th style="padding:10px">Date</th>
                <th style="padding:10px">Message</th>
                <th style="padding:10px">Status</th>
                <th style="padding:10px; font-size:20px; color:black;">Approve Appointment</th>
                <th style="padding:10px; font-size:20px; color:black;">Cancel Appointment</th>
            </tr>

            
            @foreach($data as $appoints)

            <tr style="background-color:skyblue" align="center">
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->name}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->email}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->phone}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->doctor}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->date}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->message}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->status}}</td>
            <td ><a class="bt btn-success" style="padding:10px; onclick=" href="{{url('approve_appointment',$appoints->id)}}"> Approve </a></td>
            <td><a class="bt btn-danger" style="padding:10px;" onclick="return confirm('Confirm delete appointment?')" href="{{url('cancel_appointment',$appoints->id)}}"> Cancel </a></td>
            </tr>
            
            @endforeach

        </table>

        </div>

      </div>


    
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>