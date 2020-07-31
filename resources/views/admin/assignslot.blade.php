

@extends('layouts.app')
@section('content')
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script language="javascript" type="text/javascript">  
$(document).ready(function(){

//let's create arrays  Araria, Farbisgang
var araria = [
  {display: "Araria", value: "Araria " }, 
  {display: "Farbisgang", value: "Farbisgang" }];
  

var arwal  = [
  {display: "Arwal", value: "Arwal  " }, 
  {display: "Sadar", value: "Sadar" }];

     
var aurangabad = [
  {display: "Aurangabad", value: "Aurangabad"}, 
  {display: "Daudnagarbanka", value: "Daudnagarbanka"}];

  
var banka   = [
  {display: "Banka", value: "Banka"}];

var begusarai = [
  {display: "Begusarai", value: "Begusarai"}, 
  {display: "Manjhaul", value: "Manjhaul"}, 
  {display: "Ballia", value: "Ballia"},
  {display: "Bkahari", value: "Bkahari"}, 
   {display: "Teghara", value: "Teghara"}];

  
var bhagalpur = [
  {display: "Bhagalpur", value: "Bhagalpur"}, 
  {display: "Kahalgaon", value: "Kahalgaon"}, 
  {display: "Naugachnia", value: "Naugachnia"}];
  

var bhojpur = [
  {display: "ara sadar", value: "ara sadar"}, 
  {display: "jagdishpur", value: "jagdishpur"}, 
  {display: "piro", value: "piro"}];

var buxar = [
  {display: "buxar", value: "buxar"}];
  
var darbhanga = [
  {display: "Darbhanga", value: "Darbhanga"}, 
  {display: "sadar benipur", value: "sadar benipur"}, 
  {display: "biraul", value: "biraul"}];


var eastchamparan= [
  {display: "Motihar", value: "Motihar"}, 
  {display: "sadar", value: "sadar"}, 
  {display: "arerajRaxaul", value: "arerajRaxaul"},
  {display: "sikarahna", value: "sikarahna"},
  {display: "pakridayal", value: "pakridayal"}];

 var gaya = [
  {display: "gaya sadar", value: "gaya sadar"}, 
  {display: "neemchak", value: "neemchak"}, 
  {display: "Bathani", value: "Bathani"},
  {display: "shergathi", value: "shergathi"},
  {display: "tekari", value: "tekari"}];

var gopalganj = [
  {display: "gopal ganj", value: "gopal ganj"},
  {display: "hathua", value: "hathua"}];
  
var jamui = [
 {display: "jamui", value: "jamui"}];

var jehanabad = [
  {display: "jehanabad", value: "jehanabad"}];

var kaimur = [
  {display: "kaimur", value: "kaimur"}];
 
var katihar = [
  {display: " kathihar", value: " kathihar"},
  {display: " barsoi", value: "barsoi"},
  {display: "manihari", value: "manihari"},
  {display: "sadar", value: "sadar"}];
  
var khagaria   = [
 {display: "khagaria", value: "khagaria"},
 {display: " goghri", value: " goghri"}];

var kishanganj = [
  {display: "kishanganj", value: "kishanganj"}];

var lakhisarai = [
  {display: "lakhisarai", value: "lakhisarai"}];
  
var madhepura = [
  {display: "madhepura", value: "madhepura"},
  {display: "uda", value: "uda"},
  {display: "kishanganj", value: "kishanganj"}];
            
var madhubani  = [
 {display: "madhubani", value: "madhubani"},
{display: "Jayanagar", value: "Jayanagar"},
{display: "Benipatti", value: "Benipatti"},
{display: "jhanjharpur", value: "jhanjharpur"},
{display: "phul ", value: "phul"},
 {display: "paraas ", value: "paraas "}];

var munger = [
  {display: " mugger", value: " mugger"},
  {display: " haveli", value: " haveli"},
  {display: "Kharagpur", value: "Kharagpur"},
  {display: "tarapur", value: "tarapur"}];

var Muzaffarpur = [
  {display: "east Muzaffarpur", value: "east Muzaffarpur"},
  {display: "west muzzaffapur", value: "west muzzaffapur"}];
  
var Nalanda = [
  {display: " bihar sharif", value: " bihar sharif"},
  {display: "rajgir", value: "rajgir"},
  {display: "hisa", value: "hisa"}];
             
var Nawada = [
 {display: "nawadah ", value: "nawadah"},
{display: "rajauli", value: "rajauli"}];

var Patna  = [
  {display: " patna sadar", value: "patna sadar"},
  {display: "patna city", value: "patna city"},
  {display: "Barh", value: "Barh"},
  {display: " danapur", value: " danapur"}];


var Purnia = [
  {display: "purnea", value: "purnea"},
  {display: "banmakhi", value: "banmakhi"},
  {display: "Dhamdaha", value: "Dhamdaha"},
  {display: "vaishi  ", value: "vaishi  "}];
          
var Rohtas   = [
  {display: "Sasaram", value: "Sasaram"},
  {display: "bikramganj dehri", value: "bikramganj dehri"}];
                          
var Saharsa  = [
 {display: "saharsa sadar", value: "saharsa sadar"},
 {display: "Simri bakhtiyarpur", value: "Simri bakhtiyarpur"}];


var Samastipur  = [
  {display: "samastipur sadar Dalsinghsarai", value: "samastipur sadar Dalsinghsarai"},
  {display: "patori", value: "patori"},
  {display: "rosera", value: "rosera"}];

var Saran  = [
  {display: "chapra", value: "chapra"},
  {display: " marhawra", value: " marhawra"},
  {display: "sonepur", value: "sonepur"}];
          
var Sheikhepura  = [
  {display: "sheikpura", value: "sheikpura"}];
                          
var Sheohar  = [
 {display: "sheohar", value: "sheohar"}];

var Sitamarhi   = [
  {display: "Sitamarhi sadar", value: "Sitamarhi sadar"},
  {display: "Belsand", value: "Belsand"},
  {display: "pupri", value: "pupri"}];



var Siwan     = [
  {display: "maharajganj", value: "maharajganj"},
  {display: "siwan", value: "siwan"}];
         

var Supaul   = [
  {display: "supaul", value: "supaul"},
  {display: "birpur", value: "birpur"},
  {display: "Nirmali", value: "Nirmali"},
  {display: "tribeniganj", value: "tribeniganj"}];
                          
                      
var Vaishali   = [
 {display: "hajpur", value: "hajpur"},
 {display: "mahnar", value: "mahnar"},
 {display: "mahua", value: "mahua"}];


var Westchamparan  = [
  {display: "bettiah", value: "bettiah"},
  {display: "bagaha", value: "bagaha"},
  {display: "narkatiyaganj", value: "narkatiyaganj"}];



          

//If parent option is changed
$("#parent_selection").change(function() {
    var parent = $(this).val(); //get option value from parent 
    
    switch(parent){ //using switch compare selected option and populate child
        case 'araria':
        list(araria);
        break;   

        case 'arwal':
        list(arwal);
        break;

        case 'aurangabad':
        list(aurangabad );
        break;

        case 'banka':
        list(banka);
        break;

        case 'begusarai':
        list(begusarai );
        break;   

        case 'bhagalpur':
        list(bhagalpur);
        break; 
        case 'bhojpur':
        list(bhojpur);
        break;

        case 'buxar':
        list(buxar);
        break;   

        case 'darbhanga':
        list(darbhanga);
        break; 

        case 'eastchamparan':
        list(eastchamparan);
        break; 

        case 'gaya':
        list(gaya);
        break;

        case 'gopalganj':
        list(gopalganj);
        break;   

        case 'jamui':
        list(jamui);
        break; 

        case 'jehanabad':
        list(jehanabad);
        break; 

        case 'kaimur':
        list(kaimur);
        break;

        case 'katihar':
        list(katihar);
        break;   

        case 'khagaria':
        list(khagaria);
        break; 

        case 'kishanganj':
        list(kishanganj);
        break; 
 

        case 'lakhisarai':
        list(lakhisarai);
        break;

        case 'madhepura ':
        list(madhepura);
        break;   

        case 'madhubani':
        list(madhubani);
        break; 

        case 'munger':
        list(munger);
        break; 

        case 'Muzaffarpur':
        list(Muzaffarpur);
        break;

        case 'Nalanda':
        list(Nalanda);
        break;   

        case 'Nawada':
        list(Nawada);
        break; 

        case 'Patna':
        list(Patna);
        break; 

        case 'Purnia':
        list(Purnia);
        break;

        case 'Rohtas':
        list(Rohtas);
        break;   

        case 'Saharsa':
        list(Saharsa);
        break; 

        case 'Samastipur':
        list(Samastipur);
        break; 

        case 'Saran':
        list(Saran);
        break;

        case 'Sheikhepura':
        list(Sheikhepura);
        break;   

        case 'Sheohar':
        list(Sheohar);
        break; 

        case 'Sitamarhi':
        list(Sitamarhi);
        break; 

        case 'Siwan':
        list(Siwan);
        break;

        case 'Supaul':
        list(Supaul);
        break;   

        case 'Vaishali':
        list(Vaishali);
        break; 

        case 'Westchamparan':
        list(Westchamparan);
        break; 





      default: //default child option is blank
        $("#child_selection").html('');  
        break;
       }
});

//function to populate child select box
function list(array_list)
{
  $("#child_selection").html(""); //reset child options
  $(array_list).each(function (i) { //populate child options 
    $("#child_selection").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
  });
}

});
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-header" style="background-color:purple;color:white;font-size:15px;">{{ __('ALL FARMERS | ALL TRADERS |ASSIGN SLOTS PAGE') }}</div> 
                  <div class="card-body"> 


                    
                    
