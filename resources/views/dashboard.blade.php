@extends('layout.app')
@section('title','REGISTRATION')
@section('content')
<div class="container-fluid lightgreen mt-5">
        <div class="container pt-5">
                <div class="row lightgreen">
                    <div class="col-md-2"><h6 class='text-center pt-2'>Active Members:</h6></div>
                    <div class="col-md-10">
                        <marquee direction="left">
                            <ul class="d-flex flex-row p-2">
                            @foreach($user as $user)
                                <li class="list-unstyled pr-4"><span class='bg-success text-white rounded p-2'>{{$user->name}}</span></li>
                            @endforeach
                            </ul>
                        </marquee>
                    </div>
                </div>
        </div>
	<div class="container pb-5">
    <h1 class='text-center text-color mx-auto display-4'>Welcome {{Session::get('name')}}</h1><hr>
        <div class="col-md-7 mx-auto">
                <img class='d-block w-75 mx-auto py-3' src="images/dashboard.png" alt="">
        </div>
    </div>
</div>

@endsection