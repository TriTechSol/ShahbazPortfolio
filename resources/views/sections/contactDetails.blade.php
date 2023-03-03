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

<style>
    .inputField
    {
        background: #FFFFFF 0% 0% no-repeat padding-box;
                                                box-shadow: 0px 3px 6px #00000080;
                                                mix-blend-mode: normal;
                                                opacity: 1;border-radius:20px
    }

    .liText
    {
        font: normal normal normal 20px/30px Poppins;
                                letter-spacing: 0px;
                                color: #0C6F72;
                                opacity: 1;
    }
    .btnSent
    {
        background: #0C6F72 0% 0% no-repeat padding-box;
box-shadow: 0px 3px 5px #0000007A;
mix-blend-mode: normal;
opacity: 1;
border-radius: 25px;
width: 116px;
height: 41px;
font: normal normal normal 20px/30px Poppins;
letter-spacing: 0px;
color: #FFFFFF;
opacity: 1;
    }
    </style>


    <section class="contact-wrap-layout" id="sectionContactDetails">
        <div class="container">
            <div class="col-lg-12">
                <h3 class="item-title" style="font: normal normal normal 40px/60px Poppins;
                letter-spacing: 0px;
                color: #227875;text-align:center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/> </svg> Contact <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/> </svg></h3>
                <p style="font: normal normal normal 20px/30px Poppins;
                letter-spacing: 0px;
                color: #B4B4B4;margin-top:-25px;text-align:center">Connect with Me</p>
            </div> 
            <div class="contact-box-layout1 row">
                <div class="col-lg-8 col-12">
                    <div class="contact-box-layout1">
                       
                        <form name="contact-form" class="contact-form-box" id="contact-form" method ="POST" enctype="multipart/form-data"  action="{{url('/contact/submit')}}" >
                            
                            @csrf
                            <div class="form-response"></div>
                                    <div class="col-12 form-group">
                                        <input type="text" placeholder="Name *" class="form-control inputField" name="inputName"
                                                required >
                                        <div class="help-block with-errors" style="color: darkred;font-size:12px"></div>
                                    </div>
                                    
                                    <div class="col-12 form-group">
                                        <input type="email" placeholder="E-mail *" class="form-control inputField" name="inputEmail"
                                            data-error="E-mail field is required" required>
                                            <div class="help-block with-errors" style="color: darkred;font-size:12px"></div>
                                    </div>
                                    
                                    <div class="col-12 form-group">
                                        <textarea placeholder="Message*" class="textarea form-control inputField" name="inputMessage"
                                            id="form-message" rows="7" cols="20" data-error="Message field is required"
                                            required></textarea>
                                            <div class="help-block with-errors" style="color: darkred;font-size:12px"></div>
                                    </div>
                                    <div class="col-12 form-group margin-b-none">
                                        <button type="submit" class="btn btnSent" onclick="contactUs()">Sent</button>
                                    </div>
                                
                                
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="contact-box-layout1">
                      
                        <div class="contact-info">
                            <ul>
                                <li ><i class="fa fa-envelope"></i><span class="liText">mr.shahbazpakistan@gmail.com</span></li>
                                <li><i class="fa fa-skype"></i><span class="liText">live:.cid.a7bc5e39fc494158</span></li>
                                <li><i class="fa fa-map-marker"></i><span class="liText">Islamabad, Pakistan</span></li>
                                <li><i class="fa fa-phone"></i><span class="liText">+923105054641</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('modal.success-model-contact')
    </section>
            {{-- <div class="card card-default">
                <div class="card-body"> 
                    <div class="row">
                
                    
                    
                            <div class="col-lg-8">
                                        <input type="text" style="background: #FFFFFF 0% 0% no-repeat padding-box;
                                        box-shadow: 0px 3px 6px #00000080;
                                        mix-blend-mode: normal;
                                        opacity: 1;border-radius:25px"/>
                                        <input type="text" style="background: #FFFFFF 0% 0% no-repeat padding-box;
                                        box-shadow: 0px 3px 6px #00000080;
                                        mix-blend-mode: normal;
                                        opacity: 1;border-radius:25px"/>
                                        <input type="text" style="background: #FFFFFF 0% 0% no-repeat padding-box;
                                        box-shadow: 0px 3px 6px #00000080;
                                        mix-blend-mode: normal;
                                        opacity: 1;border-radius:25px"/>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <i class="fa fa-envelope  " style="color: #168B8F;font-size: 2.5rem"></i>
                                <p style="
                                font-size: 2.0rem;font-family: Poppins;letter-spacing: 0px;
                                    color: #0C6F72;
                                    opacity: 1;width:80%">mr.shahbazpakistan@gmail.com</p>
                                </div>
                                

                            
                    </div>
                </div>
                
                    </div>
        </div>
            --}}
       
    {{-- </div>
   


           
</section> --}}