<div class="container">
    <div class="row"> 
        <div class="col-md-7">
            <a style="text-align:right" href="{{route('admin.dashboard')}}" class="btn btn-success mt-3">ClickOn Go To Dashboard</a>  <br>
        
        <div class="table-responsive">
     <table class="table table-hover table-bordered results">
  <thead   style="background-color:green;color:white">
    <h3>All Farmer Slots</h3>
    <tr>
    
      <th>Farmer Name</th>
      <th>Farmer ID</th>
      <th>Booked Date</th>
      <th>District</th>
      <th>Mandal</th>
      <th>Phone</th>

    </tr>
  </thead>
  <tbody>
<tr>
 @foreach ($fslot as $slot)
<tr>
<td>{{ $slot->farmarname}}</td>
<td>{{ $slot->bookid}}</td>
<td>{{ $slot->expectdate}}</td>
<td>{{ $slot->district}}</td>
<td>{{ $slot->mandal}}</td>
<td>{{$slot->phone}}</td>

@endforeach
</tr>

  </tbody>
</table>
</tr></tbody></table></div></div>
    <div class="col-md-5">
        <br><br><h3>All Traders And Mill Locations</h3>
         <table class="table table-hover table-bordered results">
  <thead   style="background-color:green;color:white">
    <tr>
    
      <th>TraderID</th>
      <th>MillLocation</th>
      

    </tr>
  </thead>
  <tbody>
