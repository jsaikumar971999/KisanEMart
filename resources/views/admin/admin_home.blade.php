@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:purple;color:white;font-size:20px;">Admin Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <p style="background-color:#008080;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{route('admin.addcrop')}}">Add Crop Prices</a></p>
                            
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#808000;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{route('admin.farmers')}}">All Farmers Details</a></p>
                            
                            
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#008000;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{route('admin.traders')}}">All Trader Details</a></p>    
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#000080;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="
                                {{route('admin.assignslot')}}">Assign Slot</a></p>    
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#008000;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{route('admin.millshow')}}">Show Assign Slots</a></p>            
                         </div>
                         <div class="col-sm-4">
                            <p style="background-color:#008080;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{route('admin.traderbookingslots')}}">Traders Booking Slots</a></p>            
                         </div>
                 </div>
                   </div>
                   <div class="card-footer" style="background-color:purple"></div>
            </div>
        </div>
    </div>
</div>
@endsection
