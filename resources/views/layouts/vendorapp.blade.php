@include('vendor.inc.header')

<!-- sidebars -->

	<!-- notifications sidebar -->
		@include('vendor.inc.notifications')
	<!-- ./ notifications sidebar -->

	<!-- settings sidebar -->
		@include('vendor.inc.settings')
	<!-- ./ settings sidebar -->

	<!-- search sidebar -->
		@include('vendor.inc.search')

	<!-- ./ search sidebar -->
		@include('vendor.inc.sidebar')
	<!-- ./ sidebars -->


    <!-- header -->    
		@include('vendor.inc.topbar')
    <!-- ./ header -->

    <!-- content -->
    	@yield('vendorapp')
    <!-- ./ content -->

@include('vendor.inc.footer')
