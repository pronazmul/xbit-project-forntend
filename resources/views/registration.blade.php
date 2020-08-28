@extends('layout.app')
@section('title','REGISTRATION')
@section('content')
<div class="container-fluid lightgreen mt-5">
	<div class="container">
	<div style="height: 500px" class="row d-flex flex-row align-items-center">
		<div class="col-md-6">
			<h2 class="text-success">Registration Here</h2><hr/>
			<input type="text" id="regName" class="form-control mt-2" placeholder="Your Name">
			<input type="text" id="regEmail" class="form-control mt-2" placeholder="Your Email">
			<input type="text" id="regMobile" class="form-control mt-2" placeholder="Your Mobile No">
			<input type="password" id="regPass" class="form-control mt-2" placeholder="Your Password">
			<input type="text" id="regBkashNumber" class="form-control mt-2" placeholder="Your Bkash Mobile No">
			<input type="text" id="regBkashTrxid" class="form-control mt-2" placeholder="Your Bkash TrxID">
			<button id="register" class="btn btn-success btn-block mt-2 font-weight-bold">Resistration Now</button>
		</div>
		<div class="col-md-6">
			<img width="150" class="d-block mx-auto" src="images/bikash.png">
			<p class="lead text-secondary">Send your course fee 01876397492 (Bkash Personal). After sending fee use Bkash Trxid and sender mobile number for registration.This is not buy and try product, after account activation course fee is not refundable.</p>
		</div>
	</div>
</div>
</div>

@endsection