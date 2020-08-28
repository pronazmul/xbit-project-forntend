@extends('layout.app')
@section('title','REGISTRATION')
@section('content')
<div class="container-fluid lightgreen mt-5">
	<div class="container py-5">
    <h1 class='text-center text-color mx-auto display-1'>Welcome {{Session::get('name')}}</h1><hr>
        <div class="col-md-7 mx-auto">
                <img class='d-block w-75 mx-auto py-3' src="images/dashboard.png" alt="">
        </div>
    </div>
</div>

@endsection