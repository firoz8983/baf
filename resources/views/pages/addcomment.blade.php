@extends('layout.systemuserlayout')
@section('systemuser_content')
    
     <!-- BEGIN CONTENT -->
     <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            
            <div class="page-bar">

                
                
            </div>
            
            <p class="alert-success">
                <?php
                 $message=Session::get('message'); 
               if($message){
                   echo $message;
                   Session::put('message',null);
                 }
                ?>
              </p>  
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Add Comment</span>
                            </div>
                           
                        </div>
                        <div class="portlet-body custom_form">
                            <!-- BEGIN FORM-->
                            <form action="{{route('comment')}} " method="POST" id="form_sample_3" class="form-horizontal custom_form2">
                                @csrf
                                <div class="form-body">
                                    
                                    <div class="form-group ">
                                      
                                        <div class="col-md-10 ">
                                            <input type="text" name="name" data-required="1" class="form-control field_custom" placeholder="Name" /> </div>
                                             
                                    </div>
                                    <div class="form-group">
                                      
                                        <div class="col-md-10">
                                            <input name="email" type="text" class="form-control field_custom" placeholder="Email Address" /> </div>
                                    </div>
                              
                                 <div class="form-group">
                                  
                                    <div class="col-md-10">
                                        <input name="room_no" type="text" class="form-control field_custom" placeholder="Room No" /> </div>
                                </div>
                                
                                <div class="form-group">
                                    
                                    <label for="comment" class="required">Your message</label>
                                    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
                                  
                                   
                                </div>
                                  
                                                  





                                    
                                </div>
                                <div class="form-actions custom_button_div">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9 ">
                                            <button type="submit" class="btn custom_button1" >Submit</button>
                                            <button type="button" class="btn custom_button2">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                        <!-- END VALIDATION STATES-->
                    </div>
                </div>
            </div>
            
             
               
            
            
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
                <!-- END CONTENT -->


<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->

@endsection