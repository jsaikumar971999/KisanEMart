@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header" style="background-color:green;color:white;font-size:15px;">{{ __('Working Conditions and Timings of the Mill') }}</div> 
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

                    <form method="post" action="/addworktime">
                        @csrf

            <div class="form-group row">
                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Trader ID') }}</label>
            
            <div class="col-md-6">
               <input type="text" name="traderid" placeholder="Traderid ID" required="" class="form-control">
            </div>
       </div>

            <div class="form-group row">
              <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Mill Status(Open/Close)') }}</label>
             <div class="col-md-6">
                <select id="gender" class="form-control" id="parent_selection"  name="millstatus"    required>
                <option value="">Mill(Open/Close)</option>
                 <option value="open">Open</option>
                 <option value="close">Close</option>
                </select>
             </div>
        </div>

        <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Mill Timings') }}</label>

                <div class="col-md-6">
                <select id="gender" class="form-control" id="parent_selection"  name="milltiming"    required>
                 <option value="">Select Mill Timings</option>
                 <option value="6 Hours To 8 hours">6 Hours To 8 hours</option>
                 <option value="6 Hours To 8 hours">8 Hours To 10 hours</option>
                <option value="6 Hours To 8 hours">10 Hours To 12 hours</option>
                </select>
                 </div>
            </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                           </div>
                        </div>
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