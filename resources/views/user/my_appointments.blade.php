<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
   <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; ?>


            @if(Route::has('login'))

            @auth

         
            <x-app-layout>
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth
            
            @endif

            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


  <div align="center" style="padding:70px; width:1900px;">

    <table class="table">

    <tr style="background-color:green" align="center";>
      <th style="padding:10px; font-size:20px; color:white;">Doctor Name</th>
      <th style="padding:10px; font-size:20px; color:white;">Date</th>
      <th style="padding:10px; font-size:20px; color:white;">Message</th>
      <th style="padding:10px; font-size:20px; color:white;">Status</th>
      <th style="padding:10px; font-size:20px; color:white;">Cancel Appointment</th>
    </tr>


    @foreach($appoint as $appoints)
    <tr style="background-color:white" align="center">
      <td style="padding:10px; font-size:20px; color:black;">{{$appoints->doctor}}</td>
      <td style="padding:10px; font-size:20px; color:black;">{{$appoints->date}}</td>
      <td style="padding:10px; font-size:20px; color:black;">{{$appoints->message}}</td>
      <td style="padding:10px; font-size:20px; color:black;">{{$appoints->status}}</td>
      <td><a class="bt btn-danger" style="padding:10px"; onclick="return confirm('Confirm delete appointment?')" href="{{url('cancel_appointment',$appoints->id)}}"> Cancel </a></td>

    </tr>
    @endforeach




    </table>


  </div>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  

</html>