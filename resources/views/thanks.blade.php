@extends('layouts.app')
@section('meta_title','')
@section('meta_keywords','')
@section('meta_description','')
@section('meta_image')
content="{{ Request::root() }}/images/logo-2.png"
@endsection
@section('content')


<style>
.contact-wrap.w-100.p-md-5.p-4 img {
    margin-top: 11%;
    margin-left: 36%;
}
@media only screen and (max-width: 768px) {
.contact-wrap.w-100.p-md-5.p-4 img {
    margin-top: 54%;
    margin-left: 3%;
}
    
    
}
</style>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                     

                        <div class="col-lg-12 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                               <img src="/public/assets/images/thanks.jpg" style="width:272px; ">
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4" style="margin-left: 391px;
    font-size: 25px;">
                                    Your message was sent
                                </div>
                              
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection