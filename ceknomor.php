<?php 
    include('inc/start_page.php');
    include('inc/header.php');
    include('proses/koneksi.php');

    if (empty($_GET)){
        echo '<script>window.location.href = "index.php";</script>';
    }else{
        $nopol = $_GET['nopol']; 
    

    //tampildatadiri
    $sql = "SELECT * FROM data_laporan WHERE nopol='$nopol' ORDER BY tanggaldilaporkan DESC ";
    
        
    $row = mysql_fetch_assoc(mysql_query($sql));
    $query = mysql_query($sql);
    if(mysql_num_rows($query) <= 0){ //jika data tidak ada
        echo '<script>window.location.href = "index.php";</script>';  
    }else{ //jika ada
    
    
?>
    <div class="page-banner"></div>
    <div class="page-breadcrumb container-fluid no-padding">
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="index.php" title="Home">Home</a></li>
					<li><a href="ceknomor.php">Ceknomor</a></li>
				</ol>
			</div>
		</div><!-- Breadcrumb /- -->
		<!-- Contact Form -->
	<main>
		<div class="padding-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 table-style table-responsive">
                    <table class="table table-style-4 table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Tanggal Kejadian</th>
								<th>Jam Kejadian</th>
								<th>Tanggal Dilaporkan</th>
								<th>Foto</th>
							</tr>
						</thead>
						<tbody>
                            <?php 
                            $nomor = 1;
                            while($data=mysql_fetch_assoc($query)){
                            ?>
							<tr>
								<th scope="row"><?php echo $nomor; ?></th>
								<td><?php echo $data['tanggalkejadian'];?></td>
								<td><?php echo $data['jamkejadian'];?></td>
								<td><?php echo $data['tanggaldilaporkan'];?></td>
								<td><a class="label label-danger" data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>"><i class="fa fa-camera"></i></a></td>
                                <div id="myModal<?php echo $data['id']; ?>" class="modal fade" role="dialog">
                                  <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-body">
                                        <p><img src="images/fotoupload/<?php echo $data['gambar']; ?>" class="img-rounded"></p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>

                                  </div>
                                </div>
							</tr>
                            <?php
                            $nomor++;
                            }
                            ?>
						</tbody>
					</table>
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