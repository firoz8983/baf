@extends('layout.acoheader')
@section('aco_content')
    

            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    
                    <!-- END THEME PANEL -->
                  
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
                                        <span class="caption-subject font-dark sbold uppercase">Add Quarter</span>
                                    </div>
                                   
                                </div>
                                <div class="portlet-body custom_form">
                                    <!-- BEGIN FORM-->
                                    <form action="{{route('quarterdata')}} " method="POST" id="form_sample_3" class="form-horizontal custom_form2">
                                        @csrf
                                        <div class="form-body">
                                                <div class="form-group">
                                              
                                                <div class="col-md-10 col-sm-10 col-xs-10">
                                                    <input name="address" type="text" class="form-control field_custom" placeholder="Address" /> </div>
                                            </div>
                                       
                                           <div class="form-group">
                                              
                                                <div class="col-md-10 col-sm-10">
                                                    <input name="building_number" type="text" class="form-control field_custom" placeholder="building Number" /> </div>
                                            </div>
                                                        <div class="form-group">
                                              
                                                <div class="col-md-10 col-sm-10">
                                                    <input name="flat_number" type="text" class="form-control field_custom" placeholder="Flat Number" /> </div>
                                            </div>
                                                   <div class="form-group">
                                              
                                                <div class="col-md-10 col-sm-10">
                                                    <input name="previous_info" type="text" class="form-control field_custom" placeholder="previous occupaint information" /> </div>
                                            </div>
                                         
                                                   <div class="form-group">
                                                
                                                <div class="col-md-10 col-sm-10">
                                                    <select class="form-control field_custom1 classic" name="status_of_house" placeholder="Select Rank">
                                                        <option value="status of house">Status of house</option>
                                                        <option value="vacant">Vacant</option>
                                                        <option value="under maintanence">under maintanence</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                                                <div class="form-group">
                                            
                                                      <div class="col-md-10 col-sm-10">
                                                   <input name="date" type="text" class="form-control field_custom" placeholder="date" /> </div>


                                            </div>         <div class="form-group">
                                                
                                                <div class="col-md-10 col-sm-10">
                                                    <select class="form-control field_custom1 classic" name="rank" placeholder="Select Rank">
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
                                              
                                                <div class="col-md-10 col-sm-10">
                                                    <input name="phone_number" type="text" class="form-control field_custom" placeholder="BD Number" /> </div>
                                            </div>
                                    
                                            <div class="form-group">
                                                
                                                <div class="col-md-10 col-sm-10 ">
                                                    <select class="form-control field_custom1 classic" name="house_type"  >
                                                        <option value="">Type of house</option>
                                                        <option value="Renovated">Renovated</option>
                                                        <option value="Temporary">Temporary</option>
                                                    </select>
                                                </div>
                                            </div>
                                       
                                            
                                        </div>
                                        <div class="form-actions custom_button_div">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9 ">
                                                    <button type="submit" class="btn custom_button1">Submit</button>
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


            @endsection