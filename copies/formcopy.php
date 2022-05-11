<div class="container-fluid page-body-wrapper">

<div class="container" align="center" style= "padding-top: 100px" >

@if(session()->has('message'))

<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert"> x </button>

{{session()->get('message')}}

</div>

@endif

<form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data" >
  @csrf

  <div style="padding:15px">
    <label> Doctor Name </label>
    <input type="text" style="color:black" name="name" placeholder="Doctor name" required=""> 
  </div>

  <div style="padding:15px">
    <label> Phone number </label>
    <input type="number" style="color:black" name="number" placeholder="Phone number" required=""> 
  </div>

  <div style="padding:15px">
    <label> Speciality  </label>
    <select name="speciality" style="color:black; width: 200px" required="">
      <option value="Endocrynologist"> Endocrynologist </option>
      <option value="Nutritionist"> Nutritionist </option>
      <option value="Urologist"> Urologist </option>
      <option value="Gastroentherologist"> Gastroentherologist </option>
    </select>

  <div style="padding:15px">
    <label> Office number  </label>
    <input type="text" style="color:black" name="office" placeholder="Office number" required=""> 
  </div>


  <div style="padding:15px">
    <label> Doctor Profile Picture </label>
    <input type="file"  name="file" required="" > 
  </div>
  

  <div style="padding:15px">
    <input type="submit" class="btn btn-success" value="Submit"> 
  </div>
  

</div>
</form>
