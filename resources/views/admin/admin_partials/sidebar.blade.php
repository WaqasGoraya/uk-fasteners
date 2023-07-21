 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="{{route('dashboard')}}" class="brand-link">
     <img src="{{asset('admin-panel/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">Admin Dashboard</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="{{asset('admin-panel/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Web Admin</a>
       </div>
     </div>
     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item ">
           <a href="{{route('dashboard')}}" class="nav-link {{request()->is('dashboard*')?'active':''}}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
               <!-- <i class="right fas fa-angle-left"></i> -->
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{url('products')}}" class="nav-link {{request()->is('products*')?'active':''}}">
             <i class="nav-icon fab fa-product-hunt"></i>
             <p>
               Products
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{url('categories')}}" class="nav-link {{request()->is('categories*')?'active':''}}">
             <i class="nav-icon fa fa-list-alt"></i>
             <p>
               Categories
             </p>
           </a>
         </li>

         <li class="nav-item">
           <a href="{{url('sub-categories')}}" class="nav-link {{request()->is('sub-categories*')?'active':''}}">
             <i class="nav-icon fa fa-list-alt"></i>
             <p>
              Sub Categories
             </p>
           </a>
         </li>
         <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>