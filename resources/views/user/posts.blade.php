<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Blog Posts   </h1>
       <p class="services_text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, autem.</p>
       <div class="services_section_2"> 
          <div class="row">
            @foreach ($posts as $post)
                
             <div class="col-md-4 mt-4">
                <div><img src="{{'image/'.$post->image}}" style="width: 300px;height:300px"></div>
                <div class="mt-3"><h3 style="font-size: 20px">Posted By :{{$post->name}} </h3></div>
                <div><h4 style="font-size:18px">Title : {{$post->title}}</h4></div>
                <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Read More</a></div>
             </div>
            @endforeach

          </div>
        

       </div>
    </div>
 </div>