@extends('layouts.master')
@section('style')


<!-- Datetimepicker CSS -->

        <style>
            .menu_css{
                color: white
            }
            .header_css
            {
                    
                    background: #168B8F;
            }
            .header2_css
            {
                  
                    background: #168B8F;
            }
            #navTitle
            {
                font: normal normal normal 16px/25px Poppins;
                letter-spacing: 0px;
                color: #FFFFFF;
                opacity: 1;
            }

           
  
</style>
           
      
   
       

@endsection


@section('header')  

 
  
   <!-- Header Area Start Here -->
   <header id="header_2">

    <div class="header-menu-area header-menu-layout2 header2_css">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center">
                
                <div class="col-md-7 possition-static">
                    <div class="header-action-items-layout2">
                        <h3 class="titlePortfolio"><b>QA Engineer PORTFOLIO</b></h3>
                    </div>
                </div>
                <div class="col-md-5 possition-static">
                    <div class="template-main-menu">
                        <nav id="dropdown">
                            <ul>
                                <li>
                                    <a href="#sectionHome" id="navTitle">Home</a>
                                </li>
                                <li>
                                    <a href="#sectionSkillsDetails" id="navTitle">Skills</a>
                                </li> 
                                <li>
                                    <a href="#sectionExperienceDetails" id="navTitle">Experience</a>
                                </li>                                        
                                <li>
                                    <a href="#sectionProjectDetails" id="navTitle">Projects</a>
                                </li> 
                                <li>
                                    <a href="#sectionContactDetails" id="navTitle">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>                                    
   

</header>

<!-- Header Area End Here -->

@endsection