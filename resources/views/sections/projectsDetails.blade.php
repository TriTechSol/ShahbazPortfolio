<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('css/main.css')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <!-- Elements CSS -->
  <link rel="stylesheet" href="{{ asset('css/elements.css')}}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('styleCSS/style.css')}}">


  <style>
  .cards-wrapper {
  display: flex;
  justify-content: center;
}
.card img {
  max-width: 100%;
  max-height: 100%;
}
.card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  border-radius: 0;
}
.carousel-inner {
  padding: 1em;
}
.carousel-control-prev,
.carousel-control-next {
  background-color: #168B8F;
  width: 5vh;
  height: 5vh;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}
@media (min-width: 768px) {
  .card img {
    height: 11em;
  }
}

  </style>
  <section class="about-wrap-layout2" id="sectionProjectDetails">
          
    <div class="container" >
        <div class="sectionProjectDetails">
        
        {{-- <div class="box-success-added-cart" id="boxSuccessAddedCart" style="display: none">
            <span id="success-added-cart" style="font-size: 25px"></span>
        </div> --}}
    
            
            <div class="col-lg-12">
                <h3 class="item-title" style="font: normal normal normal 40px/60px Poppins;
                letter-spacing: 0px;
                color: #227875;text-align:center">                
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/> </svg> Projects <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/> </svg></h3>
                <p style="font: normal normal normal 20px/30px Poppins;
                letter-spacing: 0px;
                color: #B4B4B4;margin-top:-25px;text-align:center">All things are Difficult Before they are Easy</p>
        
                   
              
          
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: 100px;padding:0 30px 0 30px">
                <div class="carousel-inner">
                @php
                    $numOfCols = 3;
                    $rowCount = 0;
                    $bootstrapColWidth = 12 / $numOfCols;
                @endphp 
               
                 <div class="carousel-item active">
                    <div class="cards-wrapper">
                        @foreach ( $project_details as $project_detail_row)
                            <div class="projectDiv">
                                <div  style="width: 100%;
                                height: 200px;
                                background: transparent linear-gradient(180deg, #FFFFFF14 0%, #FCFCFC1A 50%, #808080 100%) 0% 0% no-repeat padding-box;
                                mix-blend-mode: normal;
                                opacity: 1;">
                                <img src="{{asset($project_detail_row['icon'])}}" alt="..." ></div>

                            
                            <div class="card-body" style="min-height: 450px">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h5 class="card-title" style="font: normal normal normal 30px/46px Poppins;
                                        letter-spacing: 0px;
                                        color: #227875;
                                        opacity: 1;">{{$project_detail_row['title']}}</h5>
                                        <div class="bs-stepper-line"></div>
                                        <p style="text-align: left;
                                        font: normal normal normal 15px/23px Poppins;
                                        letter-spacing: 0px;
                                        color: #227875;
                                        opacity: 1;">{{$project_detail_row['subTitle']}}</p>
                                    </div>
                                    <div class="col-lg-2" >
                                        <i class="fa fa-share-alt" style="font-size: 30px;color:#227875;float: right;"></i>
                                    </div>
                                </div>
                                <p class="card-text" style="text-align: center;
                                font: normal normal normal 20px/30px Poppins;
                                letter-spacing: 0.01px;
                                color: #000000;
                                opacity: 1;">{{$project_detail_row['description']}}</p>
                                
                            </div>
                            </div>
                            @php
                                $rowCount++;
                                if($rowCount % $numOfCols == 0) echo '</div></div><div class="carousel-item"><div class="cards-wrapper">';
                            @endphp
                         @endforeach
                 
                  </div>
                  </div>
                 
                  
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 20%"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
          
           
        </div>
    </div>
   


           
</section>