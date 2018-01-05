<?php 
    include('inc/start_page.php');
    include('inc/header.php');
    include('proses/koneksi.php');

     if(!isset($_SESSION['userlogin'])){
         $_SESSION["error_msg"] = "Login terlebih dahulu";
         echo '<script>window.location.href = "login.php";</script>';
    }else{
        $userid = $_SESSION['id'];
        //ambil data user
        $row = mysql_fetch_assoc(mysql_query("SELECT * FROM data_user WHERE id='$userid'"));
        //ambil data laporan
        $sql = "SELECT * FROM data_laporan WHERE userid='$userid'";
        $tampil = "SELECT * FROM data_withdrawl WHERE iduser='$userid'";
        $queryy = mysql_query($tampil);
         
        $baris = mysql_fetch_assoc(mysql_query($sql));
        $query = mysql_query($sql);
    
?>
    <div class="page-banner"></div>
    <div class="page-breadcrumb container-fluid no-padding">
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="index.php" title="Home">Home</a></li>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li>User ID #<?php echo $userid; ?> </li>
				</ol>
			</div>
		</div><!-- Breadcrumb /- -->
		<!-- Contact Form -->
	<main>
		<div class="padding-50"></div>
        <div class="container alert-section">
            <div class="row">
                <div class="col-md-8">
                    
                    <?php if(!empty($_SESSION["success_msg"])):?>
                    <div class="alerts-style-3">
                        <div role="alert" class="alert alert-success text-center" data-auto-dismiss="4000"> 
                            <i class="fa fa-check" aria-hidden="true"></i><?php echo $_SESSION['success_msg'];?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    <?php unset($_SESSION["success_msg"]); endif;?>
                    
                    <?php if(!empty($_SESSION["error_msg"])):?>
                    <div class="alerts-style-3">
                        <div role="alert" class="alert alert-danger text-center" data-auto-dismiss="4000">
                            <i class="fa fa-times" aria-hidden="true"></i><?php echo $_SESSION['error_msg'];?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" data-auto-dismiss="4000"></button>
                        </div>
                    </div>
                    <?php unset($_SESSION["error_msg"]); endif;?>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-boxes">
                                <div class="info-content-3">
								<h3>Tambah Laporan Baru</h3>
								<p>Laporkan sekarang dan dapatkan pendapatan!</p>
								<a href="daftar.php" class="small-btn btn-block" title="Small Button"><i class="fa fa-plus" aria-hidden="true"></i>Buat Laporan Baru</a>
							 </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-boxes">
                                <div class="info-content-3">
								<h3>Pendapatan kamu</h3>
								<h2 class="text-center"><strong><?php echo 'Rp. ' . number_format( $row['saldo'], 0 , '' , ',' ); ?></strong></h2>
                                <p>Tarik pendapatan mu!</p>
								<a data-toggle="modal" data-target="#tarikdana" href="" class="small-btn btn-block" title="Small Button"><i class="fa fa-money" aria-hidden="true"></i>Tarik Dana</a>
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
                                                <?php if($data['komentar'] == ""){
                                                    echo '<strong>Belum Ada Komentar</strong>';
                                                }else{
                                                    echo $data['komentar'];
                                                }?>
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
                                                ?> <li><a data-toggle="modal" data-target="#tambahrekening" class="label label-default"><i class="fa fa-plus"></i> TAMBAH REKENING</a></li> <?php
                                            }else{
                                                ?> <li><?php echo $row['bank']; ?> / <?php echo substr($row['rekening'],0,-3);?>XXX</li> 
                                            <?php
                                            }
                                            ?>
                                            <li><a data-toggle="modal" data-target="#statuspenarikan" class="label label-default"><i class="fa fa-check"></i> Status Penarikan</a></li>
                                            <li><a class="label label-default"><i class="fa fa-gear"></i>  Pengaturan Akun</a></li>
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
        
        <div id="tambahrekening" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="contact-form ">
                            <form class="form-style-3 row" action="proses/prosestambahrekening.php" method="post">
                                <div class="form-group col-md-8 col-md-offset-2">
                                    <h4><strong>Tambahkan nomor rekening untuk menerima pembayaran anda !</strong></h4>
                                    <hr>
                                </div>
                                <div class="form-group col-md-8 col-md-offset-2">
                                    <select name="bank" class="form-control">
                                        <option value="MANDIRI">MANDIRI</option>
                                        <option value="BCA">BCA</option>
                                        <option value="BNI">BNI</option>
                                        <option value="BRI">BRI</option>
                                        <option value="BTPN">BTPN</option>
                                        <option value="DANAMON">DANAMON</option>
                                    </select>
                                    <span class="pull-right">Pilih bank yang anda gunakan</span>
                                </div>
                                <div class="form-group col-md-8 col-md-offset-2">
                                    <input type="text" class="form-control" name="rekening" placeholder="Nomor Rekening..">
                                    <span class="pull-right">Nomor rekening anda</span>
                                </div>
                                <div class="form-group col-md-8 col-md-offset-2">
                                    <input type="hidden" name="id" value=" <?php echo $_SESSION['id']; ?> ">
                                    <button type="submit" title="Tambahkan Rekening" class="btn btn-lg">Tambahkan Rekening</button>
                                </div>
                            </form>
                        </div>                                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="tarikdana" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>Tarik Dana</strong></h4>   
                    </div>
                    <div class="modal-body">
                        <div class="contact-form">
                            <form class="form-style-3 row" action="proses/prosestarikdana.php" method="post">
                                <div class="form-group col-md-8 col-md-offset-2">
                                    <input type="number" class="form-control" name="permintaan" min="50000" max="<?php echo $row['saldo']; ?>" step="10000" placeholder="Minimal penarikan adalah Rp 50.000">
                                    <small class="pull-right">Akan dikirimkan ke bank <?php echo $row['bank'];?> dengan nomor rekening <?php echo $row['rekening']; ?> </small>
                                </div>
                                <div class="form-group col-md-6 col-md-offset-3">
                                    <input type="hidden" name="id" value=" <?php echo $_SESSION['id']; ?> ">
                                    <button type="submit" title="Tambahkan Rekening" class="btn btn-lg">Tarik Dana</button>
                                </div>
                            </form>
                        </div>                          
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="statuspenarikan" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Status Penarikan</h4>
              </div>
              <div class="modal-body">
                <div class="table-style">
                    <table class="table table-style-4 table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Tanggal</th>
								<th>Bank</th>
								<th>Permintaan</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php 
                            $nomor = 1;
                            while($tampil=mysql_fetch_assoc($queryy)){
                            ?>
							<tr>
								<th scope="row"><?php echo $nomor; ?></th>
								<td><?php echo $tampil['tanggal'];?></td>
								<td><?php echo $tampil['bank'];?> / <?php echo $tampil['rekening'];?></td>
								<td><?php echo 'Rp. ' . number_format( $tampil['permintaaan'], 0 , '' , ',' ); ?></td>
								<td><?php if($tampil['status']=="0"){
                                    echo 'Belum Di Transfer';
                                }else{
                                    echo '<strong>Sudah DI Transfer</strong>';
                                } ?></td>
							</tr>
                            <?php
                            $nomor++;
                            }
                            ?>
						</tbody>
					</table>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
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