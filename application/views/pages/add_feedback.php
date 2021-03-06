
<?php
	//$this -> load -> session();
	//session_start();
//print_r($this->session->userdata['logged_in']);
if (isset($this->session->userdata['logged_in'])) {
	$name = ($this->session->userdata['logged_in']['name']);
	$username = ($this->session->userdata['logged_in']['username']);
	$admin = ($this->session->userdata['logged_in']['admin']);
	} else {
	header("location: login");
	}
	$id = $this->member_management->get_id_from_username($username);

?>
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" style="width:300px;" class="navbar-brand"><span class="navbar-logo"><i class="ion-ios-cloud"></i></span> <b>CSI-RAIT</b> SPONSORSHIP</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<button type="button" class="navbar-toggle p-0 m-r-5" data-toggle="collapse" data-target="#top-navbar">
					    <span class="fa-stack fa-lg text-inverse">
                            <i class="fa fa-square-o fa-stack-2x m-t-2"></i>
                            <i class="ion-ios-gear fa-stack-1x"></i>
                        </span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse pull-left" id="top-navbar">
                    <ul class="nav navbar-nav">
                        
                        
						
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ion-ios-compose f-s-20 pull-left m-r-5"></i> New <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
				<!-- end navbar-collapse -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					
					
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="user-image online">
								<img src="assets/img/user-13.jpg" alt="" /> 
							</span>
							<span class="hidden-xs"><?=$name?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url() ?>logout">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
        
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
							<?=$name?>
							<small><?=$username?></small>
						</div>
					</li>
                    <?php if($admin){ ?>
					<li>
						<a href="<?php echo base_url() ?>members">
						    <i class="ion-ios-pulse-strong"></i> 
						    <span>Member Management</span>
						</a>
					</li>
					
					<li>
						<a href="<?php echo base_url() ?>add_members">
						    <i class="ion-ios-pulse-strong"></i> 
						    <span>Add Members</span>
						</a>
					</li>
					<?php } ?>
					<li>
						<a href="<?php echo base_url() ?>user_main">
						    <i class="ion-ios-list-outline"></i> 
						    <span>Targets</span>
						</a>
					</li>
					<?php if($admin){ ?>
					<li>
						<a href="<?php echo base_url() ?>add_target">
						    <i class="ion-ios-list-outline"></i> 
						    <span>Add Target</span>
						</a>
					</li>
					<?php } ?>
					<li>
						<a href="<?php echo base_url() ?>add_feedback">
						    <i class="ion-ios-undo"></i> 
						    <span>Add Feedback</span>
						</a>
					</li>
					<?php if($admin){ ?>
					<li>
						<a href="<?php echo base_url() ?>deals">
						    <i class="ion-ios-undo"></i> 
						    <span>Closed Deals</span>
						</a>
					</li>
					<?php } ?>
					<li>
						<a href="<?php echo base_url() ?>add_claims">
						    <i class="ion-ios-undo"></i> 
						    <span>Add Claims</span>
						</a>
					</li>
					<?php if(!$admin){ ?>
					<li>
						<a href="<?php echo base_url() ?>Member/claims/<?=$id?>">
						    <i class="ion-ios-undo"></i> 
						    <span>View Claims</span>
						</a>
					</li>
                    <?php } ?>
				</ul>
				<!-- end sidebar user -->
	
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
        <div id="content" class="content">
			<!-- begin breadcrumb -->
			
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Add Feedback <small>enter details here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-6">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Feedback Form</h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url()?>Feedback/addFeedback" method="post" class="form-horizontal">
                            <div class="form-group">
                            <input class="hidden" name="submitted_by" value="<?=$this->feedback_management->get_id_from_roll_number($username);?>" />

                                    <label class="col-md-3 control-label">Target</label>
                                    <div class="col-md-9">
                                    <select name="target_id" class="form-control selectpicker" data-size="10" data-live-search="true">
                                            <option value="" selected>Select a Target</option>
                                           
                                            <?php $targets = $this->feedback_management->get_target_list($username);
                                               // print_r($targets);
                                                foreach($targets as $target){
                                            ?>
                                             <option value="<?=$target->id?>"><?=$target->name?></option>
                                            <?php } ?>
                                        </select>                                    </div>
                                </div>
                            <div class="form-group">
                                    <label class="col-md-3 control-label"> Date Visited</label>
                                    <div class="col-md-9">
                                        <input type="text" name="date_visited" class="form-control" id="datepicker-autoClose" placeholder="Auto Close Datepicker" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Members Visited</label>
                                    <div class="col-md-9">
                                    <select name="people_visited[]" class="multiple-select2 form-control" multiple="multiple">
                                        <?php
                                        $members = $this->member_management->read_member_info();
                                                foreach($members as $member){ ?>
                                                    <option value="<?=$member->id?>"><?=$member->name?></option>

                                        
                                        ?>
                                        <?php } ?>
</select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Feedback</label>
                                    <div class="col-md-9">
                                        <textarea  name="feedback_content" type="text" class="form-control" placeholder="Default input"> </textarea>
                                    </div>
                                </div>
                                
                                           
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Submit</label>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-sm btn-success">Add Feedback</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
                <!-- begin col-6 -->
              
            </div>
            <!-- end row -->
           
            <!-- end row -->
            <!-- begin row -->
            
            <!-- end row -->
		</div>

        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	

