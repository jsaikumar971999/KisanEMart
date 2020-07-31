@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header" style="background-color:green;color:white;font-size:15px;">{{ __('Trader Book Farmer ') }}</div> 
                  <div class="card-body"> 

 @if ($message=Session::get('success'))
<div class="alert alert-success">
  <h3>{{$message}}</h3>
</div>
@elseif($mesage=Session::get('status'))
<div class="alert alert-danger">
  <h3>{{$message}}</h3>
</div>
@endif  

                    <form method="post" action="/bookfarmer">
                        @csrf

                        <div class="form-group row">
                            <label for="id name" class="col-md-4 col-form-label text-md-right">{{ __('Farmer Name ') }}</label>

                            <div class="col-md-6">
                          <input id="fname" type="text" class="form-control " name="fname" required autofocus="" placeholder="Farmer Name">

                             </div>
                        </div>

                               
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Weight of commodity: ') }}</label>

                            <div class="col-md-6">
                                <input id="weghtcommodity" type="text" class="form-control" 
                                 name="weightcommodity"  required  autofocus placeholder="Weight of commodity">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Name of commodity: ') }}</label>

                            <div class="col-md-6">
                                <input id="weghtcommodity" type="text" class="form-control" 
                                 name="namecommodity"  required  autofocus placeholder="Name of commodity">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __(' commodity Recived ') }}</label>

                            <div class="col-md-6">
                                <input id="weghtcommodity" type="text" class="form-control" 
                                 name="recivecommodity"  required  autofocus placeholder="Recived commodity">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Price Per Bag') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control" 
                                name="priceperbag"  required autocomplete="" autofocus placeholder="price per Bag eg:1000 Rs/-">

                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Final price') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="number" class="form-control"  name="finalprice"  required autocomplete="" placeholder="Finalprice Eg:1000 Rs/-">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Book A Farmer') }}
                                </button>
                           </div>
                        </div>
                    </form>
                        <a style="text-align:right" href="{{route('trader.trader_home')}}" class="btn btn-success mt-3">ClickOn Go To Dashboard</a>
                           </div>
                       
                       <div class="card-footer" style="background-color:green"></div>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
         

@endsection