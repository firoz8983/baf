@extends('layout.header')
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                       
                            <li class="nav-item start active open">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                        
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="title">profile</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="adduser" class="nav-link ">
                                        <span class="title">add user</span>
                                    </a>
                                </li>
                               
                                <li class="nav-item  ">
                                    <a href="alldata" class="nav-link ">
                                        <span class="title">All user</span>
                                    </a>
                                </li>
                                  <li class="nav-item  ">
                                    <a href="waiting_user.html" class="nav-link ">
                                        <span class="title">Waiting User</span>
                                    </a>
                                </li>
                                   <li class="nav-item  ">
                                    <a href="shifting_user.html" class="nav-link ">
                                        <span class="title">Shifting User</span>
                                    </a>
                                </li>
                                   <li class="nav-item  ">
                                    <a href="shifting_and_waiting_user.html" class="nav-link ">
                                        <span class="title">Shifting And Waiting user according to point</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                           <i class="glyphicon glyphicon-object-align-bottom"></i>
                                <span class="title">Quarter</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="add_quarter.html" class="nav-link ">
                                        <span class="title">Add Quarter</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="table_datatables_editable_allquarter.html" class="nav-link ">
                                        <span class="title">All Quarter</span>
                                 
                                    </a>
                                </li>
                                  <li class="nav-item  ">
                                    <a href="table_datatables_editable_vacantquarter.html" class="nav-link ">
                                        <span class="title">vacant</span>
                                        
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-file"></i>
                                <span class="title">File</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="priority_list.html" class="nav-link ">
                                        <span class="title">Priority Lists</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="offer_list.html" class="nav-link ">
                                        <span class="title">Offer Lists</span>
                                    </a>
                                </li>
                             
                                <li class="nav-item  ">
                                    <a href="allotment_list.html" class="nav-link ">
                                        <span class="title">Allotment Letters</span>
                                    </a>
                                </li>
                      
                           
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-key"></i>
                                <span class="title">change password</span>
                                <span class="arrow"></span>
                            </a>
                            
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                   
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    
                    <div class="page-bar">
                        
                        
                    </div>


        <table class="table table-responsive">
            <tr>
            <th>User Id</th>
            <th>First Name</th>
             <th>Last Name</th>
             <th>Phone Number</th>
             <th>Rank</th>
             <th>Base</th>
             <th>Quarter Type </th>
            <th>Date</th>
            <th>point</th>
            <th>Authentication Number</th>
            <th>Children</th>
      
         <th>Action</th>
        </tr>
        @foreach($alldata as $row)
        <tr>
         <td>{{$row->id}}</td>
        <td>{{$row->firstname}}</td>
         <td> {{$row->lastname}} </td>
         <td>{{$row->bdnumber}} </td>
         <td>{{$row->rank}} </td>
         <td>{{$row->base}} </td>
        <td>{{$row->quartertype}} </td>
        <td>{{$row->date}} </td>
        <td>{{$row->point}} </td>
        <td>{{$row->anumber}} </td>
        <td>{{$row->child}} </td>
     
      <td>
        <a href="{{url('/approve/data/'.$row->id)}}" class="btn btn-sm btn-info">Approve</a>
        
      </td>
    </tr>
    @endforeach
  </table>
  
  @extends('layout.footer')