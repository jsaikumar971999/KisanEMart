@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background-color:green;color:white;font-size:20px;"> Farmer Dashboard</div>
 @if ($message=Session::get('success'))
<div class="alert alert-success">
  <p>{{$message}}</p>
</div>
@elseif($mesage=Session::get('success'))
<div class="alert alert-danger">
  <p>{{$message}}</p>
</div>


@endif  


                <div class="card-body" style="padding:60px;">
                    <div class="row">
                        <div class="col-sm-4">
                            <p style="background-color:#008080;color:white;padding:30px;text-align:center;border-radius:10px;"><a href="{{route('former.add_farmer')}}" style="color:white;text-decoration:none" href="">Add Your Details</a></p>
                            
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#808000;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{route('former.crop_reg')}}">Crop Registrations</a></p>
                            
                            
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#800080;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{route('former.bookslot')}}">Book A Slot</a></p>    
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#000080;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{ route('former.edit',Illuminate\Support\Facades\Auth::id()) }}">Edit Profile</a></p>
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#008000;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{route('former.myreg')}}">My Registrations</a></p>            
                         </div>
                          <div class="col-sm-4">
                            <p style="background-color:#008090;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{route('former.urgentslot')}}">Slot For Urgency</a></p>            
                         </div>
                    
                     </div>
                 </div>
                 </div>
                 <div class="card-footer" style="background-color:green"></div>
            </div>
        </div>
    </div>
</div>
@endsection
