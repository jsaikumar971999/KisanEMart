
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
    <div class="row justify-content-center">
        <div class="col-sm-12">
            
                <div class="card-header"   style="background-color:purple;color:white;text-align:center;font-size:20px;" >All Registred Traders</div>

          

                  <!--start table -->
                   
<div class="form-group pull-right"><br>
    <input type="text" class="search form-control" placeholder="Search Trader ID , Trader Name,Location ">
    <a style="text-align:right" href="{{route('admin.dashboard')}}" class="btn btn-success mt-3">ClickOn Go To Dashboard</a>
    
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead   style="background-color:green;color:white">
    <tr >
    
      <th>Owner Type</th>
      <th>Proprietor Name</th>
      <th>Gender</th>
      <th>State</th>
      <th>District</th>
      <th>Mandal</th>
      <th>Pincode</th>
      <th>DateofBirth</th>
       <th>Email</th>
       <th>Address</th>
      <th>idtype</th>
      <th>IDname</th>
      <th>phone</th>
      <th>phone2</th>
      <th>Mill Name</th>
      <th>Year Of Establishment</th>
      <th>Mill Type</th>
      <th>Mill Operated</th>
      <th>Mill Capacity</th>
      <th>Mill Pancard</th>
      <th>GST Number</th>
      <th>SPCB Licence</th>
      <th>SPCB Valid</th>
      <th>Mill License</th>
      <th>Valid Upto</th>
      <th>Mill Location</th>
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
 @foreach ($traders as $trader)
<tr>
<td>{{ $trader->ownertyp }}</td>
<td>{{ $trader->proprietorname}}</td>
<td>{{ $trader->gender}}</td>
<td>{{ $trader->state}}</td>
<td>{{ $trader->district }}</td>
<td>{{ $trader->mandal}}</td>
<td>{{ $trader->pincode}}</td>
<td>{{ $trader->dateofbirth}}</td>
<td>{{ $trader->email }}</td>
<td>{{$trader->address}}</td>
<td>{{ $trader->idtype}}</td>
<td>{{ $trader->idname}}</td>
<td>{{ $trader->phone}}</td>
<td>{{ $trader->phone2}}</td>
<td>{{ $trader->millname}}</td>
<td>{{ $trader->yearofmill}}</td>
<td>{{ $trader->milltype}}</td>
<td>{{ $trader->milloperated}}</td>
<td>{{$trader->millcapacity}}</td>
<td>{{ $trader->millpancard}}</td>
<td>{{ $trader->gstnumber}}</td>
<td>{{ $trader->spcblicence}}</td>
<td>{{ $trader->spcbvalid}}</td>
<td>{{$trader->milllicense}}</td>
<td>{{ $trader->validupto}}</td>
<td>{{ $trader->milllocation}}</td>
<td>{{ $trader->bankname}}</td>
<td>{{$trader->acholdername}}</td>
<td>{{ $trader->accountno}}</td>
<td>{{ $trader->ifsccode}}</td>
<td><img src="{{asset('tdocuments/'.$trader->passbook)}}" width="100px;" height="100px"></td>

<td>{{$trader->getsms}}</td>
<td>{{$trader->getmail}}</td> 









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