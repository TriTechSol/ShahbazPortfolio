<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="{{ asset('css/bs-stepper.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('css/main.css')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <!-- Elements CSS -->
  <link rel="stylesheet" href="{{ asset('css/elements.css')}}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('styleCSS/style.css')}}">


 <section class="about-wrap-layout2" id="sectionExperienceDetails" style="margin-top: 50px">
          
    <div class="container">
        
      
        <div class="col-lg-12 row">
            <div class="col-lg-5">
                <h3 class="item-title" style="font: normal normal normal 40px/60px Poppins;
                letter-spacing: 0px;
                color: #227875"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/> </svg>
                                Experience                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/> </svg>
                            </h3>
                <p style="font: normal normal normal 20px/30px Poppins;
                letter-spacing: 0px;
                color: #B4B4B4;margin-top:-10px">Previous Experience</p>
        
                   
              
          
            </div>

           
            <div class="col-lg-7">
                <!-- Vertical Steppers -->
         
                @foreach ( $exp_details as $exp_detail_row)
                  <div id="stepper4" class="bs-stepper vertical linear">
                    
                      <div class="bs-stepper-header" role="tablist">
                        <div class="step active" data-target="#test-vl-1">
                            <button type="button" class="step-trigger" role="tab" id="stepper4trigger1" aria-controls="test-vl-1" aria-selected="true">
                            <span class="bs-stepper-circle"></span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                      
                     </div>
                     <div class="bs-stepper-content" style="width: 100%">
                        <div class="expDiv">
                           
                          
                               <p style="
                               font: normal normal normal 25px/38px Poppins;
                                letter-spacing: 0px;
                                color: #686868;
                                opacity: 1;">{{$exp_detail_row['title']}} </p>

                                <p style="font: normal normal normal 25px/38px Poppins;
                                letter-spacing: 0px;
                                color: #686868;
                                opacity: 1;">{{$exp_detail_row['company']}}</p>
                                
                                <div class="col-lg-12 row">
                                    <div class="col-lg-7">
                                        <p style="font: normal normal normal 17px/26px Poppins;
                                        letter-spacing: 0px;
                                        color: #707070;
                                        opacity: 1;"> {{$exp_detail_row['duration']}}</p>
                                    </div>
                                    <div class="col-lg-5">
                                        <p style="font: normal normal normal 17px/26px Poppins;
                                        letter-spacing: 0px;
                                        color: #707070;
                                        opacity: 1;"> {{$exp_detail_row['location']}}</p>
                                    </div>
                                </div>
                                <p style="font: normal normal normal 17px/26px Poppins;
                                letter-spacing: 0px;
                                color: #000000;
                                opacity: 1;">Tasks</p>
                                <ul style="list-style-type:disc;padding-left:40px">
                                    @foreach ($exp_detail_row['tasks'] as $index=>$content)
                                        <li style="font: normal normal normal 16px/25px Poppins;
                                        letter-spacing: 0px;
                                        color: #000000;
                                        opacity: 1;width:90%">{{$content}}</li>
                                        <br>
                                    @endforeach
                                </ul>
                        </div>
                    </div>
                    <br>
                   
                  </div>
                  @endforeach
        
            
            </div>
           
        </div>
    </div>
   


           
</section>
