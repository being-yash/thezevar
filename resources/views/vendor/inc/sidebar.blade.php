<!-- menu -->


<!-- menu -->
<div class="menu">
    <div class="menu-header">
        <a href="index-2.html" class="menu-header-logo">
            <img src="{{ asset('vetra/ZEVAR.png') }}" style="width:250px;" alt="logo">
        </a>
        <a href="index-2.html" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="{{ asset('vetra/assets/images/user/man_avatar3.jpg') }}"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">{{ $vendor->name }}</div>
                    @if($vendor->role == 2)
                        <small class="text-muted">
                            Vendor
                        </small>
                    @endif
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <!-- <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a> -->
                <a href="login.html" class="dropdown-item d-flex align-items-center text-danger"
                   target="_blank">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
            </div>
        </div>
        <ul>
       
            <li>
                <a href="{{ route('vendor.dashboard') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Dashboard</span>
                </a><!-- 
                <ul>
                    <li>
                        <a  href="orders.html">List</a>
                    </li>
                    <li>
                        <a  href="order-detail.html">Detail</a>
                    </li>
                </ul> -->
            </li>
          
          
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Orders</span>
                </a>
                <ul style="display: block;">
                    <li>
                        <a  href="{{ route('myOrders') }}">All Orders</a>
                    </li>
                    <li>
                        <a  href="{{ route('myAddresses') }}">Addresses</a>
                    </li>
                    <li>
                        <a  href="buyer-wishlist.html">Payments</a>
                    </li>
                </ul>
            </li>      
        </ul>
    </div>
</div>
<!-- ./  menu --> 

<!-- ./  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">