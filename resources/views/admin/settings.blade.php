@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="main-content">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                       Admin Settings
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Settings</a>
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget yellow">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Admin Settings</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->

                            <form class="cmxform form-horizontal" id="password_validate" name="password_validate" method="post" action="{{ url('/admin-panel/update-password') }}">{{ csrf_field() }}
                                <div class="control-group ">
                                    <label for="current_pwd" class="control-label">Current Password</label>
                                    <div class="controls">
                                        <input class="span6 " id="current_pwd" name="current_pwd" minlength="2" type="password" />
                                        <span id="chkPwd"></span>
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="new_pwd" class="control-label">New Password</label>
                                    <div class="controls">
                                        <input class="span6 " id="new_pwd" name="new_pwd" minlength="2" type="password" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="confirm_pwd" class="control-label">Confirm Password</label>
                                    <div class="controls">
                                        <input class="span6 " id="confirm_pwd" name="confirm_pwd" minlength="2" type="password" />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button class="btn btn-success" value="Update Password" type="submit">Update Password</button>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
        </div>
    </div>

@endsection