<div class="container-fluid lightgreen py-4">
    <h1 class="text-success font-weight-bold text-center mb-4">Free Gallery</h1>

        <div class="container">
            <div class="tz-gallery">

                <div class="row">
        
                @foreach($freeImg as $freeImg)
                <div class="col-md-4">
                        <a class="lightbox" href="admin.laravel.designerbillal.com/storage/app/images/{{$freeImg->image}}">
                            <img src="admin.laravel.designerbillal.com/storage/app/images/{{$freeImg->image}}" alt="Bridge">
                        </a>
                    </div>
                @endforeach

        
                </div>
        
            </div>
        </div>          

    
</div>