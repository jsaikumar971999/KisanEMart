@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background-color:green;color:white;font-size:20px;"> Trader Dashboard</div>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif


                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <p style="background-color:#008080;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{route('trader.add_trader')}}">Add Your Detailes</a></p>
                            
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#808000;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none"
                             href="{{ route('trader.worktime') }}">Working Condition & Timings Of Mill</a></p>
                            
                            
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#000080;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{route('trader.traderslot')}}">Book a slot</a></p>    
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#008000;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="{{ route('trader.edit',Illuminate\Support\Facades\Auth::id()) }}">Edit Profile</a></p>            
                         </div>
                         

                 </div>
             </div>
            </div>
                 <div class="card-footer" style="background-color: green"></div>
        </div>
    </div>
</div>
@endsection
