@extends('layouts.app')
@section('meta_title','contactus')
@section('meta_keywords','contactus')
@section('meta_description','contactus')
@section('content') 
<style>

    .seb-d button {
    color: #2e2828;
    width: 17%!important;
}
a.rel:hover {
    background: green;
}
a.rel {
    background: red;
    padding: 4px;
}

.page-header__inner h2 {
    
    width: 17%;
}


</style>
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header-shape-1"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Contact us</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Feel free to get in touch with experts</h2>
                            </div>
                            <div class="contact-page__call-email">
                                <div class="contact-page__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-page__call-email-content">
                                    <h4>
                                        <a href="tel:+91-8699947111" class="contact-page__call-number">+91-8699947111</a>
                                       
                                    </h4>
                                </div>
                            </div>
                            
                            <div class="contact-page__call-email dfd">
                                <div class="contact-page__call-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-page__call-email-content">
                                    <h4>
                                         
                                        <a href="mailto:adelinebio2020@gmail.com"
                                            class="contact-page__email">adelinebio2020@gmail.com</a>
                                    </h4>
                                </div>
                            </div>
                            
                            
                             <div class="contact-page__call-email dfd">
                                <div class="contact-page__call-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-page__call-email-content">
                                    <h4 Style="color:#031972;">
                                       
                                        S.C.O 70, First Floor Sector 12A, Panchkula Haryana
                                    </h4>
                                </div>
                            </div>
                            
                            
                            
                          
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="contact-page__form">
                                <form id="frm2" action="/enquiry/store" method="POST">
                                       @csrf
                              <div class="row">
                                 <div class="col-md-6 col-sm-12">
                                    <div class="contact-form-section">
                                       <input type="text" required="true" class="form-control" placeholder="Name*" id="name" name="name">
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-12">
                                    <div class="contact-form-section">
                                       <input type="email"  required="true" class="form-control" placeholder="Email*" id="email" name="email">
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-12">
                                    <div class="contact-form-section">
                                       <input type="text"  required="true"class="form-control" placeholder="Phone*" id="phone"  name="phone">
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-12">
                                    <div class="contact-form-section">
                                       <input type="text" required="true" class="form-control" placeholder="City*" id="city" name="city">
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-sm-12">
                                    <div class="contact-form-section">
                                       <textarea class="form-control" id="message"  name="message"  rows="4" required="true" placeholder="Message*" style="height: 100px;"></textarea>
                                    </div>
                                 </div>
                                 
                                 
                                  <!---- *tut* to enter --->
                                 <div class="col-md-12 col-sm-12">
                                    <div class="contact-form-section">
                                       <p><br />
                                       <?php $toshow =  rand(1000, 9999); ?>

<img src="captcharender.php?rand=<?php echo $toshow; ?>" id='captcha_image'><input type="text" maxlength="5" class="form-control" placeholder="Enter captcha*" id="captcha_entry" name="captcha_entry"  required="true" >
</p>
<p style="color:#fff;">Can't read the image?
<a class="rel" style="color:#fff;" href='javascript: refreshCaptcha();'>click here</a>
to refresh</p>
                                    </div>
                                 </div>
                                 <!---- to enter --->
                                 <div class="col-md-12 col-sm-12 pb-4">
                                      <!--- *tut* hidden variable --->
                                     <input type="hidden" name="cross_check" id="cross_check"   value="{{$toshow}}">
                                     <!--- hidden variable --->
                                 
                                 <!--- *tut* id of button to give  --->
                                 <div class="col-md-12 col-sm-12 pb-4">
                                     <div class="seb-d">
                                   <button type="submit" id="btnsb1" >
                                                    Send
                                                </button>
                                                </div>
                                 </div>
                              </div>
                           </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.970265985261!2d76.8292924755788!3d30.691112674604383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f934d9d240445%3A0xf32fab7f2645a630!2sAdeline%20Bio%20%7C%20Third%20Party%20Manufacturer%20%7C%201000%2B%20Formulations%20%7C%20Pharma%20Manufacturer%20%7C%20Own%20Manufacturing%20Unit!5e0!3m2!1sen!2sin!4v1698727560275!5m2!1sen!2sin" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!--Contact Page End-->
        
        
        
        <script>


/// *tut*  these scripts to be added
//Refresh Captcha
function refreshCaptcha(){
    var img = document.images['captcha_image'];
    var randstr = Math.floor(Math.random()*10000);

    img.src = img.src.substring(
		0,img.src.lastIndexOf("?")
		)+"?rand="+randstr;

		document.getElementById("cross_check").value = randstr;

}

$("#btnsb1").button().click(function(){
        if(!$('#frm2')[0].checkValidity()) {

        event.preventDefault();
        } else {
            if($('#cross_check').val() != $('#captcha_entry').val()) {
                alert("Please enter a valid captcha.");
                event.preventDefault();
            }

        }

});






</script>
        
        
        
        
        
@endsection