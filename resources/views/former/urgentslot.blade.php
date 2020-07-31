@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($message=Session::get('success'))
<div class="alert alert-success">
  <h4>{{$message}}</h4>
</div>
@elseif($mesage=Session::get('status'))
<div class="alert alert-danger">
  <h4>{{$message}}</h4>
</div>
@endif  

                <div class="card-header" style="background-color:green;color:white;font-size:15px;">{{ __('Slot For Urgency') }}</div> 
                  <div class="card-body">

                   <form method="post" action="/addurgentslot">
                        @csrf
        
                      <div class="form-group row">
                            <label for="date" class="col-md-8 col-form-label text-md-left">{{ __('Farmer ID') }}</label>

                            <div class="col-md-8">
                            	<input type="text" name="farmerid" placeholder="Farmer ID" required="" class="form-control">
                            </div>

                            <div class="col-md-8">Paid Slot
                                <div class="checkbox">
                                <label style="color:red"><input  type="checkbox" value="yes" name="condition1" required="">&nbsp;Access this paid slot only if there is an urgency in money .  you will receive the payment within 2 days</label>
                               </div>
                             </div>
                             <div class="col-md-8">
                           <div class="checkbox">
                                 <label style="color:red"><input name="condition2" type="checkbox" value="yes" required="">&nbsp;The net amount payable will be deducted by 5 to 6% </label>
                          </div>
                      </div>
                  </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-success">
                                    {{ __('I Agree') }}
                                </button>
                           </div>
                        </div>
                        <a style="text-align:right" href="{{route('former.former_home')}}" class="btn btn-success mt-3">ClickOn Go To Dashboard</a>
                           </div>
                       
                       <div class="card-footer" style="background-color:green"></div>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
         


@endsection