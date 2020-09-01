
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
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                       
                            <li class="nav-item start active open">
                            <a href="dashboard_2.html" class="nav-link nav-toggle">
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
                                    <a href="form_validation.html" class="nav-link ">
                                        <span class="title">add user</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="all_user_data_table.html" class="nav-link ">
                                        <span class="title">All user</span>
                                    </a>
                                </li>
                                  <li class="nav-item  ">
                                    <a href="waiting_user" class="nav-link ">
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
                                    <a href="allotment_list" class="nav-link ">
                                        <span class="title">Allotment Letters</span>
                                    </a>
                                </li>s
                      
                           
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