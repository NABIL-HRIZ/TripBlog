<div class="container">
    <h1  class="choose_taital" >Talk With Us ? </h1>
    <div class="input_btn_main" >
        <form action="{{url('talkUs')}}" method="POST">
           @csrf
           <input type="email" class="mail_text ml-4" placeholder="Enter your email"  name="email" >
           <button type='submit' class="btn btn-primary mt-3" style="margin-left:200px">Talk Us ? </button>
     
        </form>
          
      </div>


</div>
 