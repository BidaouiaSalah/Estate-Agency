@extends('layouts.app')

@section('content')
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
   <div class="container">
     <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
       <span></span>
       <span></span>
       <span></span>
     </button>
     <a class="navbar-brand text-brand" href="index.html">Estate<span class="color-b">Agency</span></a>

     <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
       <ul class="navbar-nav">

         <li class="nav-item">
           <a class="nav-link " href="index.html">Home</a>
         </li>

         <li class="nav-item">
           <a class="nav-link " href="about.html">About</a>
         </li>

         <li class="nav-item">
           <a class="nav-link " href="property-grid.html">Property</a>
         </li>

         <li class="nav-item">
           <a class="nav-link " href="blog-grid.html">Blog</a>
         </li>

         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
           <div class="dropdown-menu">
             <a class="dropdown-item " href="property-single.html">Property Single</a>
             <a class="dropdown-item " href="blog-single.html">Blog Single</a>
             <a class="dropdown-item active" href="agents-grid.html">Agents Grid</a>
             <a class="dropdown-item " href="agent-single.html">Agent Single</a>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link " href="contact.html">Contact</a>
         </li>
       </ul>
     </div>

     <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
       <i class="bi bi-search"></i>
     </button>

   </div>
 </nav><!-- End Header/Navbar -->

 <main id="main">
   <!-- =======Intro Single ======= -->
   <section class="intro-single">
     <div class="container">
       <div class="row">
         <div class="col-md-12 col-lg-8">
           <div class="title-single-box">
             <h1 class="title-single">Our Amazing Agents</h1>
             <span class="color-text-a">Grid Properties</span>
           </div>
         </div>
         <div class="col-md-12 col-lg-4">
           <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
             <ol class="breadcrumb">
               <li class="breadcrumb-item">
                 <a href="#">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">
                 Agents Grid
               </li>
             </ol>
           </nav>
         </div>
       </div>
     </div>
   </section><!-- End Intro Single-->

   <!-- ======= Agents Grid ======= -->
   <section class="agents-grid grid">
     <div class="container">
       <div class="row">
         <div class="col-md-4">
           <div class="card-box-d">
             <div class="card-img-d">
               <img src="{{asset('/storage/img/agent-4.jpg')}}" alt="" class="img-d img-fluid">
             </div>
             <div class="card-overlay card-overlay-hover">
               <div class="card-header-d">
                 <div class="card-title-d align-self-center">
                   <h3 class="title-d">
                     <a href="#" class="link-two">Margaret Sotillo
                       <br> Escala</a>
                   </h3>
                 </div>
               </div>
               <div class="card-body-d">
                 <p class="content-d color-text-a">
                   Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                 </p>
                 <div class="info-agents color-a">
                   <p>
                     <strong>Phone: </strong> +54 356 945234
                   </p>
                   <p>
                     <strong>Email: </strong> agents@example.com
                   </p>
                 </div>
               </div>
               <div class="card-footer-d">
                 <div class="socials-footer d-flex justify-content-center">
                   <ul class="list-inline">
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-facebook" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-twitter" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-instagram" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-linkedin" aria-hidden="true"></i>
                       </a>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-4">
           <div class="card-box-d">
             <div class="card-img-d">
               <img src="assets/img/agent-2.jpg" alt="" class="img-d img-fluid">
             </div>
             <div class="card-overlay card-overlay-hover">
               <div class="card-header-d">
                 <div class="card-title-d align-self-center">
                   <h3 class="title-d">
                     <a href="#" class="link-two">Margaret Sotillo
                       <br> Escala</a>
                   </h3>
                 </div>
               </div>
               <div class="card-body-d">
                 <p class="content-d color-text-a">
                   Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                 </p>
                 <div class="info-agents color-a">
                   <p>
                     <strong>Phone: </strong> +54 356 945234
                   </p>
                   <p>
                     <strong>Email: </strong> agents@example.com
                   </p>
                 </div>
               </div>
               <div class="card-footer-d">
                 <div class="socials-footer d-flex justify-content-center">
                   <ul class="list-inline">
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-facebook" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-twitter" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-instagram" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-linkedin" aria-hidden="true"></i>
                       </a>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-4">
           <div class="card-box-d">
             <div class="card-img-d">
               <img src="assets/img/agent-3.jpg" alt="" class="img-d img-fluid">
             </div>
             <div class="card-overlay card-overlay-hover">
               <div class="card-header-d">
                 <div class="card-title-d align-self-center">
                   <h3 class="title-d">
                     <a href="#" class="link-two">Margaret Sotillo
                       <br> Escala</a>
                   </h3>
                 </div>
               </div>
               <div class="card-body-d">
                 <p class="content-d color-text-a">
                   Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                 </p>
                 <div class="info-agents color-a">
                   <p>
                     <strong>Phone: </strong> +54 356 945234
                   </p>
                   <p>
                     <strong>Email: </strong> agents@example.com
                   </p>
                 </div>
               </div>
               <div class="card-footer-d">
                 <div class="socials-footer d-flex justify-content-center">
                   <ul class="list-inline">
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-facebook" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-twitter" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-instagram" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-linkedin" aria-hidden="true"></i>
                       </a>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-4">
           <div class="card-box-d">
             <div class="card-img-d">
               <img src="assets/img/agent-5.jpg" alt="" class="img-d img-fluid">
             </div>
             <div class="card-overlay card-overlay-hover">
               <div class="card-header-d">
                 <div class="card-title-d align-self-center">
                   <h3 class="title-d">
                     <a href="#" class="link-two">Margaret Sotillo
                       <br> Escala</a>
                   </h3>
                 </div>
               </div>
               <div class="card-body-d">
                 <p class="content-d color-text-a">
                   Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                 </p>
                 <div class="info-agents color-a">
                   <p>
                     <strong>Phone: </strong> +54 356 945234
                   </p>
                   <p>
                     <strong>Email: </strong> agents@example.com
                   </p>
                 </div>
               </div>
               <div class="card-footer-d">
                 <div class="socials-footer d-flex justify-content-center">
                   <ul class="list-inline">
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-facebook" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-twitter" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-instagram" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-linkedin" aria-hidden="true"></i>
                       </a>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-4">
           <div class="card-box-d">
             <div class="card-img-d">
               <img src="assets/img/agent-1.jpg" alt="" class="img-d img-fluid">
             </div>
             <div class="card-overlay card-overlay-hover">
               <div class="card-header-d">
                 <div class="card-title-d align-self-center">
                   <h3 class="title-d">
                     <a href="#" class="link-two">Margaret Sotillo
                       <br> Escala</a>
                   </h3>
                 </div>
               </div>
               <div class="card-body-d">
                 <p class="content-d color-text-a">
                   Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                 </p>
                 <div class="info-agents color-a">
                   <p>
                     <strong>Phone: </strong> +54 356 945234
                   </p>
                   <p>
                     <strong>Email: </strong> agents@example.com
                   </p>
                 </div>
               </div>
               <div class="card-footer-d">
                 <div class="socials-footer d-flex justify-content-center">
                   <ul class="list-inline">
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-facebook" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-twitter" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-instagram" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-linkedin" aria-hidden="true"></i>
                       </a>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-4">
           <div class="card-box-d">
             <div class="card-img-d">
               <img src="assets/img/agent-6.jpg" alt="" class="img-d img-fluid">
             </div>
             <div class="card-overlay card-overlay-hover">
               <div class="card-header-d">
                 <div class="card-title-d align-self-center">
                   <h3 class="title-d">
                     <a href="#" class="link-two">Margaret Sotillo
                       <br> Escala</a>
                   </h3>
                 </div>
               </div>
               <div class="card-body-d">
                 <p class="content-d color-text-a">
                   Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                 </p>
                 <div class="info-agents color-a">
                   <p>
                     <strong>Phone: </strong> +54 356 945234
                   </p>
                   <p>
                     <strong>Email: </strong> agents@example.com
                   </p>
                 </div>
               </div>
               <div class="card-footer-d">
                 <div class="socials-footer d-flex justify-content-center">
                   <ul class="list-inline">
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-facebook" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-twitter" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-instagram" aria-hidden="true"></i>
                       </a>
                     </li>
                     <li class="list-inline-item">
                       <a href="#" class="link-one">
                         <i class="bi bi-linkedin" aria-hidden="true"></i>
                       </a>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-12">
           <nav class="pagination-a">
             <ul class="pagination justify-content-end">
               <li class="page-item disabled">
                 <a class="page-link" href="#" tabindex="-1">
                   <span class="bi bi-chevron-left"></span>
                 </a>
               </li>
               <li class="page-item">
                 <a class="page-link" href="#">1</a>
               </li>
               <li class="page-item active">
                 <a class="page-link" href="#">2</a>
               </li>
               <li class="page-item">
                 <a class="page-link" href="#">3</a>
               </li>
               <li class="page-item next">
                 <a class="page-link" href="#">
                   <span class="bi bi-chevron-right"></span>
                 </a>
               </li>
             </ul>
           </nav>
         </div>
       </div>
     </div>
   </section><!-- End Agents Grid-->

 </main><!-- End #main -->

@endsection
