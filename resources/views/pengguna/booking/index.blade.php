@extends('pengguna.layout.main')
@section('konten')
         <!-- plant -->
         <div id="plant" class="section  product">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 ">
                     <div class="titlepage">
                        <!-- <h2><strong class="black">Mau </strong>  Products</h2> -->
                        <!-- <span>Di halaman ini pendaki diberi kemudahan untuk melihat tutorial booking, tutorial pembayaran, dan status booking.</span> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
            <div class="clothes_main section ">
             <div class="container">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                     <div class="sport_product">
                        <figure><img src="images/booking.png" alt="img"/></figure>
                       <h3> <strong class="price_text">Booking</strong></h3>
                        <h4>Tutorial Booking</h4>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                     <div class="sport_product">
                        <figure><img src="images/payment.png" alt="img"/></figure>
                       <h3> <strong class="price_text">Pembayaran</strong></h3>
                        <h4> Tutorial Pembayaran</h4>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                     <div class="sport_product">
                        <figure><img src="images/status.png" alt="img"/></figure>
                        <h3> <strong class="price_text">Status Booking</strong></h3>
                        <h4>Status</h4>
                     </div>
                  </div>
                </div>
               </div>
              </div>
         </div>
         <!-- end plant -->
@endsection