@extends('layout.ocheader')
@section('oc_content')


        
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
         
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light portlet-fit ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-settings font-red"></i>
                                    <span class="caption-subject font-red sbold uppercase">Comments</span>
                                </div>
                          
                            </div>
                            <div class="portlet-body">
                                <div class="table-toolbar">
                                    <div class="row">
                                       
                                        
                                    </div>
                                </div>
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th> Name</th>
                                            <th> Email </th>
                                            <th> Room No</th>
                                            <th> Comment</th>
                                            
                                             <th> Action </th>
                                             
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($comments as $row)
                                        <tr>
                                            <td> {{$row->id}} </td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>{{$row->room_no}}</td>
                                            <td>{{$row->comment}}</td>
                                            
                                            <td>
                                                <a class="edit" href="#"> <button class="btn btn-primary edit_custom_blue">Edit </button></a>
                                                <a class="delete" href="#"> <button class="btn btn-danger edit_custom_red">Delete</button> </a>
                                            </td>
                                           
                                        </tr>
                                        @endforeach
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->



@endsection