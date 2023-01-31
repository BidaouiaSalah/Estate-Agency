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
      @include('sweetalert::alert')

      <!-- Sidebar -->
      @include('admin.includes.sidebare')
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper"
         class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">

            <!-- Topbar -->
            @include('admin.includes.nav')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

               <!-- Content Row -->
               @yield('content')

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
