@extends('layouts.header')
@section('content')

<!-- About Area Start Here -->
<section class="slider-area slider-layout2 bg-light-primary100 slider-top-margin2" id="sectionHome" style="background: #E9E9E9 0% 0% no-repeat padding-box;">
    <div class="container" style="margin-top:50px">
       
            <div class="col-lg-10">
                <div class="about-box-layout3">
                    <h4 style="font: normal normal normal 23px/38px Poppins">
                        Hi, my name is <b>Shahbaz Hussain</b>, and I am a <b>Quality Assurance Engineer</b>.
                    </h4>
                    <p style="font: normal normal normal 18px/27px Poppins">
                        Developing safe, effective test methodologies and making recommendations for fixes to discovered quality issues.
                    </p>
                </div>
            </div>
                <div class="col-lg-4 row">
                    <button class="btnKnowMore btn">
                        <a href="#sectionEducationalDetails" class="text-white">Know More</a>
                    </button>
                    <button class="btnKnowMore btn">
                        <a href="#sectionContactDetails" class="text-white">Contact Me</a>
                    </button>
                    
                 </div>
            
         
           
    </div>
</section>
@include('sections.educationalDetails');
@include('sections.skillDetails');
@include('sections.experienceDetails');
@include('sections.projectsDetails');
@include('sections.contactDetails');
@endsection