@extends('layout.adminlayout')
@section('admin_content')
    
      <!-- BEGIN CONTENT -->
      <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            
            <div class="page-bar">
                
                
            </div>
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Add User</span>
                            </div>
                           
                        </div>
                        <div class="portlet-body custom_form">
                            <!-- BEGIN FORM-->
                            <form action="{{route('store.userdata')}} " method="POST" id="form_sample_3" class="form-horizontal custom_form2">
                                @csrf
                                <div class="form-body">
                                    
                                    <div class="form-group ">
                                      
                                        <div class="col-md-5 ">
                                            <input type="text" name="firstname" data-required="1" class="form-control field_custom" placeholder="First name" /> </div>
                                             <div class="col-md-5">
                                            <input type="text" name="lastname" data-required="1" class="form-control field_custom" placeholder="Last Name" /> </div>
                                    </div>

                                    <div class="form-group">
                                      
                                        <div class="col-md-10">
                                            <input name="email" type="text" class="form-control field_custom" placeholder="Email Address" /> </div>
                                    </div>

                                   <div class="form-group">
                                      
                                        <div class="col-md-10">
                                            <input name="bdnumber" type="text" class="form-control field_custom" placeholder="BD Number" /> </div>
                                    </div>
                                       
                                           <div class="form-group">
                                        
                                        <div class="col-md-10">
                                            <select id="rank" class="form-control field_custom1 classic" name="rank" placeholder="Select Rank">
                                                <option value="">Select Rank</option>
                                               <option value="Flying officer">Flying officer</option>
                                                  <option value="Flight lieutenant">Flight lieutenant</option>
                                                  <option value="Wing commander">Wing commander</option>
                                                  <option value="Group captain">Group captain</option>
                                                  <option value="Air commodore">Air commodore </option>
                                                  <option value="Air vice marshal">Air vice marshal </option>
                                                  <option value="Air marshal">Air marshal </option>
                                            </select>
                                        </div>
                                    </div>
                                               <div class="form-group">
                                        
                                        <div class="col-md-10">
                                            <select id="base" class="form-control field_custom1 classic" name="base">
                                                <option value="">Posting Base</option>
                                                <option value="BAF BSR">BAF BSR</option>
                                                <option value="BAF BBD">BAF BBD</option>
                                                <option value="BAF MTR">BAF MTR</option>
                                                <option value="BAF ZHR">BAF ZHR</option>
                                                <option value="BAF PKP">BAF PKP</option>
                                                <option value="BAF COX'S">BAF COX'S</option>
                                            </select>
                                        </div>
                                    </div>
                                                        <div class="form-group">
                                        
                                        <div class="col-md-10">
                                            <select id="quartertype" class="form-control field_custom1 classic" name="quartertype">
                                                <option value="">Eligibile Quater Type</option>
                                                <option value="One">One</option>
                                                <option value="two">two</option>
                                                <option value="three">three</option>
                                                <option value="four">four</option>
                                            </select>
                                        </div>
                                    </div>
                                        





                                    <div class="form-group">
                                      
                                        <div class="col-md-10">
                                            <input name="date" type="text" class="form-control field_custom" placeholder="Date of commision d/m/y" /> </div>
                                    </div>


                                         <div class="form-group">
                                      
                                        <div class="col-md-10">
                                            <input name="point" type="text" class="form-control field_custom" placeholder="Point Carrys On" /> </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="col-md-10">
                                            <input name="anumber" type="text" class="form-control field_custom" placeholder="Authentication Number" /> </div>
                                    </div>
                                     
                                    <div class="form-group">
                                      
                                        <div class="col-md-10">
                                            <input name="child" type="text" class="form-control field_custom" placeholder="Number of Child" /> </div>
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


@endsection