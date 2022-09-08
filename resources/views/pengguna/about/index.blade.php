@extends('pengguna.layout.main')
@section('konten')
          <!--about -->
          <div class="section about ">
            <div class="container">
                <div class="row">
                   <div class="col-12">
                       <div class="titlepage">
                        <h2><strong class="black"> Seputar</strong>  Informasi</h2>
                        <span>Website ini membantu para pendaki Gunung Lawu
                           agar bisa memesan tiket mendaki secara mudah dan dapat dilakukan di mana saja.
                        </span>
                     </div>
                   </div>
                </div>
            </div>
         </div>
         <section >
            <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                  <li data-target="#main_slider" data-slide-to="1"></li>
                  <li data-target="#main_slider" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row marginii">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <div class="carousel-sporrt_text ">
                                 <h1 class="sporrt_text">Kemudahan</h1>
                                 <p  class="lorem_text">Pada website ini sudah dilengkapi dengan tata cara pemesanan tiket dan juga informasi mengenai jalur yang bisa dilewati oleh para pendaki</p>
                                 <div class="btn_main">
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <div class="img-box">
                                 <figure><img src="{{ asset('images/ga.png') }}" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row marginii">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <div class="carousel-sporrt_text ">
                                 <h1 class="sporrt_text">Pengaduan</h1>
                                 <p  class="lorem_text">Website ini juga dilengkapi halaman pengaduan, sehingga kami bisa terus memperbarui sistem sesuai kebutuhan para pendaki</p>
                                 <div class="btn_main">
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <div class="img-box ">
                                 <figure><img src="images/ga.png" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row marginii">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <div class="carousel-sporrt_text ">
                                 <h1 class="sporrt_text">Rute</h1>
                                 <p  class="lorem_text">Tak Hanya itu, pada website juga memberikan informasi tentang rute - rute yang bisa dilewati oleh para pendaki</p>
                                 <div class="btn_main">
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <div class="img-box">
                                 <figure><img src="images/ga.png" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
   
         </div>
         <!--end about -->
@endsection