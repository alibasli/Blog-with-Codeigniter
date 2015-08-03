<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Blog Site</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
    	<meta name="author" content="">

		<link href="<?php echo base_url('css/bootstrap.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">

	    
	</head>

	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
					
          <div class="btn-group pull-right">
            <a class="btn" href="<?php echo site_url('login'); ?>">
              <i class="icon-user"></i> Login
              <span class="caret"></span>
            </a>
          </div>					
					
				</div>
			</div>
		</div>

		<header>
			<div class="container">
				<div class="row">
					<div class="span6">
						<h1>This is my header</h1>
						<p>I am yours and you are mine!</p>
					</div>
					<div class="span6">
						<p>
							This website has been prepared for my schoolwork.						
						</p>
				</div>
			</div>
		</header>

		<div id="body">
			<div class="container">
				<div class="row">
					<div id="content" class="span8">
						<ul class="posts">
							<li class="post">
								<h2>About Me</h2>
								<div class="meta">April 19, 2014 </div>
								<div class="entry">
									<p>
										Hi there! I am Mehmet Ali from Turkey. I am a student and my section is computer engineering. I will graduate June 2015. I prapered this web site for my term project on lecturer. I hope that shall help you. 
									</p>
								</div>
								<a href="#">Read More</a>
							</li>
							
						</ul>
					</div>
					<div id="sidebar" class="span4">
						<div class="widget">
							<img src="https://lh5.googleusercontent.com/-Y1rqHYjiyYQ/AAAAAAAAAAI/AAAAAAAACAQ/HBG8sn4pY6k/photo.jpg" alt="Picture of me" style="width:254px;height:268px; margin-left:30px;">
							<center><h3 style="margin-top:10px"> About Me</h3></center>
							<p style="margin-top:10px">
								Hi there! I am Mehmet Ali from Turkey. I am a student and my section is computer engineering. I will graduate June 2015. I prapered this web site for my term project on lecturer. I hope that shall help you. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="span6">Footer</div>
					<div class="span6"></div>
				</div>
			</div>
		</footer>
		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
	</body>
</html>
