<?php 
    include('inc/start_page.php');
    include('inc/header.php');
    

    if (empty($_POST)){
        echo '<script>window.location.href = "index.php";</script>';
    }else{
        $emailpelapor = $_POST['email'];    
    
?>
    <div class="page-banner"></div>
    <div class="page-breadcrumb container-fluid no-padding">
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="index.php" title="Home">Home</a></li>
					<li><a href="daftar.php">Daftar</a></li>
				</ol>
			</div>
		</div><!-- Breadcrumb /- -->
		<!-- Contact Form -->
	<main>
		<div class="padding-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
					<div class="contact-form">
						<form class="form-style-1 row" action="proses/tambahlaporan.php" method="POST" enctype="multipart/form-data">
                            <div class="col-md-8">
                                <h2>Laporan</h2>
                                <small>Berisi data-data laporan yang akan di tinjau</small>	
                                <div class="padding-20"></div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="nopol" required="" placeholder="Nomor Polisi" class="form-control" data-toggle="tooltip" title="Contoh : B 1234 CDE">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea placeholder="Detail Laporan" name="detail" rows="4" class="form-control" data-toggle="tooltip" title="Penjelasan detail mengenai kejadian pelanggaran"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="tanggalkejadian" required="" placeholder="Tanggal Kejadian" class="form-control" data-toggle="tooltip" title="Contoh : 1 Januari 2018">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="jamkejadian" required="" placeholder="Jam Kejadian" class="form-control" data-toggle="tooltip" title="Contoh : 15:45">
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <input type="file" name="gambar" class="form-control" data-toggle="tooltip" title="Upload foto bukti pelanggaran">
                                </div>
                                
                                <div class="form-group col-md-8">
                                    <p>Pastikan untuk mengisi form dengan baik, benar dan akurat karena akan menjadi pertimbangan untuk melakukan apakah laporan akan disetujui. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h2>Data Diri</h2>
                                <small>Data diri pelapor</small>
                                <div class="padding-20"></div>
                                
                                <div class="form-group col-md-12">
								    <input type="text" name="namapelapor" required="" placeholder="Nama Pelapor" data-toggle="tooltip" title="Contoh : John Doe" class="form-control">
							    </div>
                                <div class="form-group col-md-12">
								    <input type="text" name="nomortelepon" required="" placeholder="Nomor Telepon" data-toggle="tooltip" title="Contoh : 089612341234" class="form-control">
							    </div>
                                <div class="form-group col-md-12">
								    <input type="email" name="email" required="" data-toggle="tooltip" title="Contoh : johndoe@gmail.com" class="form-control" value="<?php echo $emailpelapor; ?>">
							    </div>
                                
                                <hr>
                                
                                <small>Informasi Rekening Penerima</small>
                                <div class="padding-20"></div>
                                <div class="form-group  col-md-12">
                                    <select name="bank" class="form-control" data-toggle="tooltip" title="Rekening bank untuk pembayaran">
                                        <option value="BNI">BNI</option>
                                        <option value="MANDIRI">MANDIRI</option>
                                        <option value="BCA">BCA</option>
                                        <option value="BRI">BRI</option>
                                    </select>
                                </div>
                                <div class="form-group  col-md-12">
								    <input type="text" name="nomorrekening" required="" placeholder="Nomor Rekening" class="form-control" data-toggle="tooltip" title="Contoh : 0302570875">
							    </div>
                                
                                
                            </div>
                            
                            <div class="col-md-12">
                                    <button type="submit" title="Submit Button"><i class="fa fa-envelope" aria-hidden="true"></i> Submit Button</button>
                                </div>
                            
						</form>
					</div>
				</div>
            </div>
        </div>
        
        
	</main>

<?php 
    }
    include('inc/footer.php');
    include('inc/page_end.php');     
?>