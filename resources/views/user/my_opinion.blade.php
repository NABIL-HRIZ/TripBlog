<!DOCTYPE html>
<html lang="en">
   <head>

    <base href="/public">
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>A World</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   
    </head>



   <body>

    @include('sweetalert::alert')
       
    <div class="container mt-8">
        <div class="p-4">
    
            
                <h1 style="font-size:40px;font-weight:bold:letter-spacing:2px;color:green" class="mt-4">Add Opinion </h1>

    
            @if (session()->has('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss='alert' aria-hidden="true">X</button>
              {{session()->get('success')}}
    
            </div>
                
            @endif
    
            <form class="row g-3 mt-4" action="{{url('add_opinion')}}" method="POST" enctype="multipart/form-data">
                
                @csrf
                
                <div class="col-12 mt-4 ">
                  <label for="inputName" class="form-label">Full Name </label>
                  <input type="text" class="form-control" id="inputName" name="name">
                </div>
                <div class="col-12 mt-4">
                  <label for="inputStatus" class="form-label">Status</label>
                  <input type="text" class="form-control" id="inputStatus" name="status">
                </div>

                <div class="col-12 mt-4">
                    <label for="inputComment" class="form-label">Comment</label>
                    <input type="text" class="form-control" id="inputComment" name="comment">
                  </div>
               
                <div class="input-group mt-4 ml-2">
                    <input type="file" class="form-control" id="inputGroupFile02" name="image">
                    
                  </div>
    
                <div class="col-12 mt-4">
                  <button type="submit" class="btn btn-success" style="color: #000">Add</button>

                </div>
              </form>
              <div class="col-12 mt-4">
                <a href="{{url('/')}}" class="btn btn-primary" style="color: #000;width:500px" >Back</a>
              </div>

    
         </div>
    </div>


     


    
     
    
     


      <!-- footer section start -->

      @include('user.footer')
      
      <!--footer section end -->
    
      <!-- Javascript files-->

      @include('user.script')

     
        
   </body>
</html>