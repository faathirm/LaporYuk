<?php 
    include('inc/start_page.php');
    include('inc/header.php');
?>
	<main>
		<!-- Slider Section -->
		<div id="home-revslider" class="homeslider-section-1 container-fluid no-padding ">
			<!-- START REVOLUTION SLIDER 5.0 -->
			<div class="rev_slider_wrapper">
				<div id="home-slider1" class="rev_slider" data-version="5.0">
					<ul> 
						<li data-transition="fade" data-slotamount="1"  data-easein="default" data-easeout="default" data-masterspeed="1500"> 
							<!-- MAIN IMAGE -->
							<img src="images/img-gallery/slider1.jpg" alt="home1"  width="1920" height="983"> 
							
							<!-- LAYER NR. 1 -->
							<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-1" 
								data-x="['left','left','left','left']" data-hoffset="['380','380','380','380']" 
								data-y="['top','top','top','top']"  data-voffset="['390','390','390','390']" 
								data-fontsize="['100','100','100','100']"
								data-lineheight="['120','120','120','120']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="1000" 
								data-splitin="chars" 
								data-splitout="none" 
								data-responsive_offset="on"
								data-elementdelay="0.05"							
								style="z-index:6; position:relative; color:#fff; font-weight:700; letter-spacing:0; font-family: 'Montserrat', sans-serif; text-transform: uppercase;">#IndonesiaTertib
							</div>
						</li>
						<li data-transition="fade" data-slotamount="1"  data-easein="default" data-easeout="default" data-masterspeed="200"> 
							<!-- MAIN IMAGE -->
							<img src="images/img-gallery/slider2.jpg" alt="home1"  width="1920" height="983">    
						</li>
					</ul>
				</div><!-- END REVOLUTION SLIDER -->
			</div><!-- END OF SLIDER WRAPPER -->
		</div><!-- Slider Section /- -->
		<div class="padding-50"></div>
		<!-- Process Section /- -->
		<div class="container-fluid no-padding">
			<div class="container">
				<div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">
						<form class="form-style-4 row" action="daftar.php" method="POST">
                            <div class="col-md-12 text-center">
                                <h2>Daftarkan Laporanmu Sekarang!</h2>
                                <small>Buat akun sekarang dan terima bayaran dari laporan yang kamu buat!</small>
                                <div class="padding-20"></div>
                            </div>
							<div class="form-group col-md-10 col-sm-10 col-xs-12">
								<input type="email" required="" placeholder="Email" class="form-control" name="email">
							</div>
							<div class="form-group col-md-2 col-sm-2 col-xs-12">
								<button type="submit" title="Submit Button">Daftar</button>
							</div>
						</form>
					</div>
                    </div>
                </div>
			</div><!-- Container -->
			<div class="padding-30"></div>
		</div><!-- Process Section /- -->
		
		<div class="container">
            <div class="process-section process-style-1">
				<div class="block-title text-center">
					<h5>Bagaimana Caranya?</h5>
				</div>
				<!-- Row -->
				<div class="row">
					<div class="process-border">
						<div class="col-md-3 col-sm-3 col-xs-5">
							<div class="process-box">
								<i class="fa fa-camera " aria-hidden="true"></i>
								<h3>Step 1</h3>
								<p>Daftarkan laporanmu dengan menyatakan bukti-bukti yang dibutuhkan.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-5">
							<div class="process-box">
								<i class="fa fa-clock-o" aria-hidden="true"></i>
								<h3>Step 2</h3>
								<p>Tunggu laporanmu untuk di setujui dan pelanggar membayar denda.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-5">
							<div class="process-box">
								<i class="fa fa-check" aria-hidden="true"></i>
								<h3>Step 3</h3>
								<p>Laporan disetujui, pembayar telah membayar denda. Pembayaran siap dikirimkan kepada pelapor.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-5">
							<div class="process-box">
								<i class="fa fa-money" aria-hidden="true"></i>
								<h3>Step 4</h3>
								<p>Pembayaran dikirimkan, Pelapor menerima pembayaran melalui rekening bank yang telah didaftarkan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		<hr>
		<div class="padding-20"></div>
		
		<div class="text-tab-section container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12 quotes-section">
							<div class="block-title">
								<h5>Siapa Kami</h5>
							</div>
							<p>Kami merupakan perusahaan startup yang memiliki tujuan untuk membuat dunia lebih baik lagi. Dimulai dari negara kami (Indonesia) kami mengembangkan sebuah aplikasi untuk mendapatkan "Bayaran" dari laporan seputar pelanggar lalu lintas di jalanan.</p>
                            <p>Misi kami adalah dapat membuat para pelanggar jera dan bisa menggunakan jalan umum dengan bijak dan taat berlalu lintas.</p>
                            <p>Kami memberikan bayaran sebanyak 20% dari total denda yang harus dibayar oleh pelanggar kepada para pelapor yang telah disetujui.</p>
					</div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="block-title">
								<h5>Status Laporan</h5>
				        </div>
                        <div class="contact-form">
						<form class="form-style-4 row" action="status.php" method="GET">
							<div class="form-group col-md-12">
								<input type="email" required="" placeholder="Email" class="form-control" name="email">
							</div>
                            <div class="form-group col-md-12">
								<input type="text" required="" placeholder="Phone Number" class="form-control" name="nomortelepon">
							</div>
							<div class="form-group col-md-12">
								<button type="submit" class="btn-block" title="Submit Button">Periksa</button>
							</div>
						</form>
					</div>
                    </div>
				</div><!-- Row /- -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="quote-style-1">
                            <blockquote>If you are the kind of person who is waiting for the 'right' thing to happen, you might wait for a long time. It's like waiting for all the traffic lights to be green for five miles before starting the trip.<span>Robert Kiyosaki</span></blockquote>
                        </div>
                    </div>
                </div>
			</div><!-- Container /- -->
		</div>
		
		<div id="counter_section-3" class="counter-section counter-section-3 container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<div class="counter-box">
						<h3><span class="count" id="statistics_3_count-1" data-statistics_percent="760">&nbsp;</span></h3>
						<p>Laporan Dibuat</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<div class="counter-box">
						<h3><span class="count" id="statistics_3_count-2" data-statistics_percent="70">&nbsp;</span></h3>
						<p>Laporan Minggu Ini</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<div class="counter-box">
						<h3><span class="count" id="statistics_3_count-3" data-statistics_percent="570">&nbsp;</span></h3>
						<p>Pelapor Dibayar</p>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Counter Section 3 -->
		
        
        <!-- Testimonials Section 2 -->
			<div class="testimonials-section-2 container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<div class="testimonial-style-4">
							<div class="col-md-12">
								<div class="testimonial-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquet lectus interdum, sollicitudin tellus nec, fermentum nibh. Aenean tincidunt libero sed urna blandit viverra sit amet in odio. Pellentesque varius iaculis turpis in blandit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam non tristique augue. Phasellus eu rhoncus velit.</p>
									<h3>Jono - Mahasiswa</h3>
								</div>
							</div>
							<div class="col-md-12">
								<div class="testimonial-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquet lectus interdum, sollicitudin tellus nec, fermentum nibh. Aenean tincidunt libero sed urna blandit viverra sit amet in odio. Pellentesque varius iaculis turpis in blandit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam non tristique augue. Phasellus eu rhoncus velit.</p>
									<h3>Ninda - Karyawan</h3>
								</div>
							</div>
						</div>
					</div><!-- Row -->
				</div><!-- Container /- -->
			</div><!-- Testimonials Section 2 -->
        
	</main>

<?php 
    include('inc/footer.php');
    include('inc/page_end.php');     
?>