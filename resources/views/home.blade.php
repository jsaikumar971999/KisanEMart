@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"style="background-color:green;color:white;font-size:18px;" >Welcome Form</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 style="padding:80px;">You are Successfully Registered !</h2>
                    <h4 style="margin-right: ">Login To continue your Dashboard !</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
