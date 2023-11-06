 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-navy navbar-dark">

     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item bg-indigo">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                     class="text-light fas fa-bars"></i></a>
         </li>

     </ul>


     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">


         <!-- Messages Dropdown Menu -->
         <li class="nav-item dropdown">
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                         <img  src="{{ asset('vendors/dist/img/elon.jpg') }}" alt="User Avatar"
                             class="img-size-50 mr-3 img-circle">
                         <div class="media-body">
                             <h3 id="emp_name" class="dropdown-item-title">

                                 <span class="float-right text-sm text-indigo"><i class="fas fa-star"></i></span>
                             </h3>
                             <p id="notif_msg" class="text-sm"></p>
                             <p class="text-sm text-muted"><i class="far fa-calendar mr-"><span id="notif_leave_start"></span></i></p>
                         </div>
                     </div>
                     <!-- Message End -->
                 </a>
                 <div class="dropdown-divider"></div>
               
             </div>
         </li>






         <li class="nav-item dropdown user-menu">
             <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                 <img id="img_pro" src="{{ asset('vendors/dist/img/user2-160x160.jpg') }}"
                     class="user-image img-circle elevation-2" alt="User Image">
                 {{-- @foreach ($info as $display) --}}
                 {{-- <span class="d-none d-md-inline text-light">{{Auth::user()->fullname}}</span> --}}

             </a>
             <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <!-- User image -->
                 <li class="user-header bg-primary">
                     <img id="img_pro2" src="{{ asset('vendors/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                         alt="User Image">

                     <p>

                         {{ Auth::user()->fullname }}
                     </p>
                 </li>
                 <!-- Menu Body -->

                 <!-- Menu Footer-->
                 <li class="user-footer">
                     <a href="{{ route('signout') }}" class="btn btn-default btn-flat float-right">Sign out</a>
                 </li>
             </ul>
         </li>


     </ul>
 </nav>
 <!-- /.navbar -->


 <script>
    $(window).on('load', function(){
        setTimeout(() => {
            window.location.href = '/'
        }, 7205000);
    })

     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
     
     
 </script>
