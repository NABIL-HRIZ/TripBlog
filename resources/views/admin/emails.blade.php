
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

    <!--sweet alert cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

            <h1 style="font-size: 40px;font-weight:bold;color:green;letter-spacing:2px">All Emails</h1>

            <table class="table mt-4" border="1" width="100%">

                <thead class="table-primary">
                    <tr>
                        <th style="font-size: 20px;font-weight:bold">Email</th>
                        <th style="font-size: 20px;font-weight:bold">Contact</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($emails as $email)
                    <tr>
                        <td style="font-size: 20px;font-weight:bold">{{$email->email}}</td>
                        <td style="font-size: 20px;font-weight:bold"><a href="{{url('emailNotification',$email->id)}}" class="btn btn-success">Send an Email </a></td>

                    </tr>

                        
                    @empty
                    <td colspan="3">No Email </td>
                        
                    @endforelse
                   
                </tbody>

            </table>

         </div>

        <!--end partial -->
      </div>
       </div>

       <!--Sweet Alert  -->

       <script type="text/javascript">
      
      function confirmation (ev){
        ev.preventDefault();
        var urlToRedirect=ev.currentTarget.getAttribute('href');

        swal({
          title:'Are You Sure Wanna Delete This Post ? ',
          text:"You can't see this post Again ",
          icon:"warning",
          buttons:true,
          dangerMode:true
        })
        .then((willCancel)=>{
          if(willCancel){
            window.location.href=urlToRedirect;
          }
        })


        
      }
   
      
      
      
      
      
      </script>

     
      

       
  
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