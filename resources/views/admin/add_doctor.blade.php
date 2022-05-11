<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <style type="text/css">

      label{
        display: inline-block;
        width:200px;

      }

    </style>

  @include('admin.css')

  </head>


  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

    @include('admin.sidebar')

      <!-- partial -->
      
      @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style= "padding-top: 100px" >

        @if(session()->has('message'))

        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"> x </button>

        {{session()->get('message')}}

        </div>

        @endif

  <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Doctor Name</label> 
    <div class="col-8">
      <input id="name" name="name" style="color:black" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="number" class="col-4 col-form-label">Phone number</label> 
    <div class="col-8">
      <input id="number" name="number" style="color:black" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="speciality" class="col-4 col-form-label">Specialty</label> 
    <div class="col-8">
      <select id="speciality" name="speciality" class="custom-select">
        <option value="Endocrynologist">Endocrynologist</option>
        <option value="Nutritionist">Nutritionist</option>
        <option value="Urologist">Urologist</option>
        <option value="Gastroentherologist">Gastroentherologist</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="office" class="col-4 col-form-label">Office nr</label> 
    <div class="col-8">
      <input id="office" name="office"  type="text" style="color:black" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="file" class="col-4 col-form-label"> Doctor Profile Picture</label>
    <div class="col-8"> 
    <input class='form-control' type="file" name="file" id="file" required="">
    </div>


  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</div>
       
     
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>