@extends('layouts.vendorapp')
@section('vendorapp')
	<div class="content ">        
	    <div class="buyer-profile-cover bg-image mb-4" data-image="{{ asset('vetra/assets/images/profile-bg.jpg') }}">
	        <div
	            class="container d-flex align-items-center justify-content-center h-100 flex-column flex-md-row text-center text-md-start">
	            <div class="avatar avatar-xl me-3">
	                <img src="{{ asset('vetra/assets/images/user/man_avatar3.jpg') }}" class="rounded-circle"
	                     alt="...">
	            </div>
	            <div class="my-4 my-md-0">
	                <h3 class="mb-1">{{ $vendor->name }}</h3>
	                @if($vendor->role == 2)
		                <small>
		                	Vendor
		                </small>
	                @endif
	            </div>
	            <div class="ms-md-auto">
	                <a href="./settings.html" class="btn btn-primary btn-lg btn-icon">
	                    <i class="bi bi-pencil small"></i> Edit Account
	                </a>
	            </div>
	        </div>
	    </div>

	    <div class="row">
	        <div class="col-md-12">            
			    <div class="row g-4 mb-4">
			        <div class="col-md-4">
			            <div class="card bg-cyan text-white-90">
			                <div class="card-body d-flex align-items-center">
			                    <i class="bi bi-box-seam display-7 me-3"></i>
			                    <div>
			                        <h4 class="mb-0">45</h4>
			                        <span>My Orders</span>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="col-md-4">
			            <div class="card bg-purple text-white-90">
			                <div class="card-body d-flex align-items-center">
			                    <i class="bi bi-heart display-7 me-3"></i>
			                    <div>
			                        <h4 class="mb-0">5</h4>
			                        <span>My Wishlist</span>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="col-md-4">
			            <div class="card bg-teal text-white-90">
			                <div class="card-body d-flex align-items-center">
			                    <i class="bi bi-wallet2 display-7 me-3"></i>
			                    <div>
			                        <h4 class="mb-0">$9,000</h4>
			                        <span>My Profit</span>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    <div class="card mb-12">
			        <div class="card-body">
			            <h6 class="card-title mb-4">Income by Month</h6>
			            <div id="profit"></div>
			        </div>
			    </div>
			</div>
	    </div>

    </div>
@endsection