<tr>
 @foreach ($fslot as $slot)
<tr>
<td>{{ $slot->idname}}</td>
<td>{{$slot->milllocation}}</td>

@endforeach
</tr>
</tr>       
</tbody>
  </table>  


        </div>
    </div>
  </div>
</div>

                 <div class="container"> 
                    <div class="row justify-content-center">
                        
                            <div class="col-md-8">
                                <div class="card" >
                                     <div class="card-header" style="background-color:green;color:white">ASSIG SLOTS</div>
@if ($message=Session::get('success'))
<div class="alert alert-success">
  <p>{{$message}}</p>
</div>
@elseif($mesage=Session::get('success'))
<div class="alert alert-danger">
  <p>{{$message}}</p>
</div>
@endif  

                                     <div class="card-body">

                                        <form method="post" action="/millassign"> 
                                            @csrf
                                <div class="row">

                    <div class="col-md-4">Mill TraderID
                        <input type="number" name="mtraderid" class="form-control" placeholder="Enter TraderID" required="" >
                    </div>
                    <div class="col-md-4">FarmerID
                        <input type="number" name="mfarmerid" class="form-control" placeholder="Enter  FarmerID" required="" >
                    </div>
                    <div class="col-md-4">FarmerName
                        <input type="text" name="mfarmername" class="form-control" placeholder="Framer Name" required="" >
                    </div>
                   <div class="col-md-4">FarmerPhone
                        <input type="number" name="mfarmerphone" class="form-control" placeholder="Farmer Phone" required="" >
                    </div>
                   
                    <div class="col-md-4">FarmerBooked Date
                        <input type="date" name="mbookdate" class="form-control"  required="">
                    </div>



                     <div class="col-md-4">Mill State
         <select  name="mstate"   class="form-control"    required>
                <option value="">Select State</option>
                  <option value="Bihar">Bihar</option>
                   <option value="ap">Andhra Pradesh</option>

                  <option value="">-------</option>
        </select>
    </div>

