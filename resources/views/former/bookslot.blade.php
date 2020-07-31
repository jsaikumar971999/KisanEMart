@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header" style="background-color:green;color:white;font-size:15px;">{{ __('Book A Slot') }}</div> 
                  <div class="card-body"> 

 @if ($message=Session::get('success'))
<div class="alert alert-success">
  <h4>{{$message}}</h4>
</div>
@elseif($mesage=Session::get('status'))
<div class="alert alert-danger">
  <h4>{{$message}}</h4>
</div>
@endif  

                    <form method="post" action="/bookedslot">
                        @csrf

                        <div class="form-group row">
                            <label for="id name" class="col-md-4 col-form-label text-md-right">{{ __('Farmer ID') }}</label>

                            <div class="col-md-6">
                          <input id="idname" type="text" class="form-control " name="bookid" required autofocus="" placeholder="Farmer ID">

                             </div>
                        </div>

                          <div class="form-group row">
                            <label for="id name" class="col-md-4 col-form-label text-md-right">{{ __('Adhar Number') }}</label>

                            <div class="col-md-6">
                          <input id="idname" type="text" class="form-control " name="adharno" required autofocus="" placeholder="Adhar Number">

                             </div>
                        </div>

                             
                        

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Expected date') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control"  name="expectdate"  required autocomplete="" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Book A Slot') }}
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