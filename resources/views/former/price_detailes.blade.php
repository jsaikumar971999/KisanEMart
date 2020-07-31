
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"   style="background-color:purple;color:white;text-align:center;font-size:20px;" >Crop Price Detailes</div>

                <div class="card-body">

                  <!--start table -->
                   
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="Search your District or crop ">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead   style="background-color:green;color:white">
    <tr >
    
      <th>District</th>
      <th>Mandal</th>
      <th>Crops</th>
      <th>Crop Price</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
<tr>
 @foreach ($crop_price as $crop)
<tr>
<td>{{ $crop->district }}</td>
<td>{{ $crop->mandal}}</td>
<td>{{ $crop->crop }}</td>
<td>{{ $crop->crop_price}}</td>

@endforeach
</tr>

  </tbody>
</table>
{!!$crop_price->links();!!}

 </div>


 <!-- end table-->
            </div>
        </div>
    </div>
</div>

@endsection