<div class="col-md-4">Mill District
      <select name="mdistrict" id="parent_selection" class="form-control" required>
         <option value="">--  Select  District --</option>
         <option value="araria">Araria</option>
         <option value="arwal">Arwal</option>
         <option value="aurangabad">Aurangabad </option>
         <option value="banka">Banka</option>
         <option value="begusarai">Begusarai</option>
         <option value="bhagalpur">Bhagalpur </option>
         <option value="bhojpur">Bhojpur</option>
         <option value="buxar">Buxar</option>
         <option value="darbhanga">Darbhanga</option>
         <option value="eastchamparan">East Champaran</option>
         <option value="gaya">Gaya</option>
         <option value="gopalganj">Gopal Ganj</option>
         <option value="jamui">Jamui</option>
        <option value="jehanabad">Jehanabad</option>
         <option value="kaimur">Kaimur</option>
         <option value="katihar">Katihar</option>
         <option value="khagaria">Khagaria</option>
        <option value="kishanganj">Kishan Ganj</option>
        <option value="lakhisarai">Lakhisarai</option>
         <option value="madhepura ">Madhepura</option>
         <option value="madhubani">Madhubani</option>
        <option value="munger">Munger </option>
         <option value="Muzaffarpur">Muzaffarpur</option>
         <option value="Nalanda">Nalanda</option>
         <option value="Nawada ">Nawada </option>
         <option value="Patna">Patna</option>
         <option value="Purnia">Purnia</option>
         <option value="Rohtas">Rohtas</option>
         <option value="Saharsa">Saharsa </option>
         <option value="Samastipur">Samastipur</option>
         <option value="Saran">Saran</option>
         <option value="Sheikhepura">Sheikhepura</option>
         <option value="Sheohar">Sheohar</option>
         <option value="Sitamarhi">Sitamarhi</option>

         <option value="Siwan">Siwan</option>
         <option value="Supaul">Supaul</option>
         <option value="Vaishali">Vaishali </option>
         <option value="Westchamparan">West champaran</option>
         </select>
</div>

                       
<div class="col-md-4">Mill Mandal
      <select name="mmandal" id="child_selection" class="form-control" required>
                <option>--Select Mandal--</option>
      </select> <br>
</div>
</div>

   <button type="submit" class="btn btn-success">Assign Slot</button>  
   </form>                      
</div>
</div>

<div class="card-footer" style="background-color:green;"></div>
</div>
</div>
</div>
                       
                       <div class="card-footer" style="background-color:purple"></div>
                   
                 </div>
               </div>
             </div>
           </div>
         </div>
         

@endsection