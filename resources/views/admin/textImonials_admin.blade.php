
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
        <h1 style="font-size: 40px;font-weight:bold;letter-spacing:2px;color:green">All Opinions</h1>

        <div class="row row-cols-1 row-cols-md-2 g-4 pl-6 mt-4">
            @foreach ( $opinions as $opinion)
                
            <div class="col">
              <div class="card">
                <img src="{{'image/'.$opinion->image}}" class="card-img-top" alt="..." style="width: 200px">
                <div class="card-body">
                  <h5 class="card-title">{{$opinion->name}}</h5>
                  <h4 class="card-title">{{$opinion->status}}</h4>
                  <p class="card-text">{{$opinion->comment}}</p>
                  <div>
                    <a href="{{url('delete_opinion',$opinion->id)}}" onclick="confirmation(event)" class="btn btn-danger mt-4">Delete</a>
                  </div>
                </div>
              </div>
            </div>

            @endforeach

            
          </div>

       </div>
            
          

        <!--end partial -->
      </div>
       </div>

       <!--Sweet Alert  -->


       <script>

        function confirmation(ev){
            ev.preventDefault();
            var urlToRedirect=ev.currentTarget.getAttribute('href');

            swal({
                title:'Wanna Delete This Opinion ?',
                icons:'warning',
                buttons:true,
                dangerMode:true,
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