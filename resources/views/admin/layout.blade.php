<!DOCTYPE HTML>
<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ URL::asset('css/admin/admin.css') }}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{ URL::asset('css/admin/lines.css') }}" rel='stylesheet' type='text/css' />

<!-- jQuery -->
<script src="{{ URL::asset('js/jquery.js') }}"></script>

<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<!---//webfonts--->    

<!-- Nav CSS -->
<link href="{{ URL::asset('css/admin/custom.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Metis Menu Plugin JavaScript -->
<script>	
		jQuery(document).ready(function(e){			
			jQuery(".event_model").on("click",function(){			
				var Id = $(this).data("id");
				jQuery.ajax({				
						type: "POST",
						url: "edit/"+Id,						
						success:function(result){
						    jQuery('#myModal').html(result);					
							jQuery('#myModal').modal();					
						}
				});
			});
		});
</script>
<script src="{{ URL::asset('js/admin/metisMenu.min.js') }}"></script>
<script src="{{ URL::asset('js/admin/custom.js') }}"></script>
<!-- Graph JavaScript -->
<script src="{{ URL::asset('js/admin/d3.v3.js') }}"></script>
<script src="{{ URL::asset('js/admin/rickshaw.js') }}"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL('/') }}/home" target="_blank">Modern</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="{{ URL('/') }}/auth/logout"><i class="fa fa-user"></i>Logout</a></li>						
	        		</ul>
	      		</li>
			</ul>
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ URL('/') }}/admin"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ URL('/') }}/post/view"><i class="fa fa-laptop nav_icon"></i>Posts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ URL('/') }}/post">Add Post</a></li>
								<li><a href="{{ URL('/') }}/post/view">View Posts</a></li>								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
							
						<li>
                            <a href="{{ URL('/') }}/event/view"><i class="fa fa-laptop nav_icon"></i>Events<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ URL('/') }}/event">Add Events</a></li>
								<li><a href="{{ URL('/') }}/event/view">View Events</a></li>								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
						<li>
                            <a href="{{ URL('/') }}/sendmsg"><i class="fa fa-laptop nav_icon"></i>Send Message<span class="fa arrow"></span></a>                            
                            <!-- /.nav-second-level -->
                        </li>
								
						<li>
                            <a href="{{ URL('/') }}/brain"><i class="fa fa-laptop nav_icon"></i>Braintree Demo<span class="fa arrow"></span></a>                            
                            <!-- /.nav-second-level -->
                        </li>		
                           <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        @yield('content')
        	<div class="clearfix"> </div>
      </div>
     
    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>	
	<script src="http://wp.krishna.cs/lara_newadmin/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="http://wp.krishna.cs/lara_newadmin/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        CKEDITOR.replace( 'message' );
		//jQuery(function() {
		//	jQuery( "#datepicker" ).datepicker();
		//});
    </script>
	<script type="text/javascript" src="https://js.braintreegateway.com/v1/braintree.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
		    var braintree = Braintree.create("@braintreeClientSideEncryptionKey");
			//alert(braintree);				
		});
	</script>			
</body>
</html>
