@extends('layout.adminlayout')
@section('admin_content')
    




        
        
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
                                    <span class="caption-subject font-red sbold uppercase">All quarter information</span>
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
                                            <th> Address</th>
                                            <th> Bulinding NO </th>
                                            <th> Flat No</th>
                                            <th>Previous info</th>
                                            <th> Status </th>
                                            <th> date of vaccancey </th>
                                            <th> Rank </th>
                                            <th> Phone Number</th>
                                            <th> House Type </th>
                                             <th> Action </th>
                                             
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allquarter as $row)
                                        <tr>
                                            <td> {{$row->id}} </td>
                                            <td>{{$row->address}}</td>
                                            <td>{{$row->building_number}}</td>
                                            <td>{{$row->flat_number}}</td>
                                            <td>{{$row->previous_info}}</td>
                                            <td>{{$row->status_of_house}}</td>
                                            <td>{{$row->date}}</td>
                                            <td>{{$row->rank}}</td>
                                            <td>{{$row->phone_number}}</td>
                                            <td>{{$row->house_type}}</td>
                                            <td>
                                                <a class="edit" href="javascript:;"> <button class="btn btn-primary edit_custom_blue">Edit </button></a>
                                                <a class="delete" href="javascript:;"> <button class="btn btn-danger edit_custom_red">Delete</button> </a>
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