
<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
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

    @include('sweetalert::alert')

    
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     
      @include('admin.navbar')


     

      <div class="container-fluid page-body-wrapper">


        <!--  sidebar  -->
      
        @include('admin.sidebar')

       
        <!-- partial -->
      
        <div class="p-4">
            <h1 style="font-size: 40px;font-weight:bold;letter-spacing:2px;color:green">Send An Email </h1>

            <form class="row g-3 mt-4" action="{{url('sendEmail',$data->id)}}" method="POST">
                @csrf
                <div class="col-md-6">
                  <label for="inputGreeting" class="form-label">Greeting</label>
                  <input type="text" class="form-control" id="inputGreeting" name="greeting">
                </div>

                <div class="col-md-6">
                  <label for="inputGreeting" class="form-label">Body </label>
                  <input type="text" class="form-control" id="inputGreeting" name="body">
                </div>

                <div class="col-12 mt-3">
                  <label for="inputActionText" class="form-label">Action Text</label>
                  <input type="text" class="form-control" id="inputActionText" name="ActionText">
                </div>
                <div class="col-12 mt-3">
                    <label for="inputActionUrl" class="form-label">Action Url</label>
                    <input type="text" class="form-control" id="inputActionUrl" name="ActionUrl">
                  </div>
                <div class="col-md-6 mt-3">
                  <label for="inputEndPart" class="form-label">End Part</label>
                  <input type="text" class="form-control" id="inputEndPart" name="endPart">
                </div>
                
                <div class="col-12 mt-3">
                  <button type="submit" class="btn btn-success" style="color:#000">Send</button>
                </div>
              </form>

        </div>
        
        

        
          
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