{{-- Banner Section --}}
<div class="container-fluid lightgreen mt-5">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators text-success">
                    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                  </ol>
          <div class="carousel-inner">
                    <div class="carousel-item">
                        <div style="height: 550px" class="row d-flex flex-row align-items-center">
                            <div class="col-md-6">
                                <h1 class="text-success font-weight-bold">WEB APPLICATION</h1>
                                <p class="lead">Learn To Professionals & Collect Source Code Based On Porjects</p>
                                @if(Session::has('name'))
                                <a class="btn btn-danger rounded" href="{{url('/dashboard')}}">Classroom</a>
                                @else    
                                <a class="btn btn-success rounded" href="{{url('/login')}}">Login</a>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <img class="top-banner-img rounded animated fadeIn" src="images/web.gif"> 
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div style="height: 550px" class="row d-flex flex-row align-items-center">
                            <div class="col-md-6 pl-5">
                                <h1 class="text-success font-weight-bold">Website Design</h1>
                                <p class="lead">Learn To Professionals & Collect Source Code Based On Porjects</p>
                                @if(Session::has('name'))
                                <a class="btn btn-danger rounded" href="{{url('/dashboard')}}">Classroom</a>
                                @else    
                                <a class="btn btn-success rounded" href="{{url('/login')}}">Login</a>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <img class="top-banner-img rounded animated fadeIn" src="images/programming2.gif"> 
                            </div>
                        </div>
                    </div>
          </div>
<!--           <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
        </div>
    </div>
</div>

