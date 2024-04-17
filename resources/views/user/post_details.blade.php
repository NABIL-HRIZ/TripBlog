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
         
    <!--posts_details-->

        <div class=" mt-4 d-flex justify-content-center">
            <div class="col-md-4">
                <div><img src="{{'image/'.$post->image}}" style="width:400px;height:200px"></div>
                
                <div class="mt-3"><h3>Posted By :<span style="color: blue">{{$post->name}}</span> </h3></div>
                <div><h4>Title : <span style="color:green">{{$post->title}}</span></h4></div>
                <div><p>Description: {{$post->description}}</h4></div>
        
                <div class="btn_main"><a href="{{url('/my_posts')}}">Back</a></div>
             </div>
        </div>

    
      
    <!--end   posts_details-->
    
      
      

      
    
      <!-- Javascript files-->

      @include('user.script')
        
   </body>
</html>