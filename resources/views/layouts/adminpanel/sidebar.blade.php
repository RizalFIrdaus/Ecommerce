 <!-- Sidebar -->
 <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #ff4200">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
         <div class="sidebar-brand-icon bg-white rounded">
            <img src="{{ asset('frontend/img/ico/default/logo.svg') }}" >
         </div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="{{url('/admin/dashboard')}}">
            <i class="fab fa-cpanel"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading text-white text-lg">
         Catalog
     </div>

     <li class="nav-item">
         <a class="nav-link" href="{{url('/admin/products')}}">
             <i class="fas fa-fw fa-table"></i>
             <span>Products</span></a>
         <a class="nav-link" href="{{url('/admin/category')}}">
             <i class="fas fa-fw fa-table"></i>
             <span>Categories</span></a>
         <a class="nav-link" href="{{url('/admin/brands')}}">
             <i class="fas fa-fw fa-table"></i>
             <span>Brands</span></a>
         <a class="nav-link" href="{{url('/admin/hastags')}}">
             <i class="fas fa-fw fa-table"></i>
             <span>Hastags</span></a>
         <a class="nav-link" href="{{url('/admin/map')}}">
            <i class="fas fa-flag"></i>
            <span>Province</span></a>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading text-white text-lg">
         Variant
     </div>

     <li class="nav-item">
         <a class="nav-link" href="{{url('/admin/color')}}">
             <i class="fas fa-fw fa-table"></i>
             <span>Warna</span></a>
         <a class="nav-link" href="{{url('/admin/size')}}">
             <i class="fas fa-fw fa-table"></i>
             <span>Ukuran</span></a>
         <a class="nav-link" href="{{url('/admin/flavor')}}">
             <i class="fas fa-fw fa-table"></i>
             <span>Rasa</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading text-white text-lg">
         Expedition
     </div>

     <li class="nav-item">
         <a class="nav-link" href="{{url('/admin/cargo')}}">
             <i class="fas fa-truck-moving"></i>
             <span>Cargo</span></a>
         <a class="nav-link" href="{{url('/admin/country')}}">
             <i class="fas fa-globe-asia"></i>
             <span>Country</span></a>
     </li>


     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading text-white text-lg">
         Frontend Media
     </div>

     <li class="nav-item">
         <a class="nav-link" href="{{url('/admin/videos')}}">
             <i class="fab fa-youtube"></i>
             <span>Youtube Reels</span></a>
         <a class="nav-link" href="{{url('/admin/banner')}}">
             <i class="fas fa-ad"></i>
             <span>Banners</span></a>
         <a class="nav-link" href="{{url('/admin/news')}}">
             <i class="fas fa-newspaper"></i>
             <span>News</span></a>
     </li>
  <!-- Divider -->
  <hr class="sidebar-divider">

  <div class="sidebar-heading text-white text-lg">
     Info
 </div>

 <li class="nav-item">
     <a class="nav-link" href="{{url('/admin/users')}}">
         <i class="fab fa-user"></i>
         <span>Users</span></a>
 </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading text-white text-lg">
         Another Dashboard
     </div>

     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
             aria-controls="collapseTwo">
             <i class="fab fa-cpanel"></i>
             <span>API Panel</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Vendor Library</h6>
                 <a class="collapse-item" href="https://dashboard.tawk.to/#/dashboard/63621e07daff0e1306d5409d">Tawkto</a>
                 <a class="collapse-item" href="https://dashboard.midtrans.com/">Midtrans</a>
             </div>
         </div>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->