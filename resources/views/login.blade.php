@extends('layout.app')
@section('title','LOGIN')
@section('content')

<div class="container-fluid lightgreen mt-5">
    <div class="container">
    <div style="height: 500px" class="row d-flex flex-row align-items-center">
        <div class="col-md-5">
            <h2 class="text-success">Login Now</h2><hr/>
            <input type="text" id="loginMobile" class="form-control mt-4" placeholder="Your Mobile No">
            <input type="password" id="loginPass" class="form-control mt-4" placeholder="Your Password">
            <button id="login" class="btn btn-success btn-block mt-4">Login</button>
        </div>
        <div class="col-md-6">
            <img class="d-block mx-auto" src="images/bot.gif">
        </div>
    </div>
</div>
</div>





@endsection