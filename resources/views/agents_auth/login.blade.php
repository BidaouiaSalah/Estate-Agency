<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible"
      content="IE=edge">
   <meta name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description"
      content="">
   <meta name="author"
      content="">

   <title>SB Admin 2 - Dashboard</title>

   <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
   <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
   <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="page-top">

   <!-- Page Wrapper -->
   <div id="wrapper">
      <!-- Content Wrapper -->
      <div id="content-wrapper"
         class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

               <!-- Content Row -->
               <div class="container">

                  <div class="card o-hidden border-0 shadow-lg my-5">
                     <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                           <div class="col-lg-7">
                              <div class="p-5">
                                 <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Welcom Back!') }}
                                    </h1>
                                 </div>
                                 <form class="user"
                                    method="POST"
                                    action="">
                                    @csrf
                                    <div class="form-group row">
                                       <div class="col-md-12">
                                          <input id="email"
                                             type="email"
                                             class="form-control form-control-user @error('email') is-invalid @enderror"
                                             name="email"
                                             value="{{ old('email') }}"
                                             required
                                             autocomplete="email"
                                             autofocus>

                                          @error('email')
                                             <span class="invalid-feedback"
                                                role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                          @enderror
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <div class="col-md">
                                          <input id="password"
                                             type="password"
                                             class="form-control form-control-user @error('password') is-invalid @enderror"
                                             name="password"
                                             required
                                             autocomplete="current-password">
                                          @error('password')
                                             <span class="invalid-feedback"
                                                role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                          @enderror
                                       </div>
                                    </div>
                                    <div class="row mb-3">
                                       <div class="col-md-6">
                                          <div class="form-check">
                                             <input class="form-check-input"
                                                type="checkbox"
                                                name="remember"
                                                id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                             <label class="form-check-label"
                                                for="remember">
                                                {{ __('Remember Me') }}
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit"
                                       class="btn btn-primary btn-user btn-block">
                                       {{ __('Login') }}
                                    </button>
                                 </form>
                                 <hr>
                                 <div class="text-center">
                                    @if (Route::has('password.request'))
                                       <a class="btn btn-link"
                                          href="{{ route('password.request') }}">
                                          {{ __('Forgot Your Password?') }}
                                       </a>
                                    @endif
                                 </div>
                                 <div class="text-center">
                                    <a class="small"
                                       href="{{ route('showRegistrationForm') }}">{{ __('Create an Account!') }}</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>

            </div>
            <!-- /.container-fluid -->

         </div>
         <!-- End of Main Content -->

         <!-- Footer -->
         <footer class="sticky-footer bg-white">
            <div class="container my-auto">
               <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Your Website 2021</span>
               </div>
            </div>
         </footer>
         <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

   </div>
   <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded"
      href="#page-top">
      <i class="fas fa-angle-up"></i>
   </a>

   <!-- Logout Modal-->
   <div class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog"
         role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title"
                  id="exampleModalLabel">Ready to Leave?</h5>
               <button class="close"
                  type="button"
                  data-dismiss="modal"
                  aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current
               session.</div>
            <div class="modal-footer">
               <button class="btn btn-secondary"
                  type="button"
                  data-dismiss="modal">Cancel</button>
               <a class="btn btn-primary"
                  href="login.html">Logout</a>
            </div>
         </div>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js">
   </script>
</body>

</html>
