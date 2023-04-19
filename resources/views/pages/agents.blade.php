@extends('layouts.app')

@section('content')
   <main id="main">

      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-8">
                  <div class="title-single-box">
                     <h1 class="title-single">{{ __('Our Amazing Agencies') }}</h1>
                     <span class="color-text-a">{{ __('Agencies') }}</span>
                  </div>
               </div>
               <div class="col-md-12 col-lg-4">
                  <nav aria-label="breadcrumb"
                     class="breadcrumb-box d-flex justify-content-lg-end">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active"
                           aria-current="page">
                           {{ __('Agencies') }}
                        </li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </section><!-- End Intro Single-->

      <!-- ======= agency Grid ======= -->
      <section class="agency-grid grid">
         <div class="container">
            <div class="row">
               {{-- <div class="col-sm-12">
                  <div class="grid-option">
                     <form>
                        <select class="custom-select">
                           <option selected>All</option>
                           <option value="1">New to Old</option>
                           <option value="2">For Rent</option>
                           <option value="3">For Sale</option>
                        </select>
                     </form>
                  </div>
               </div> --}}
               @foreach ($agencies as $agency)
                  <div class="col-md-4">
                     <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                           <img src="{{ asset('/storage/img/property-2.jpg') }}"
                              alt="{{ $agency->name }}"
                              class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                           <div class="card-overlay-a-content">
                              <div class="card-header-a">
                                 <h2 class="card-title-a">
                                    <a href="agency-single.html">{{ $agency->name }}</a>
                                 </h2>
                              </div>
                              <div class="card-body-a">
                                 <a href="{{ route('agencies.show', $agency) }}"
                                    class="link-a">Click here to view
                                    <span class="bi bi-chevron-right"></span>
                                 </a>
                              </div>
                              <div class="card-footer-a">
                                 <ul class="card-info d-flex justify-content-around">
                                    <li>
                                       <h4 class="card-info-title">{{ __('Properties') }}</h4>
                                       <span>{{ $agency->properties->count() }}
                                       </span>
                                    </li>
                                    <li>
                                       <h4 class="card-info-title">Beds</h4>
                                       <span>{{ $agency->bedrooms }}</span>
                                    </li>
                                    <li>
                                       <h4 class="card-info-title">Baths</h4>
                                       <span>{{ $agency->bathrooms }}</span>
                                    </li>
                                    <li>
                                       <h4 class="card-info-title">Garages</h4>
                                       <span>{{ $agency->garages }}</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <nav class="pagination-a pagination justify-content-end">
                     {!! $agencies->links() !!}
                  </nav>
               </div>
            </div>
         </div>
      </section><!-- End agency Grid Single-->

   </main><!-- End #main -->
@endsection
