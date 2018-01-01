<?php 
session_start();
?>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<div class="main-box">
	<a id="top"></a>
	


	<!-- Header Section -->
	<header id="header" class="header-section header-section-1 container-fluid no-padding">
		<!-- Top Header -->
		<div class="top-header container-fluid no-padding">
			<!-- Container -->
			<div class="container">
                <?php   
                if(isset($_SESSION['loggedin'])){                    
                    ?> <p>Jl. Telekomunikasi No. 01 Bandung Jawa Barat <span class="reg-link"><strong><?php echo $_SESSION['user'];?></strong><a href="admin.php" title="Dashboard">Dashboard</a> | <a href="proses/logout.php">LOGOUT</a></span></p> <?php   
                }else if(isset($_SESSION['userlogin'])){
                    ?> <p>Jl. Telekomunikasi No. 01 Bandung Jawa Barat <span class="reg-link"><strong><?php echo $_SESSION['user'];?></strong><a href="dashboard.php" title="Dashboard">Dashboard</a> | <a href="proses/logout.php">LOGOUT</a></span></p> <?php
                }else{
                    ?> <p>Jl. Telekomunikasi No. 01 Bandung Jawa Barat <span class="reg-link"><a href="login.php" title="Login">Login</a> or <a href="register.php" title="Register">register</a></span></p> <?php      
                } 
                
                ?>
                
			</div><!-- Container /- -->
		</div><!-- Top Header /- -->
	
		<!-- Menu Block -->
		<div class="container-fluid no-padding menu-block">
			<!-- Container -->
			<div class="container">
				<!-- nav -->
				<nav class="navbar navbar-default ow-navigation">
					<div class="navbar-header">
						<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index.php" class="navbar-brand">laporyuk</a>
					</div>
					<!-- Menu Icon -->
					<div class="menu-icon">
						<!--div class="burger-menu">
							<a href="#" title="menu"><img src="images/burger-menu-ic.png" alt="Menu" /></a>
						</div-->
                        
					</div><!-- Menu Icon /- -->
					<div class="navbar-collapse collapse navbar-right" id="navbar">
						<ul class="nav navbar-nav">
                            <li>
								<a href="index.php" role="button">Home</a>
							</li>
                            <li>
								<a href="contact.php" role="button">Contact</a>
							</li>
                            <li>
                                <a href="#" id="search" title="Search">Cek Nomor Kendaraan</a>
                            </li>
						</ul>
					</div><!--/.nav-collapse -->
				</nav><!-- nav /- -->
				<!-- Search Box -->
                <div class="search-box">
					<span><i class="icon_close"></i></span>
					<form action="ceknomor.php">
                        <input type="text" class="form-control" name="nopol" placeholder="Cek Nomor Kendaraan ( B 1234 ABC ) dan tekan enter" />
                    </form>
				</div><!-- Search Box /- -->
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
		
	</header><!-- Header Section /- -->