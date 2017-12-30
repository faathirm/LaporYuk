<?php 
    include('inc/start_page.php');
    include('inc/header.php');
    include('proses/koneksi.php');

    if (empty($_GET)){
        echo '<script>window.location.href = "index.php";</script>';
    }else{
        $emailpelapor = $_GET['email'];
        $nomorpelapor = $_GET['nomortelepon'];    
    

    //tampildatadiri
    $sql = "SELECT * FROM data_laporan WHERE email='$emailpelapor' AND nomortelepon='$nomorpelapor'";
    
        
    $row = mysql_fetch_assoc(mysql_query($sql));
    $query = mysql_query($sql);
    if(mysql_num_rows($query) <= 0){
        echo '<script>window.location.href = "index.php";</script>';    
    }else{
    
    
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
                    <!-- Expandable Background 2 -->
                    <div class="expandable-style expandable-section-style-2 container-fluid no-padding">
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
                                        <span><?php echo $row['namapelapor'];?></span>
                                        <ul>
                                            <li><?php echo $row['email']?></li>
                                            <li><?php echo $row['nomortelepon'] ?></li>
                                            <li><?php echo $row['bank']; ?> / <?php echo substr($row['nomorrekening'],0,-3);?>XXX</li>
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
    }
    include('inc/footer.php');
    include('inc/page_end.php');     
?>