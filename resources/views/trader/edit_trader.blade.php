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
        <div class="col-md-10">
            <div class="card">
               @if ($message=Session::get('success'))
<div class="alert alert-success">
  <p>{{$message}}</p>
</div>
@elseif($mesage=Session::get('success'))
<div class="alert alert-danger">
  <p>{{$message}}</p>
</div>


@endif  


                <div class="card-header" style="background-color:green;color:white">{{ __('Add Your Personal and Bank Detailes') }}</div> 
                   <div class="card-body">
                                  
                       <div class="container">
    <form method="post" action="{{ route('trader.update',Illuminate\Support\Facades\Auth::id()) }}" enctype="multipart/form-data">
                          @csrf
                         @method('PUT')
   
                       <div class="row">
                    <div class="col-sm-4">Owner Type
              <select id="gender" class="form-control" id="parent_selection" name="ownertyp"    required>
                           <option value="">Owner Type</option>
                          <option {{ isset($trader->ownertyp) && ($trader->ownertyp === 'proprietor') ? 'selected' : '' }} value="proprietor">proprietor</option>
                           <option {{ isset($trader->ownertyp) && ($trader->ownertyp === 'Partnership') ? 'selected' : '' }} value="Partnership">Partnership</option>
                           <option {{ isset($trader->ownertyp) && ($trader->ownertyp === 'Company') ? 'selected' : '' }} value="Company">Company</option>
                    </select><br>
                             </div>
                             <div class="col-sm-4">Proprietor Name
                              <input type="text" class="form-control" placeholder="Name of proprietor"
                               name="proprietorname" value="{{ isset($trader->proprietorname) ? $trader->proprietorname : '' }}" required=""></input><br>
                              </div>
                              <div class="col-sm-4">Gender
                    <select id="gender" class="form-control" id="parent_selection"  name="gender"    required>
                                <option  value="">Gender</option>
                                 <option {{ isset($trader->gender) && ($trader->gender === 'male') ? 'selected' : '' }} value="male">Male</option>
                                 <option  {{ isset($trader->gender) && ($trader->gender === 'female') ? 'selected' : '' }} value="female">Female</option>
                        </select><br>
                             </div> 
                           
                            
     <div class="col-sm-4">State
         <select  name="state"   class="form-control"    required>
                <option value="">Select State</option>
                  <option {{ isset($trader->state) && ($trader->state === 'Bihar') ? 'selected' : '' }} value="Bihar">Bihar</option>
                   <option value="ap">Andhra Pradesh</option>

                  <option value="">-------</option>
        </select>
    </div>

<div class="col-sm-4">District
      <select name="district" id="parent_selection" class="form-control" required>
         <option value="">--  Select  District --</option>
         <option  value="araria">Araria</option>
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

                       
<div class="col-sm-4">Mandal
      <select name="mandal" id="child_selection" class="form-control" required>
                <option>--Select Mandal--</option>
      </select> <br>
