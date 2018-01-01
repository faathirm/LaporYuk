<?php 
    include('inc/start_page.php');
    include('inc/header.php');

?>
    <div class="page-banner"></div>
    <div class="page-breadcrumb container-fluid no-padding">
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="index.php" title="Home">Home</a></li>
					<li><a href="register.php">Register</a></li>
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
                    <div class="col-md-8 col-md-offset-2">
                        <div class="contact-form">
						<form class="form-style-3 row" action="proses/prosesregister.php" method="POST">
                            <div class="col-md-12 text-center">
                                <h2>REGISTER</h2>
                                <hr>
                                <div class="padding-20"></div>
                            </div>
							<div class="form-group col-md-6 col-sm-10 col-xs-12">
								<input type="text" required="" placeholder="Nama Depan" class="form-control" name="namadepan">
							</div>
                            <div class="form-group col-md-6 col-sm-10 col-xs-12">
								<input type="text" required="" placeholder="Nama Belakang" class="form-control" name="namabelakang">
							</div>
                            <div class="form-group col-md-12 col-sm-10 col-xs-12">
                                <input type="password" required="" placeholder="Password" class="form-control" name="password">
                            </div>
                            <div class="form-group col-md-6 col-sm-10 col-xs-12">
								<input type="email" required="" placeholder="Email" class="form-control" name="email">
							</div>
                            <div class="form-group col-md-6 col-sm-10 col-xs-12">
								<input type="text" required="" placeholder="Nomor Telepon" class="form-control" name="nomortelepon">
							</div>
							<div class="form-group col-md-12 col-sm-2 col-xs-12">
								<button type="submit" title="Submit Button" class="btn btn-block">Register</button>
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

    include('inc/footer.php');
    include('inc/page_end.php');     
?>