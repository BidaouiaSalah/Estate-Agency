@extends('layouts.app')

@section('content')
   <!-- ======= Intro Section ======= -->
   <div class="intro intro-carousel swiper position-relative">

      <div class="swiper-wrapper">

         <div class="swiper-slide carousel-item-a intro-item bg-image"
            style="background-image: url({{ asset('/storage/img/slide-1.jpg') }})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
               <div class="table-cell">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="intro-body">
                              <p class="intro-title-top">Doral, Florida
                                 <br> 78345
                              </p>
                              <h1 class="intro-title mb-4 ">
                                 <span class="color-b">204 </span> Mount
                                 <br> Olive Road Two
                              </h1>
                              <p class="intro-subtitle intro-price">
                                 <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="swiper-slide carousel-item-a intro-item bg-image"
            style="background-image: url({{ asset('/storage/img/slide-2.jpg') }})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
               <div class="table-cell">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="intro-body">
                              <p class="intro-title-top">Doral, Florida
                                 <br> 78345
                              </p>
                              <h1 class="intro-title mb-4">
                                 <span class="color-b">204 </span> Rino
                                 <br> Venda Road Five
                              </h1>
                              <p class="intro-subtitle intro-price">
                                 <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="swiper-slide carousel-item-a intro-item bg-image"
            style="background-image: url({{ asset('/storage/img/slide-3.jpg') }})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
               <div class="table-cell">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="intro-body">
                              <p class="intro-title-top">Doral, Florida
                                 <br> 78345
                              </p>
                              <h1 class="intro-title mb-4">
                                 <span class="color-b">204 </span> Alira
                                 <br> Roan Road One
                              </h1>
                              <p class="intro-subtitle intro-price">
                                 <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="swiper-pagination"></div>
   </div>
   <!-- End Intro Section -->

   <main id="main">

      <!-- ======= Services Section ======= -->
      <section class="section-services section-t8">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title-wrap d-flex justify-content-between">
                     <div class="title-box">
                        <h2 class="title-a">Our Services</h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="card-box-c foo">
                     <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                           <span class="bi bi-cart"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                           <h2 class="title-c">Lifestyle</h2>
                        </div>
                     </div>
                     <div class="card-body-c">
                        <p class="content-c">
                           Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.
                           Praesent sapien massa,
                           convallis a pellentesque
                           nec, egestas non nisi.
                        </p>
                     </div>
                     <div class="card-footer-c">
                        <a href="#"
                           class="link-c link-icon">Read more
                           <span class="bi bi-chevron-right"></span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card-box-c foo">
                     <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                           <span class="bi bi-calendar4-week"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                           <h2 class="title-c">Loans</h2>
                        </div>
                     </div>
                     <div class="card-body-c">
                        <p class="content-c">
                           Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere
                           blandit. Mauris blandit
                           aliquet elit, eget tincidunt
                           nibh pulvinar a.
                        </p>
                     </div>
                     <div class="card-footer-c">
                        <a href="#"
                           class="link-c link-icon">Read more
                           <span class="bi bi-calendar4-week"></span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card-box-c foo">
                     <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                           <span class="bi bi-card-checklist"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                           <h2 class="title-c">Sell</h2>
                        </div>
                     </div>
                     <div class="card-body-c">
                        <p class="content-c">
                           Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.
                           Praesent sapien massa,
                           convallis a pellentesque
                           nec, egestas non nisi.
                        </p>
                     </div>
                     <div class="card-footer-c">
                        <a href="#"
                           class="link-c link-icon">Read more
                           <span class="bi bi-chevron-right"></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Services Section -->

      <!-- ======= Latest Properties Section ======= -->
      @include('partials.latest-properties')
      <!-- End Latest Properties Section -->

      <!-- ======= Agents Section ======= -->
      @include('partials.agents')
      <!-- End Agents Section -->

      <!-- ======= Latest News Section ======= -->
      @include('partials.latest-news')
      <!-- End Latest News Section -->

      <!-- ======= Testimonials Section ======= -->
      @include('partials.testimonials')
      <!-- End Testimonials Section -->

   </main><!-- End #main -->
@endsection