</div>
                           
                        <div class="col-sm-4">Pincode
                           <input type="number" class="form-control" id="email" placeholder="Enter Pincode" name="pincode" value="{{ isset($trader->pincode) ? $trader->pincode : '' }}"  maxlength="6" required=""><br>
                          </div>
                             
                          <div class="col-sm-4">Date of birth
                                <input type="date" class="form-control" id="email" placeholder="Enter phone No" name="dateofbirth" value="{{ isset($trader->dateofbirth) ? $trader->dateofbirth : '' }}"  required=""><br>
                           </div>
                           <div class="col-sm-4">Email-Id
                                <input type="email" class="form-control" id="email" placeholder="Enter Email-Id" name="email" value="{{ isset($trader->email) ? $trader->email : '' }}"   required=""><br>
                             </div>

                             <div class="col-sm-4">Address
                                <input type="text" class="form-control" id="email" placeholder="House no,street /lane, village, post office,etc:" name="address"  value="{{ isset($trader->address) ? $trader->address : '' }}" required=""><br>
                             </div>



                              
                          <div class="col-sm-4">ID Type
                                <select name="idtype" id="parent_selection" class="form-control" required> 
                                   <option value="">--  Select Id Type--</option>
                                   <option {{ isset($trader->idtype) && ($trader->idtype === 'adharcard') ? 'selected' : '' }} value="adharcard">Adhar Card</option>
                                    <option {{ isset($trader->idtype) && ($trader->idtype === 'pancard') ? 'selected' : '' }} value="pancard">PanCard</option>
                                   <option {{ isset($trader->idtype) && ($trader->idtype === 'rationcard') ? 'selected' : '' }} value="rationcard">Ration Card</option>
                                  </select>
                          </div>
                             
                           <div class="col-sm-4" style="color: red">*Enter ID (TraderID)
                                <input type="text" class="form-control" id="email" placeholder="Adhar Or PanCard" name="idname" value="{{ isset($trader->idname) ? $trader->idname : '' }}"  maxlength="12" required=""><br>
                           </div>
                            <div class="col-sm-4">Mobile Number: 
                                <input type="number" class="form-control" id="email" placeholder="Enter phone No" name="phone" value="{{ isset($trader->phone) ? $trader->phone : '' }}"  maxlength="10" required=""><br>
                              </div>
        
       <div class="col-sm-4">Alternate Number:
             <input type="number" class="form-control" id="email" placeholder="Alternate Mobile Number" name="phone2"  maxlength="10" value="{{ isset($trader->phone2) ? $trader->phone2 : '' }}" required=""><br>
       </div>
 

         <div class="row">      
        <div class="col-sm-4">Mill name:
      <input type="text" class="form-control" value="{{ isset($trader->millname) ? $trader->millname : '' }}" id="email" placeholder="Mill Name" name="millname"   required="">
        </div>
        
  
                         <div class="col-sm-4">Year of establishment
               <input type="date" class="form-control" id="email" placeholder="Year of establishment:" name="yearofmill" value="{{ isset($trader->yearofmill) ? $trader->yearofmill : '' }}" maxlength="100" required=""><br>
                         </div>
                         <div class="col-sm-4">Mill Type
                                <select name="milltype" id="parent_selection" class="form-control" required> 
                                   <option value="">--  Mill  Type--</option>
                                   <option {{ isset($trader->milltype) && ($trader->milltype === 'raw') ? 'selected' : '' }} value="raw">raw</option>
                                    <option {{ isset($trader->milltype) && ($trader->milltype === 'paraboiled') ? 'selected' : '' }} value="paraboiled">paraboiled </option>
                                  
                                  </select>
                          </div>
                          <div class="col-sm-4">Mill operated by
                                <select name="milloperated" id="parent_selection" class="form-control" required> 
                                   <option value="">--Mill operated by--</option>
                                   <option {{ isset($trader->milloperated) && ($trader->milloperated === 'Self') ? 'selected' : '' }}  value="Self">Self</option>
                                    <option  {{ isset($trader->milloperated) && ($trader->milloperated === 'Lease') ? 'selected' : '' }} value="Lease">lease</option>
                                  
                                  </select>
                          </div>
                         <div class="col-sm-4">Capacity of mill:
                     <input type="number" class="form-control" id="email" placeholder="Capacity of Mill Eg:1000" name="millcapacity"  value="{{ isset($trader->millcapacity) ? $trader->millcapacity : '' }}" maxlength="100" required=""><br>
                         </div>
                         <div class="col-sm-4">Mill pan card no:
                    <input type="text" class="form-control" id="email" placeholder="Mill pan card no:" name="millpancard" value="{{ isset($trader->millpancard) ? $trader->millpancard : '' }}"  maxlength="100" required=""><br>
                         </div>
                         
                         <div class="col-sm-4">GST number
                   <input type="text" class="form-control" id="email" placeholder="GST number" name="gstnumber"  maxlength="100" value="{{ isset($trader->gstnumber) ? $trader->gstnumber : '' }}" required=""><br>
                         </div>
                          <div class="col-sm-4">State pollution control board licence no:
      
                <input type="text" class="form-control" id="email" placeholder="Capacity of Mill" name="spcblicence"  maxlength="100" value="{{ isset($trader->spcblicence) ? $trader->spcblicence : '' }}" required=""><br>
                         </div>
                         <div class="col-sm-4">SPCB licence valid upto
                 <input type="date" class="form-control" id="email" placeholder="Mill pan card no:" name="spcbvalid"  maxlength="100" value="{{ isset($trader->spcbvalid) ? $trader->spcbvalid : '' }}" required=""><br>
                         </div>
                         
                         <div class="col-sm-4">Mill license number:
                 <input type="text" class="form-control" id="email" placeholder="Mill license number:" name="milllicense" value="{{ isset($trader->milllicense) ? $trader->milllicense : '' }}"  maxlength="100" required=""><br>
                         </div>
                         <div class="col-sm-4">Valid upto 
         <input type="date" class="form-control" id="email" placeholder="Valid upto" name="validupto"  maxlength="100" value="{{ isset($trader->validupto) ? $trader->validupto : '' }}" required=""><br>
                         </div>
                          <div class="col-sm-4">Mill Location
                                <input type="text" class="form-control" id="email" placeholder="District Tashil Plat No:" name="milllocation" value="{{ isset($trader->milllocation) ? $trader->milllocation : '' }}" maxlength="100" required=""><br>
                         </div>
                                       
            
                     <div class="col-sm-4">Bank Name
                      <select name="bankname" id="parent_selection" class="form-control" required>
                     <option value="">--  SELECT BANK  --</option>
                       <option {{ isset($trader->bankname) && ($trader->bankname === 'AXIS BANK') ? 'selected' : '' }} value="AXIS BANK">AXIS BANK</option>
                       <option {{ isset($trader->bankname) && ($trader->bankname === 'ICICI BANK') ? 'selected' : '' }} value="ICICI BANK">ICICI BANK</option>
                      <option {{ isset($trader->bankname) && ($trader->bankname === 'HDFC BANK') ? 'selected' : '' }} value="HDFC BANK">HDFC BANK</option>
                       <option {{ isset($trader->bankname) && ($trader->bankname === 'SBI') ? 'selected' : '' }} value="SBI">STATE BANK OF INDIA</option>
                       <option {{ isset($trader->bankname) && ($trader->bankname === 'ALLAHABAD BANK') ? 'selected' : '' }} value="ALLAHABAD BANK">ALLAHABAD BANK</option>
                      <option {{ isset($trader->bankname) && ($trader->bankname === 'ANDHRA BANK') ? 'selected' : '' }} value="ANDHRA BANK">ANDHRA BANK</option>
                       <option {{ isset($trader->bankname) && ($trader->bankname === 'BANDHAN BANK LIMITED') ? 'selected' : '' }} value="BANDHAN BANK LIMITED">BANDHAN BANK LIMITED</option>
                       <option {{ isset($trader->bankname) && ($trader->bankname === 'BANK OF BARODA') ? 'selected' : '' }} value="BANK OF BARODA">BANK OF BARODA</option>
                      <option value="BANK OF INDIA">BANK OF INDIA</option>
                       <option {{ isset($trader->bankname) && ($trader->bankname === 'BANK OF MAHARASHTRA') ? 'selected' : '' }} value="BANK OF MAHARASHTRA">BANK OF MAHARASHTRA</option>

                   <option {{ isset($trader->bankname) && ($trader->bankname === 'BHARATIYA MAHILA BANK LIMITED') ? 'selected' : '' }} value="BHARATIYA MAHILA BANK LIMITED">BHARATIYA MAHILA BANK LIMITED</option>
                      <option {{ isset($trader->bankname) && ($trader->bankname === 'CANARA BANK') ? 'selected' : '' }} value="CANARA BANK">CANARA BANK</option>
                       <option {{ isset($trader->bankname) && ($trader->bankname === 'CENTRAL BANK OF INDIA') ? 'selected' : '' }} value="CENTRAL BANK OF INDIA">CENTRAL BANK OF INDIA</option>
                       <option {{ isset($trader->bankname) && ($trader->bankname === 'CORPORATION BANK') ? 'selected' : '' }} value="CORPORATION BANK">CORPORATION BANK</option>
                      <option {{ isset($trader->bankname) && ($trader->bankname === 'DENA BANK') ? 'selected' : '' }} value="DENA BANK">DENA BANK</option>
                    <option {{ isset($trader->bankname) && ($trader->bankname === 'FEDERAL BANK') ? 'selected' : '' }} value="FEDERAL BANK">FEDERAL BANK</option>
                    <option {{ isset($trader->bankname) && ($trader->bankname === 'HSBC BANK') ? 'selected' : '' }} value="HSBC BANK">HSBC BANK</option>
                    <option {{ isset($trader->bankname) && ($trader->bankname === 'IDBI BANK') ? 'selected' : '' }} value="IDBI BANK">IDBI BANK</option>
                     <option {{ isset($trader->bankname) && ($trader->bankname === 'INDIAN BANK') ? 'selected' : '' }} value="INDIAN BANK">INDIAN BANK</option>
                    <option  {{ isset($trader->bankname) && ($trader->bankname === 'INDIAN OVERSEAS BANK') ? 'selected' : '' }} value="INDIAN OVERSEAS BANK">INDIAN OVERSEAS BANK</option>
                    <option  {{ isset($trader->bankname) && ($trader->bankname === 'INDUSIND BANK') ? 'selected' : '' }} value="INDUSIND BANK">INDUSIND BANK</option>
                    <option {{ isset($trader->bankname) && ($trader->bankname === 'OTHER BANK') ? 'selected' : '' }} value="OTHER BANK">OTHER BANK</option>
                     </select>
                      </div>

                      <div class="col-sm-4">Account Holder Name
                 <input type="text" class="form-control" id="accountno" placeholder="Account holder Name" name="acholdername" value="{{ isset($trader->acholdername) ? $trader->acholdername : '' }}" maxlength="18" required=""><br>
                      </div>
                         
                         <div class="col-sm-4">Account Number
                    <input type="number" class="form-control" id="accountno" placeholder="Account No" name="accountno"value="{{ isset($trader->accountno) ? $trader->accountno : '' }}"  maxlength="18" required=""><br>
                         </div>

                          <div class="col-sm-4">IFSC Code
                       <input type="text" class="form-control" id="email" placeholder="Ifsc Code" name="ifsccode" value="{{ isset($trader->ifsccode) ? $trader->ifsccode : '' }}" maxlength="11" required=""><br>
                         </div>
                           <div class="col-sm-4">Upload copy of passbook(400KB below)
                                <input type="file" class="form-control" id="email" placeholder="Upload Passbook" name="passbook"  maxlength="18" required=""><br>
                         </div>
                        
                          <div class="col-sm-4" >Registration Acknowledgement:<br>
                            <input {{ isset($trader->getsms) && ($trader->getsms === 'SMS') ? 'checked' : '' }} type="checkbox" id="sms" name="getsms" value="SMS" >
                               <label for="sms">Get SMS</label><br>
                                <input {{ isset($trader->getsms) && ($trader->getsms === 'SMS') ? 'checked' : '' }} type="checkbox" id="mail" name="getmail" value="EMAIL">
                                <label for="mail">Get EMAIL</label><br>
                            </div>
                        

                           </div>
                          

                        <button type="submit" class="btn btn-success mt-3">Submit</button> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                         <button type="reset" class="btn btn-danger mt-3">Cancel</button>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<a style="text-align:right" href="{{route('trader.trader_home')}}" class="btn btn-success mt-3">ClickOn Go To Dashboard</a>
                           </div>
                          </div>
                 </form>
                </div>
         </div>
     </div>
 </div>
</div>
</div>

@endsection
