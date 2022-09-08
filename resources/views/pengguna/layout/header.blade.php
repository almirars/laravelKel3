 <!-- header inner -->
 <div class="header_main">
     <div class="header_main">
         <div class="container">
             <div class="row">

                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                         <div class="center-desk">
                             <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                         <div class="limit-box">
                             <nav class="main-menu">
                                 <ul class="menu-area-main">
                                     <li><a class="{{ Request::path() === '/' ? 'text-white' : '' }}" href="{{ url('/') }}">Beranda</a></li>
                                     <li><a class="{{ Request::path() === 'about' ? 'text-white' : '' }}" href="{{ url('about') }}">Informasi</a></li>
                                     <li><a class="{{ Request::path() === 'booking' ? 'text-white' : '' }}" href="{{ url('booking') }}" href="{{ url('booking') }}">Pemesanan</a></li>
                                     <li><a class="{{ Request::path() === 'contact' ? 'text-white' : '' }}" href="{{ url('contact') }}" href="{{ url('contact') }}">Pengaduan</a></li>
                                     </li>
                                 </ul>
                             </nav>
                         </div>
                     </div>
                 </div>


             </div>
         </div>
     </div>
 </div>
 <!-- end header inner -->
