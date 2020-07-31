
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

                <div class="card-header" style="background-color:green;color:white;font-size:15px;">{{ __('My Registrations') }}</div> 
                  <div class="card-body">

                   <form method="post" action="/showmyreg">
                        @csrf
        
                      <div class="form-group row">
                            <label for="date" class="col-md-8 col-form-label text-md-left">{{ __('Farmer ID') }}</label>

                            <div class="col-md-8">
                              <input type="text" name="myregid" placeholder="Farmer ID" required="" class="form-control">
                            </div>

                           
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Submit') }}
                                </button>
                           </div>
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