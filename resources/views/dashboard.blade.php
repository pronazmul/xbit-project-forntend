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
    <h3 class='text-center text-color mx-auto display-4'>Welcome {{Session::get('name')}}</h3><hr>
    <div class="container-fluid lightgreen py-4">
    <h4 class="text-success font-weight-bold text-center mb-4">Premium Gallery</h4>

        <div class="container">
            <div class="tz-gallery">

                <div class="row">
                @foreach($paidImg as $paidImg)
                    <div class="col-md-4">
                        <a class="lightbox" href="admin.laravel.designerbillal.com/storage/app/images/{{$paidImg->image}}">
                            <img src="admin.laravel.designerbillal.com/storage/app/images/{{$paidImg->image}}" alt="Bridge">
                        </a>
                    </div>
                @endforeach
        
                </div>
        
            </div>
        </div>          

    
</div>
    </div>
</div>

@endsection