<?php 
    include('inc/start_page.php');
    include('inc/header.php');
    include('proses/koneksi.php');

    if(!isset($_SESSION['loggedin'])){
        $_SESSION["error_msg"] = "Login terlebih dahulu";
         echo '<script>window.location.href = "login.php";</script>';
    }else{
    
    if (empty($_GET)){
        echo '<script>window.location.href = "admin.php";</script>';
    }else{
    
    $userid = $_SESSION['id'];
    
    $id = $_GET['id'];
    
    $show = mysql_query("SELECT * FROM data_laporan WHERE id='$id'");
    $data = mysql_fetch_assoc($show);
    
    $idpelapor = $data['userid'];
    $row = mysql_fetch_assoc(mysql_query("SELECT * FROM data_user WHERE id='$idpelapor'"));    
    
    $kepilih1 ="";
    $kepilih2 ="";
    $kepilih3 ="";
    $kepilih4 ="";
    $ditolak = "";
    
    if($data['status'] == "TAHAP 1"){
        $kepilih1 = 'selected';
    }else  if($data['status'] == "TAHAP 2"){
        $kepilih2 = 'selected';
    }else if($data['status'] == "TAHAP 3"){
        $kepilih3 = 'selected';
    }else if($data['status'] == "TAHAP 4"){
        $kepilih4 = 'selected';
    }else{
        $ditolak = 'selected';
    }
    
?>
    <div class="page-banner"></div>
    <div class="page-breadcrumb container-fluid no-padding">
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="index.php" title="Home">Home</a></li>
					<li><a href="admin.php" title="Admin">Admin</a></li>
					<li>Detail</li>
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
                    <div class="col-md-8">
						<div class="info-boxes">
							<div class="info-content-2">
								<h3><?php echo $data['nopol'];?> <a class="label label-default"><span class="fa fa-camera" data-toggle="modal" data-target="#myModal"></span></a></h3>
                                <small>KEJADIAN <strong><?php echo $data['tanggalkejadian'];?></strong> JAM <strong><?php echo $data['jamkejadian'];?></strong></small>
								<p><?php echo $data['detail'];?></p>
							</div>
							<div class="padding-50"></div>
						</div>
					</div>
                    <div class="col-md-4 list-section">
                        <ul class="bullets-square">
                            <h4>DATA DIRI</h4>
							<li><?php echo $row['namadepan']." ".$row['namabelakang'];?></li>
							<li><?php echo $row['email'];?></li>
							<li><?php echo $row['nomortelepon'];?></li>
							<li>Dilaporkan pada : <?php echo $data['tanggaldilaporkan'];?></li><hr>
                            <h4><strong>STATUS</strong>
                                <?php if($data['status'] == "TAHAP 3"){
                                    ?><label class="label label-primary">TAHAP 3 / MENUNGGU PEMBAYARAN</label><?php
                                }else if($data['status'] == "DITOLAK"){
                                    ?><label class="label label-danger">DITOLAK</label><?php
                                }else if($data['status'] == "TAHAP 4"){
                                    ?><label class="label label-success">TAHAP 4 / PEMBAYARAN DITERIMA</label><?php
                                }else{
                                    ?><label class="label label-default"><?php echo $data['status'];?> / DIPROSES</label><?php
                                }?>
                            </h4>
						</ul>
                        <div class="padding-20"></div>
                        <div class="contact-form">
						<?php if($data['status'] != "TAHAP 4"){
                            ?> 
                            
                            <form class="form-style-1" action="proses/updatedata.php" method="POST">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $data['id'];?>" class="form-control">
                                    <input type="hidden" name="userid" value="<?php echo $data['userid'];?>" class="form-control">
                                    <input type="hidden" name="saldoawal" value="<?php echo $row['saldo'];?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <?php if($data['status'] == "TAHAP 3"){
                                        ?> <input class="form-control" type="text" name="saldo" placeholder="Total Pembayaran.."> <?php
                                    }else{
                                        ?> <select name="status" class="form-control">
                                                <option value="TAHAP 1"<?php echo $kepilih1; ?>>TAHAP 1</option>
                                                <option value="TAHAP 2"<?php echo $kepilih2; ?>>TAHAP 2</option>
                                                <option value="TAHAP 3"<?php echo $kepilih3; ?>>TAHAP 3</option>
                                                <option value="DITOLAK"<?php echo $ditolak; ?>>DITOLAK</option>
                                            </select> <?php
                                    } ?>    
                                </div>
                                <div class="form-group">
                                    <textarea name="komentar" placeholder="KOMENTAR" rows="4" class="form-control"> <?php echo $data['komentar']; ?> </textarea>
                                </div>
                                <button type="submit" title="Button">Submit</button>
                            </form>
                            
                            <?php
                        }else{
                        
                        }?>
						<div class="padding-50"></div>
					</div>
                    </div>
                </div>
			</div><!-- Container -->
			<div class="padding-30"></div>
		</div><!-- Process Section /- -->
        
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-body">
                <img src="images/fotoupload/<?php echo $data['gambar']; ?>" class="img-rounded">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        
	</main>

<?php
    }
    }
    include('inc/footer.php');
    include('inc/page_end.php');     
?>