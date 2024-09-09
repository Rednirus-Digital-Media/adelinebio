@extends('layouts.app')
@section('meta_title',$product->name)
@section('meta_keywords',$product->name)
@section('meta_description',$product->name)

@section('content')

<style>
    .product-image img {
    width: 88%;
}
.row.justify-content-center {
    margin-top: 52px; 
}
.content.lax {
    margin-top: 95px;
}
.content {
    
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
</style>

<section class="page-header">
<div class="page-header-bg" style="background-image: url(assets/images/bread bio)">&nbsp;</div>

<div class="page-header-shape-1"><img alt="" src="assets/images/shapes/page-header-shape-1.png"></div>

<div class="container">
<div class="page-header__inner">
<ul class="thm-breadcrumb list-unstyled">
	<li><a href="/">Home</a></li>
	<li><span>/</span></li>
	<li>{{$product->name}}</li>
</ul>

<h2>{{$product->name}}</h2>
</div>
</div>
</section>



















<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="row">
                 <div class="col-lg-6">
                  <div class="product-image">
  
                     <img src="assets/images/lacs.jpg" width="100px">
                        
                   </div>
                  </div>
                 <div class="col-lg-6">
                   <div class="content lax">
                     <h5>{{$product->packing}}</h5>
                   <h2>{{$product->name}}</h2>
                   <p>{{$product->composition}}</p>
                   </div>
                 </div>
                 <div class="col-lg-12">
                     <div class="des">
                    <?php
                        $replaced = str_replace("title", "p", $product->description);
                  echo html_entity_decode($replaced);
                  ?>
                     </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<br>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <div id="register-form">
               <h2 class="text-center">SEND ENQUIRY</h2>
               <p class="text-center mt-1 mb-2 text-danger"> ( DO NOT POST JOB ENQUIRY )</p>
               <form action="/enquiry/store" method="POST">
                  @csrf
                  <div class="form-group">
                     <label for="email">Name:</label>
                     <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                     <label for="pwd">Email:</label>
                     <input type="email" class="form-control" id="pwd" name="email">
                  </div>
                  <div class="form-group">
                     <label for="pwd">Phone:</label>
                     <input type="phone" class="form-control" id="pwd" name="phone">
                  </div>
                  <div class="form-group">
                     <label for="pwd">State:</label>
                     <input type="text" class="form-control" id="pwd " name="state" >
                  </div>
                  <div class="form-group">
                     <label for="pwd">City:</label>
                     <input type="text" class="form-control" id="pwd" name="city">
                  </div>
                  <div class="form-group">
                     <label for="pwd">About:</label>
                     <input type="text" class="form-control" id="pwd" name="about" value="{{$product->name}}">
                  </div>
                  <div class="form-group">
                     <label for="pwd">Message:</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Write Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
               </form>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
@endsection
