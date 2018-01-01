<?php 
    include('inc/start_page.php');
    include('inc/header.php');
    include('proses/koneksi.php');

     if(!isset($_SESSION['userlogin'])){
        echo '<script>window.location.href = "login.php";</script>';
    }else{
        $email = $_SESSION['email'];
        //ambil data user
        $row = mysql_fetch_assoc(mysql_query("SELECT * FROM data_user WHERE email='$email'"));
        //ambil data laporan
        $sql = "SELECT * FROM data_laporan WHERE email='$email'";
        $baris = mysql_fetch_assoc(mysql_query($sql));
        $query = mysql_query($sql);
    
?>
    <div class="page-banner"></div>
    <div class="page-breadcrumb container-fluid no-padding">
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="index.php" title="Home">Home</a></li>
					<li><a href="status.php">Status</a></li>
				</ol>
			</div>
		</div><!-- Breadcrumb /- -->
		<!-- Contact Form -->
	<main>
		<div class="padding-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-boxes">
                                <div class="info-content-3">
								<h3>Tambah Laporan Baru</h3>
								<p>Laporkan sekarang dan dapatkan pendapatan!</p>
								<a href="#" class="small-btn btn-block" title="Small Button"><i class="fa fa-plus" aria-hidden="true"></i>Buat Laporan Baru</a>
							 </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-boxes">
                                <div class="info-content-3">
								<h3>Pendapatan kamu</h3>
								<h2 class="text-center"><strong><?php echo 'Rp. ' . number_format( $row['saldo'], 0 , '' , ',' ); ?></strong></h2>
                                <p>Tarik pendapatan mu!</p>
								<a href="#" class="small-btn btn-block" title="Small Button"><i class="fa fa-money" aria-hidden="true"></i>Tarik Dana</a>
							 </div>
                            </div>
                        </div>
                    </div>
                    <!-- Expandable Background 2 -->
                    <div class="expandable-style expandable-section-style-2 container-fluid no-padding alert-section">
                        <hr>
                        <?php 
                            if($baris['detail']==""){
                                ?> 
                                <div class="alerts-style-3">
                                    <div role="alert" class="alert alert-warning text-center">
                                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Belum Ada Laporan
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>  
                                <?php
                            }else{  
                        ?>
                        <div class="panel-group" id="accordion2_1" role="tablist" aria-multiselectable="true">
                            <?php
                            $nomor = 1;
                            while($data=mysql_fetch_assoc($query)){
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo<?php echo $nomor;?>">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2_1" href="#collapseTwo<?php echo $nomor;?>" aria-expanded="true">
                                            <strong><?php echo $data['nopol']; ?></strong> | <?php echo $data['tanggaldilaporkan'];?> | 
                                            <?php if($data['status'] == "TAHAP 4"){
                                                ?> <span class="label label-success">TAHAP 4</span> <?php
                                            }else if($data['status'] == "DITOLAK"){
                                                ?> <span class="label label-danger">DITOLAK</span> <?php
                                            }else{
                                                ?><?php echo $data['status']; ?><?php
                                            }?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo<?php echo $nomor;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo1">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                        <small class="pull-right"><?php echo $data['tanggalkejadian'];?> / <?php echo $data['jamkejadian'];?> </small><br>
                                        <p><?php echo $data['detail'];?></p>
                                        <hr>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="images/fotoupload/<?php echo $data['gambar'];?>" class="img-rounded">    
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Komentar</h5>
                                                <?php echo $data['komentar'];?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            $nomor++;
                            }?>
                        </div>
                        <?php } ?>
                    </div><!-- Expandable Background 2 /- -->
                </div>
                <div class="col-md-4">
					<div class="ribbon-style ribbon-style-4 container-fluid no-padding">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ribbon-box">
                                    <div class="ribbon-content">
                                        <i class="fa fa-newspaper-o"></i>
                                        <span><?php echo $row['namadepan']." ".$row['namabelakang'];?></span>
                                        <ul>
                                            <li><?php echo $row['email']?></li>
                                            <li><?php echo $row['nomortelepon'] ?></li>
                                            <?php
                                            if($row['bank'] == ""){
                                                ?> <li><a href="#" class="label label-default">TAMBAH REKENING</a></li> <?php
                                            }else{
                                                ?> <li><?php echo $row['bank']; ?> / <?php echo substr($row['rekening'],0,-3);?>XXX</li> <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="shape"></div>
                                </div>
                            </div>
                        </div><!-- Row /- -->
                    </div><!-- Ribbon Holder 4 -->
				</div>
            </div>
        </div>
        
        
	</main>
    
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>

<?php
    }
    include('inc/footer.php');
    include('inc/page_end.php');     
?>