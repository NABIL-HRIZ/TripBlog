
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
       
            
           <div class="p-4 ml-4">
            <h1 style="font-size: 40px;font-weight:bold;letter-spacing:2px;color:green">All Posts</h1>

            @if (session()->has('success'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss='alert' aria-hidden="true">X</button>
                {{session()->get('success')}}

            </div>
                
            @endif

            <div class="row row-cols-1 row-cols-md-2 ">
             @foreach ($posts as $post)     
                <div class="col mt-4">
                  <div class="card" style="background-color: rgba(0,0,0,0.05)">
                    <img src="{{'image/'.$post->image}}" class="img-fluid rounded-start" alt="..." style="width:500px;height:200px">
                    <div class="card-body">
                      <h3 class="card-title">Posted By  : {{$post->name}}</h3>
                      <h4 class="card-title">Title : {{$post->title}}</h4>
                      <p class="card-text">Description : {{$post->description}}</p>
                      <h5 class="card-text" style="color: blue">Status : {{$post->status}}</h5>
                      <h5 class="card-text" style="color: green">UserType : {{$post->userType}}</h5>

                      <div style="display: flex;align-items:center;gap:10px;margin-left:180px">
                        <a  href="{{url('update_post',$post->id)}}" class="btn btn-primary mt-2" >Update</a>
                        <a onclick="confirmation(event)" href="{{url('delete_post',$post->id)}}" class="btn btn-danger mt-2">Delete</a>

                      </div>

                      <div style="display: flex;align-items:center;gap:10px">
                        <p>Status_Action : </p>
                        <a  href="{{url('accept_post',$post->id)}}" class="btn btn-success mt-2">Accept</a>
                        <a href="{{url('reject_post',$post->id)}}" class="btn btn-danger mt-2">Reject</a>

                      </div>
                    </div>
                  </div>
                </div>
             @endforeach
              </div>           
            </div>            
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