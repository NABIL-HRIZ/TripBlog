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
   
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>



   <body>

       
    <div class="services_section layout_padding">
        <div class="container">
           <h1 class="services_taital">My Posts   </h1>
           <div class="services_section_2"> 
              <div class="row">
               
                    @foreach ($posts as $post)
                        
                    <div class="col-md-4 mt-4">
                        <div><img src="{{'image/'.$post->image}}" style="width: 300px;height:300px"></div>
                        <div class="mt-3"><h3 style="font-size: 20px">Posted By :{{$post->name}} </h3></div>
                        <div><h4 style="font-size:18px">Title : {{$post->title}}</h4></div>
                        <div class="d-flex justify-content-space-between" >
                            <a href="{{url('post_details',$post->id)}}" class="btn btn-success">Read More</a>
                            <a href="{{url('update_post_user',$post->id)}}" class="btn btn-primary">Update </a>
                            <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                        
                        </div>
                     </div>
                    @endforeach
               
    
              </div>
           </div>

           
             <a href="{{url('/')}}" class="btn btn-secondary" style="width:30%;margin-top:30px">Back</a>
          
        </div>
     </div>

    

      <!-- footer section start -->

      @include('user.footer')
      
      <!--footer section end -->
    
      <!-- Javascript files-->

      @include('user.script')

      <script type="text/javascript">
     function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect=ev.currentTarget.getAttribute('href');

        swal({
            title:'Sure Wanna Delete it ? ',
            text:"You Can't see it Again ",
            icon:'warning',
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
        
   </body>
</html>