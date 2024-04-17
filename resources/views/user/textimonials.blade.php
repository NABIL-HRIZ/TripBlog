
<!--
<div class="client_section layout_padding">
    <div class="container">
       <h1 class="client_taital">Textimonial</h1>
 <a href="{{url('my_opinion')}}" class="btn btn-primary" style="padding:10px;margin-left:340px;width:40%">Do You Wanna Leave  Your Opinion ?  </a>
       
  
    
                
         
          <div class="client_section_2">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
               @foreach($opinions as $key => $opinion)
               <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : ''}}"></li>
               @endforeach
             </ol>
             <div class="carousel-inner">
               @foreach ($opinions as $key => $opinion)
                   
                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">

                   <div class="client_main">

                      <div class="box_left">
                         <p class="lorem_text">{{$opinion->comment}}</p>
                      </div>
                      <div class="box_right">
                         <div class="client_taital_left">
                            <div class="client_img"><img src="{{'image/'.$opinion->image}}" style="border-radius: 10px"></div>
                            <div class="quick_icon"><img src="images/quick-icon.png"></div>
                         </div>
                         <div class="client_taital_right p-2">
                            <h4 class="client_name">{{$opinion->name}}</h4>
                            <p class="customer_text">{{$opinion->status}}</p>
                         </div>
                      </div>

                   </div>

                </div>
               
                @endforeach
             </div>
          </div>

       </div>

      
           
       

    </div>    
 </div>
-->