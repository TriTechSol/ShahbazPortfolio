<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#iconSocial
{
    color: white;
                        font-size: xx-large;
                        text-align: center;
                        width: 50%;
                        vertical-align: middle;
                        height: 100%;
                        margin-top: 0%;
                        
}
</style>
<section class="about-wrap-layout2" id="sectionEducationalDetails" > 
    <div class="container">
        <div class="sectionEducationalDetails ">
            <div class="row col-lg-12" style="padding: 20px">
            <div class="col-lg-4">
                <div class="about-box-layout3">
                    <img src="{{asset('img/profilePic.jpg')}}" style="width: 383px;
                    height: 500px;
                    /* UI Properties */
                    background: #828282 0% 0% no-repeat padding-box;
                    mix-blend-mode: normal;
                    opacity: 1;border-radius:25px">
                </div>
                <div class="row" style="text-align: center;width:100%;justify-content: center;">
                    <div style="border-radius: 50%;background:#168B8F;width:50px;height:50px;margin-left:10px">
                        <object data="{{asset('icons/twitter.svg')}}" id="iconSocial"> </object>
                    </div>
                    <div style="border-radius: 50%;background:#168B8F;width:50px;height:50px;margin-left:10px">
                        <object data="{{asset('icons/lin.svg')}}" id="iconSocial"> </object>
                    </div>
                    <div style="border-radius: 50%;background:#168B8F;width:50px;height:50px;margin-left:10px">
                        <object data="{{asset('icons/fb.svg')}}" id="iconSocial"> </object>
                    </div>
                    <div style="border-radius: 50%;background:#168B8F;width:50px;height:50px;margin-left:10px">
                        <object data="{{asset('icons/gmail.svg')}}" id="iconSocial"> </object>
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-box-layout4">
                            <div class="media">
                                
                                <div class="media-body">
                                <h3 class="item-title" style="font: normal normal normal 30px/46px Poppins;
                                letter-spacing: 0px;
                                color: #000000;
                                opacity: 1;">Shahbaz Hussain</h3>
                                <p style="font: normal normal normal 18px/27px Poppins;
                                letter-spacing: 0px;
                                color: #7D7A7A;
                                opacity: 1;;margin-top:-25px">Quality Assurance Engineer,</p>
                        
                                    <p style="font: normal normal normal 25px/33px Poppins;letter-spacing: 0px;
                                    color: #8B8B8B;
                                    opacity: 1;">Concentrate on creating thorough and organized test strategies, managing local Docker & Kubernetes environments, and developing and running automation scripts with Cypress End-to-End Testing Framework. Analyzing metrics and logs with structured quality assurance strategies, continuous improvement projects, and identifying flaws in test products and offering solutions</p>
                               <br>
                               <h3 class="item-title" style="font: normal normal normal 30px/46px Poppins;
                                letter-spacing: 0px;
                                color: #000000;
                                opacity: 1;">Education</h3>
                                <div class="col-lg-12">

                                    @foreach ( $educational_details as $edu_detail_row )
                                        <div class="row">
                                            <div class="col-lg-1 col-2" >
                                                <i class="fa fa-graduation-cap" style="color: #168B8F;font-size: 3.5rem"></i>
                                            </div>
                                            <div class="col-lg-11 col-10">
                                               <p style="font-size:2.25rem ;font-family:Poppins;
                                                letter-spacing: 0px;
                                                color: #2E2E2E;">{{$edu_detail_row['title']}} </p>
                                                <p style="font: normal normal normal 15px/23px Poppins;
                                                letter-spacing: 0px;
                                                color: #707070;;margin-top:-15px">{{$edu_detail_row['institution']}}</p>

                                            </div>

                                        </div>

                                    @endforeach

                                    
                                </div>

                                <br>
                               <h3 class="item-title" style="font: normal normal normal 30px/46px Poppins;
                                letter-spacing: 0px;
                                color: #000000;
                                opacity: 1;">Achievements</h3>
                                <div class="col-lg-12">

                                    @foreach ( $social_details as $social_detail_row )
                                        <div class="row">
                                            <div class="col-lg-1 col-2" >
                                                <i class="fa fa-graduation-cap" style="color: #168B8F;font-size: 3.5rem"></i>
                                                {{-- <img src="{{$edu_detail_row['icon']}}"  width="40px" height="40px"> --}}
                                            </div>
                                            <div class="col-lg-11 col-10">
                                                <p style="font-size:2.25rem ;font-family:Poppins;
                                                letter-spacing: 0px;
                                                color: #2E2E2E;">{{$social_detail_row['title']}}({{$social_detail_row['date']}} ) </p>
                                                <p style="font: normal normal normal 15px/23px Poppins;
                                                color: #707070;margin-top:-15px">{{$social_detail_row['description']}}</p>

                                            </div>

                                        </div>

                                    @endforeach

                                    
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
    </div>
</section>