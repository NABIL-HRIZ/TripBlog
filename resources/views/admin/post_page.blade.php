
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="AdminDashboard/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="AdminDashboard/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="AdminDashboard/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="AdminDashboard/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="AdminDashboard/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="AdminDashboard/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="AdminDashboard/images/favicon.png" />
  </head>

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     
      @include('admin.navbar')


     

      <div class="container-fluid page-body-wrapper">


        <!--  sidebar  -->
      
        @include('admin.sidebar')

       
        <!-- partial -->
         <div class="p-4">

            <h1 style="font-size:40px;font-weight:bold:letter-spacing:2px;color:green" class="mt-4">Add Post </h1>

            @if (session()->has('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss='alert' aria-hidden="true">X</button>
              {{session()->get('success')}}

            </div>
                
            @endif

            <form class="row g-3 mt-4" action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
                
                @csrf
                
                <div class="col-12 mt-4 ">
                  <label for="inputTitle" class="form-label">Post Title </label>
                  <input type="text" class="form-control" id="inputTitle" name="title">
                </div>
                <div class="col-12 mt-4">
                  <label for="inputDescription" class="form-label">Post Description</label>
                  <input type="text" class="form-control" id="inputDescription" name="description">
                </div>
               
                <div class="input-group mt-4 ml-2">
                    <input type="file" class="form-control" id="inputGroupFile02" name="image">
                    
                  </div>

                <div class="col-12 mt-4">
                  <button type="submit" class="btn btn-success" style="color: #000">Add</button>
                </div>
              </form>

         </div>
        

        <!--end partial -->

        
          
      </div>
       </div>
  
    <script src="AdminDashboard/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src=".AdminDashboard/vendors/chart.js/Chart.min.js"></script>
    <script src=".AdminDashboard/vendors/moment/moment.min.js"></script>
    <script src=".AdminDashboard/vendors/daterangepicker/daterangepicker.js"></script>
    <script src=".AdminDashboard/vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="AdminDashboard/js/off-canvas.js"></script>
    <script src="AdminDashboard/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src=".AdminDashboard/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>