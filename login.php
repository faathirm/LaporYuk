<?php 
    session_start();
    include('inc/start_page.php');
    include('inc/header.php');

    if(isset($_SESSION['loggedin'])){
        echo '<script>window.location.href = "admin.php";</script>';
    }else{
?>
    <div class="page-banner"></div>
    <div class="page-breadcrumb container-fluid no-padding">
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="index.php" title="Home">Home</a></li>
					<li><a href="login.php">Login</a></li>
				</ol>
			</div>
		</div><!-- Breadcrumb /- -->
		<!-- Contact Form -->
	<main>
		<!-- Slider Section -->   
		<div class="padding-50"></div>
		<!-- Process Section /- -->
		<div class="container-fluid no-padding">
			<div class="container">
				<div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="contact-form">
						<form class="form-style-3 row" action="proses/proseslogin.php" method="POST">
                            <div class="col-md-12 text-center">
                                <h2>LOGIN PANEL</h2>
                                <hr>
                                <div class="padding-20"></div>
                            </div>
							<div class="form-group col-md-12 col-sm-10 col-xs-12">
								<input type="text" required="" placeholder="Username" class="form-control" name="username">
							</div>
                            <div class="form-group col-md-12 col-sm-10 col-xs-12">
								<input type="password" required="" placeholder="Password" class="form-control" name="password">
							</div>
							<div class="form-group col-md-12 col-sm-2 col-xs-12">
								<button type="submit" title="Submit Button" class="btn btn-block">Login</button>
							</div>
						</form>
					</div>
                    </div>
                </div>
			</div><!-- Container -->
			<div class="padding-30"></div>
		</div><!-- Process Section /- -->
        
	</main>

<?php
    }
    include('inc/footer.php');
    include('inc/page_end.php');     
?>