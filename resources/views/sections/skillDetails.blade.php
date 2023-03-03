  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/font-awesome.min.css'>       

 <section class="sectionSkillsDetails" id="sectionSkillsDetails" >
          
    <div class="container">
            <div class="col-lg-12" >
                <h3 class="item-title" style="font: normal normal normal 40px/60px Poppins;
                letter-spacing: 0px;
                color: #227875;text-align:center">
                <svg xmlns="http:
                //www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/> </svg>
                Skills                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/> </svg>

                 </h3>
                <p style="font: normal normal normal 20px/30px Poppins;
                letter-spacing: 0px;
                color: #B4B4B4;margin-top:-25px;text-align:center">MAIN TECH STACK</p>
        
                   
              
          
            </div>

           
            <div class="col-lg-12 row">
           
             @foreach ( $skill_details as $skill_detail_row)
             
                    <div class="col-lg-3 col-lg-3  col-6">
                        <div class="skillDiv">
                               
                                <object data="{{asset($skill_detail_row['icon'])}}"> </object>
                              
                                   <p style="
                                   font: normal normal normal 22px/33px Poppins;
                                   letter-spacing: 0px;
                                   color: #227875;
                                   opacity: 1;">{{$skill_detail_row['title']}} </p>

                                    <div class="w3-light-grey w3-round-xlarge" style="width:60%;display: inline-block;
                                    margin: 0 auto;">
                                        <div class="w3-container w3-blue w3-round-xlarge" style="width:{{$skill_detail_row['percentage']}};height:10px"></div>
                                    </div>
                        </div>
                    </div>
       
                @endforeach
            </div>
           
       
    </div>
   


           
</section>
