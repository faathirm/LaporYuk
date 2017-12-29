<?php 
    include('inc/start_page.php');
    include('inc/header.php');
    include('proses/koneksi.php');

    $per_page = 5;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $per_page) - $per_page : 0;
    $result = mysql_query("SELECT * FROM data_laporan");
    $total = mysql_num_rows($result);
    $pages = ceil($total/$per_page);
    $query = mysql_query("SELECT * FROM data_laporan LIMIT $mulai, $per_page")or die(mysql_error);
    $no = $mulai+1;

    //hitung
    $tahap1 = mysql_num_rows(mysql_query("SELECT * FROM data_laporan WHERE status='TAHAP 1'"));
    $tahap2 = mysql_num_rows(mysql_query("SELECT * FROM data_laporan WHERE status='TAHAP 2'"));
    $tahap3 = mysql_num_rows(mysql_query("SELECT * FROM data_laporan WHERE status='TAHAP 3'"));
    $tahap4 = mysql_num_rows(mysql_query("SELECT * FROM data_laporan WHERE status='TAHAP 4'"));
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
                    <div class="table-style col-md-8">
                        <h2>Laporan</h2><hr>
                        <table class="table table-style-4 table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nomor Polisi</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                while($data=mysql_fetch_assoc($query)){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><a href=""><?php echo $data['nopol'];?></a></td>
                                    <td><?php echo $data['tanggaldilaporkan'];?></td>
                                    <td><?php if($data['status'] == "TAHAP 4"){ ?>
                                            <label class="label label-success">TAHAP 4</label><?php
                                        }else{
                                            echo $data['status'];     
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php        
                                }?>
                            </tbody>
                        </table>
                       
                        
                        <div class="ow-pagination">
                            <nav class="ow-pagination-2">
                                <ul class="pagination">
                                     <?php for ($i=1; $i<=$pages ; $i++){ ?>
                                    <li><a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li><?php } ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ribbon-style ribbon-style-4 container-fluid no-padding">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ribbon-box">
                                    <div class="ribbon-content">
                                        <i class="fa fa-gears"></i>
                                        <span>ADMIN</span>
                                        <ul>
                                            <li><?php echo $tahap1;?> Laporan Tahap 1</li>
                                            <li><?php echo $tahap2;?>  Laporan Tahap 2</li>
                                            <li><?php echo $tahap3;?>  Laporan Tahap 3</li>
                                            <li><?php echo $tahap4;?>  Laporan Tahap 4</li>
                                        </ul>
                                    </div>
                                    <div class="shape"></div>
                                </div>
                            </div>
                        </div><!-- Row /- -->
                    </div><!-- Ribbon Holder 4 -->
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