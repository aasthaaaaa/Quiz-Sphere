		<head>
		<style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }
	.navbar {
      overflow: hidden;
      background-color: #333;
    }

    .navbar a {
      float: right;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .sidenav {
      height: 100%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 18px;
      color: #818181;
      display: block;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

	.sidebar a.active {
      background-color:whitesmoke; /* Color for the active link */
      color: white;
    }
	.logo {
      text-align: center;
      margin-bottom: 20px;
    }
	
</style>
		</head>
		<body>
			
		<div class="navbar">
    <a href="logout.php">Logout &#x02190;</a>
    <a href="logout.php" ><?php echo $name ?> <i class="fa fa-power-off"></i></a>
  </div>
		<div class="sidenav" >
		<div class="logo">
		<a href="#">
				  Online Quiz System
				</a>
    	</div>
			<div >
				<a href="home.php">
						<div ><i class="fa fa-home"> </i></div>  Home
				</a>
			</div>
			<?php if($_SESSION['login_user_type'] != 3): ?>
			<?php if($_SESSION['login_user_type'] == 1): ?>
			<div >
				<a href="faculty.php">
						<div ><i class="fa fa-users"> </i></div>  Faculty List
				</a>
			</div>
		<?php endif; ?>
			<div >
				<a href="student.php">
						<div ><i class="fa fa-users"> </i></div>  Student List
				</a>
			</div>
			<div >
				<a href="quiz.php">
						<div ><i class="fa fa-list"> </i></div>  Quiz List
				</a>
			</div>
			<div >
				<a href="history.php">
						<div ><i class="fa fa-history"> </i></div>  Quiz Records
				</a>
			</div>
			<?php else: ?>
			<div >
				<a href="student_quiz_list.php">
						<div ><i class="fa fa-list"> </i></div>  Quiz List
				</a>
			</div>
		<?php endif; ?>

		</div>
		<script>
			$(document).ready(function(){
				var loc = window.location.href;
				loc.split('{/}')
				$('#sidebar a').each(function(){
				// console.log(loc.substr(loc.lastIndexOf("/") + 1),$(this).attr('href'))
					if($(this).attr('href') == loc.substr(loc.lastIndexOf("/") + 1)){
						console.log($(this).attr('href'))
						$(this).addClass('active')
						
					}
				})
			})
			
		</script>
		</body>