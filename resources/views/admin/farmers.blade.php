
@extends('layouts.app')
@section('content')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
.results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}

.counter{
  padding:8px; 
  color:#ccc;
}
  </style>
<script type="text/javascript">
  $(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
      });
});
</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
      
                <div class="card-header"   style="background-color:purple;color:white;text-align:center;font-size:20px;" >All Registred Farmers</div>

            

                  <!--start table -->
                   
<div class="form-group pull-right"><br>
    <input type="text" class="search form-control" placeholder="Search FarmersID,FarmerName,CropName ">
    <a style="text-align:right" href="{{route('admin.dashboard')}}" class="btn btn-success mt-3">ClickOn Go To Dashboard</a>
                       
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead   style="background-color:green;color:white">
    <tr >
    
      <th>FamerName</th>
      <th>gender</th>
      <th>Address</th>
      <th>State</th>
      <th>District</th>
      <th>Mandal</th>
      <th>Pincode</th>
      <th>DateofBirth</th>
       <th>Email</th>
      <th>idtype</th>
      <th>IDname</th>
      <th>phone</th>
      <th>phone2</th>
      <th>landcopy</th>
      <th>landakar</th>
      <th>bankname</th>
      <th>AcholderName</th>
      <th>accountNo</th>
      <th>IFSC</th>
      <th>Passbook</th>
      <th>Get SMS</th>
      <th>Get Mail</th>
   
   
   
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
<tr>
 @foreach ($farmers as $farmer)
<tr>
<td>{{ $farmer->farmarname }}</td>
<td>{{ $farmer->gender}}</td>
<td>{{ $farmer->address}}</td>
<td>{{ $farmer->state}}</td>
<td>{{ $farmer->district }}</td>
<td>{{ $farmer->mandal}}</td>
<td>{{ $farmer->pincode}}</td>
<td>{{ $farmer->dateofbirth}}</td>
<td>{{ $farmer->email }}</td>
<td>{{ $farmer->idtype}}</td>
<td>{{ $farmer->idname}}</td>
<td>{{ $farmer->phone}}</td>
<td>{{ $farmer->phone2}}</td>
<td><img src="{{asset('documents/'.$farmer->landcopy)}}"alt="image" width="100px" height="100px;"></td>
<td>{{ $farmer->landakar}}</td>
<td>{{ $farmer->bankname}}</td>
<td>{{ $farmer->acholdername}}</td>
<td>{{ $farmer->accountno}}</td>
<td>{{ $farmer->ifsccode}}</td>
<td><img src="{{asset('documents/'.$farmer->passbook)}}"alt="image" width="100px" height="100px;"></td>
<td>{{ $farmer->getsms}}</td>
<td>{{ $farmer->getmail}}</td>



@endforeach
</tr>

  </tbody>
</table>


 </div>


 <!-- end table-->
            </div>
        </div>
    </div>
</div>

@endsection