<div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="#chooseUs">Why Choose Us</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="#TalkUs">Talk Us</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="/register">Register</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="#index">Home</a></li>
                     <li class="link"><a href="#about">About_Us</a></li>
                     <li  class="link"><a href="#blog">Blogs</a></li>
                     <li  class="link"><a href="#talkUs">Talk_Us</a></li>



                     @if (Route::has('login'))
                     @auth
                     <li  class="link" ><a href="{{url('post_from_user')}}">Add_Post </a></li>
                     <li  class="link"><a href="{{url('my_posts')}}">My_Posts </a></li>

                         
                      <x-app-layout>
                      </x-app-layout>
 
                         
                     @else
                     <li><a href="{{url('login')}}">Login</a></li>
                     <li><a href="{{url('register')}}">Register</a></li>
                     @endauth
                     @endif
                    
                  </ul>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1 class="banner_taital">Trip Blog</h1>
                        <p class="banner_text">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                           "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."
                           </p>
                     </div>
                  </div>
                  
                 
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>