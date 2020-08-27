<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Sidebar Dashboard Template With Sub Menu</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
				<div class="header-menu">
					<div class="logo"><img src="images/logo1.png" alt=""></div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
					<ul>
						
						<li><a href="#"><i class="fas fa-bell"></i></a></li>
						<li><a href="#"><i class="fas fa-power-off"></i></a></li>
					</ul>
				</div>
			</div>
			<!--header menu end-->
			<!--sidebar start-->
			<div class="sidebar">
				<div class="sidebar-menu">
					<center class="profile">
						<img src="1.jpg" alt="">
						<p>Jessica</p>
					</center>
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="item" id="profile">
						<a href="#profile" class="menu-btn">
							<i class="fas fa-user-circle"></i><span>Profile <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="#"><i class="fas fa-address-card"></i><span>Info</span></a>
							<a href="#"><i class="fas fa-key"></i><span>Password</span></a>
						</div>
					</li>
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-calendar"></i><span> Appointment<!--<i class="fas fa-chevron-down drop-down"></i>--></span>
						</a>
						<!--<div class="sub-menu">
							<a href="#"><i class="fas fa-envelope"></i><span>New</span></a>
							<a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
							<a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
						</div>-->
					</li>
					<li class="item" id="settings">
						<a href="#settings" class="menu-btn">
							<i class="fas fa-user-md"></i><span>Doctor <!--<i class="fas fa-chevron-down drop-down"></i>--></span>
						</a>
						<!--<div class="sub-menu">
							<a href="#"><i class="fas fa-lock"></i><span>Password</span></a>
							<a href="#"><i class="fas fa-language"></i><span>Language</span></a>
						</div>-->
					</li>
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
						<i class="material-icons">airline_seat_individual_suite</i><span> Patient<!--<i class="fas fa-chevron-down drop-down"></i>--></span>
						</a>
						<!--<div class="sub-menu">
							<a href="#"><i class="fas fa-envelope"></i><span>New</span></a>
							<a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
							<a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
						</div>-->
					</li>
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-user"></i><span>Helpline Assistant</span>
						</a>
					</li>
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-tint"></i><span>Organ Donation</span>
						</a>
					</li>
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>About</span>
						</a>
					</li>
				</div>
			</div>
			<!--sidebar end-->
			<!--main container start-->
			<!--<div class="main-container">
				<div class="card">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="card">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="card">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
			</div>-->
			<!--main container end-->
		</div>
		<!--wrapper end-->

		<script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
		</script>

	</body>
</html>
