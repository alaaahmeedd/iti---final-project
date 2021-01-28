@extends('layouts.parent')
@section ('content')


<style>

  body{
    background-color: #ffffff;
  }

  .section-one{
    background-image: url('../assets/images/p1.jpg');
    height: 500px;
    background-size: cover;
  }
  .cont{
    padding-top: 80px;
  }

  h2{
    color: #303030;
    font-weight: 700;
    font-size: 40px;
    padding: 15px;
  }

  .prag{
    margin: 0 0 10px;
    color: #525859;
    font-size: 16px;
    font-weight: 540;
    line-height: 1.6;
    letter-spacing:0.3px;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Work Sans', sans-serif;
  }

  .bttn{
    
    text-align: center;
    font-size: 22px;
    color: #ffffff;
    font-family: 'Open Sans', sans-serif;
    
  }

  
  
  </style>
  <body>

      <div class="container-fluid"><br>
      <div class="section-one">
              <div class="container">
                <div class="row">
                  <div class="col-lg-offset cont">
                    <h2> For Parents </h2>
                    <h7 class="prag"> Welcome to Kids Academy, the most innovative and engaging <br> program for young learners! <br><br>
                      Nothing can alter the trajectory of a life like a good<br> education. At Kids Academy our mission
                      is to help identify <br> and nurture the talents of your child at the earliest stage, <br> boost their
                        academic abilities and give them a head start in <br> the world.</h7> <br>
                        <button  type="submit" style=" background-color: #ff7a1a;
                          
                          height: 70px;
                          border-radius: 37px;
                          min-width: 270px;
                          max-width: 350px;
                          font-weight: 600;">
                          <a href="magazine" class="bttn"> Visit Our Magazine </a> </button>

      </div>
      </div>
      </div>
      </div>
      </div>

       
      <br>
      <div class="section-twoo">
        <div class="container">
          <div class="row  " style="margin-left:20px;">
          @foreach($parent->children as $child)
            <div class="col-md-6">
              <img src="/assets/images/{{$child->profile_photo_path}}" style="width:170px" >
              <a href="/childprogress/{{$child->id}}">
              <h2 style="color:#312c51; display:inline"> {{$child->name}}</h2></a>
            </div>
            <div class="col-md-6">
              <img src="/assets/images/1.png" style="width:170px;" > 
              <h2 style="color:#312c51; display:inline" >Grade: {{$child->grade}}</h2>
            </div>
             

</div>
@endforeach
</div>
</div>
  
</body>

@endsection

  



