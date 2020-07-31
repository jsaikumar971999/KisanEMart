@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header" style="background-color:green;color:white;font-size:15px;">{{ __('Crop Registration') }}</div> 
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

                    <form method="post" action="/add_crop">
                        @csrf

                        <div class="form-group row">
                            <label for="id name" class="col-md-4 col-form-label text-md-right">{{ __('Farmer ID ') }}</label>

                            <div class="col-md-6">
                          <input id="idname" type="text" class="form-control " name="cropid" required autofocus="" placeholder="Former ID">

                             </div>
                        </div>

                               
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Crop Name') }}</label>

                            <div class="col-md-6">
                                <input id="cropname" type="text" class="form-control" name="cropname"  required  autofocus placeholder="Crop Name Ex:wheat,Rice,...">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Land Cultivated') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control" 
                                name="landcultivate"  required autocomplete="" autofocus placeholder="How many akars">

                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Expected date of outcome:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="date" class="form-control"  name="expectdate"  required autocomplete="">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Crops') }}
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