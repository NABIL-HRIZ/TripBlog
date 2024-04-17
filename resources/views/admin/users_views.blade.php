
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

            <h1 style="font-size: 40px;letter-spacing:2px;font-weight:bold;color:green">All Users </h1>

            <table class="table mt-4" border="1" style="width:100%">
                <thead class="table table-success">
                    <tr>
                        <th style="font-size: 20px;font-weight:bold">Name</th>
                        <th style="font-size: 20px;font-weight:bold">Email</th>
                        <th style="font-size: 20px;font-weight:bold">User-type</th>
                        <th style="font-size: 20px;font-weight:bold;text-align:center">Action</th>

                    </tr>
                </thead>
                <tbody class="table table-secondary">
                    @foreach ($users as $user)
                    <tr>
                        <td style="font-size:18px;font-weight:600">{{$user->name}}</td>
                        <td style="font-size:18px;font-weight:600">{{$user->email}}</td>
                        <td style="font-size:18px;font-weight:600">{{$user->userType}}</td>
                         <td>
                            <a href='{{url('delete_user',$user->id)}}' class="btn btn-danger" style="font-size:18px;font-weight:600">Delete</a>                        
                        </td>

                    </tr>
                        
                    @endforeach
                </tbody>

            </table>

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