<!doctype html>
<html>
<head lang="en">
	<base href="<?=base_url()?>">
	<base src="<?=base_url()?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- Js untuk modal -->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<!-- end -->
	<title>Crud Klinik</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand">Crud Klinik</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0" action="<?php echo base_url('index.php/DataDokter/hasil');?>" action="GET">
		      <input class="form-control mr-sm-2" type="search" placeholder="Cari Nama Dokter" name="cari" aria-label="Search">
		      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Cari"></button>
		    </form>
		    <li class="nav">
		        <!-- Tombol untuk menampilkan modal-->
				<button type="button" class="btn btn-primary" data-toggle="modal" style="margin-left:5px;"data-target="#tambahData">Tambah Data</button>
				<!-- Modal -->
		      </li>
		  </div>
	</nav>
	<div class="container">
		<div class="col">
		
		<div id="tambahData" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- konten modal-->
				<div class="modal-content">
					<!-- heading modal -->
					<div class="modal-header">
						Tambah Data Dokter
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- body modal -->
					<div class="modal-body">
						<!-- ayang form buat insert datanya pake form ini aja yah
						nama varibale di setiap form belum aku kasih nama jadi nanti kamu kasih nama yah ay, nama variable nya masih aku kasih tanda #
						ay yg jenis kelamin itu aku pake enum jadi data yang di input juga harus sama -->
				 		<form action="<?php echo base_url('index.php/DataDokter/simpan');?>" method="POST">
				 		  <div class="form-group">
				            <label for="recipient-name" class="col-form-label">No Ijin Praktek</label>
				            <input type="text" class="form-control" name="noIjinPraktek" required>
				          </div>
				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Nama Dokter</label>
				            <input type="text" class="form-control" name="namaDokter" required>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label" required>Jenis Kelamin</label>
				            <select name="jenisKelamin" class="form-control" >
				            	<option value="L">L</option>
				            	<option value="P">P</option>
				            
				            </select>
				          </div>

				          <div class="form-group">
				            <label for="message-text" class="col-form-label">Tempat Lahir</label>
				            <textarea class="form-control" name="tempatLahir"></textarea>
				          </div>

				          <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Tanggal Lahir</label>
				            <input type="date" class="form-control" name="tglLahir">
				          </div>

				          <div class="form-group">
				           <label for="recipient-name" class="col-form-label" required>Alamat</label>
				           <textarea class="form-control" name="alamat"></textarea>
				          </div>

				           <div class="form-group">
				            <label for="recipient-name" class="col-form-label">No Telp</label>
				            <input type="text" class="form-control" name="noTelp" required placeholder="Nomor Hp 10-12 Digit"pattern="^\d{10,12}$">
				          </div>

				          
				          <div class="form-group">
				            <input type="submit" class="form-control" value="simpan">
				          </div>

				        </form>
					</div>
					<!-- footer modal -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal	 -->
		<!-- data dokter -->
		<center><h1>Data Dokter di klinik Unjani</h1></center>

		<div class="row">

			<?php
			    $no=1;
			    foreach ($query->result() as $baris) {
			?>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<img src="assets/images/orang.png" class="bd-placeholder-img card-img-top" width="100%" height="225">
		            <div class="card-body">
		            	<h5><?php echo $baris->namaDokter;?></h5>
		            	  No Ijin Praktek = <?php echo $baris->noIjinPraktek;?>
		            	  <br>
			              Jenis Kelamin = <?php echo $baris->jenisKelamin;?>
			              <br>
			              Tempat Lahir = <?php echo $baris->tempatLahir;?>
			              <br>
			              Tanggal Lahir = <?php echo $baris->tglLahir;?>
			              <br>
			              No Telp = <?php echo $baris->noTelp;?>
			              <br>
			              Alamat = <?php echo $baris->alamat;?>
			              <br>
		              <div class="d-flex justify-content-between align-items-center">
		                <div class="btn-group">
		                  <?php echo anchor('DataDokter/hapus/'.$baris->idDokter,'<button style="margin-top:5px;" type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>'); ?>
		                  <?php echo anchor('DataDokter/edit/'.$baris->idDokter,'<button style="margin-left:10px; margin-top:5px;" type="button" class="btn btn-sm btn-outline-secondary">Edit</button>'); ?>
		                  
		                </div>
		                
		              </div>
		            </div>
				</div>

			</div>
			<?php 
			} 
			?>
		</div>
		</div>

	</div>
	<footer class="footer mt-auto py-3"style="color:white; background:black;">
	  <div class="container">
	    <span class="text-muted" style="color:white"><center>Dibuat Oleh Kelompok 3 || Angga Fantiya Hermawan & Devi Fajar Wati</center></span>
	  </div>
	</footer>

</body>
</html>