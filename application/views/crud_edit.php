<!doctype html>
<html>
<head lang="en">
	<base href="<?=base_url()?>">
	<base src="<?=base_url()?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
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
		  </div>
	</nav>
	<div class="container">
		<div class="row">
        <div class="col-md-12 order-md-1">
        	<br>
          <h4 class="mb-3">Ubah Data Dokter</h4>
          <form class="needs-validation" action="<?php echo base_url('index.php/DataDokter/update'); ?>" method="POST">
          <?php foreach ($query->result() as $baris) { ?>
            <div class="row">
              <div class="col-md-6 mb-3">
              	<input type="hidden" name="idDokter" value="<?php echo $baris->idDokter; ?>">
                <label for="firstName">Nama Lengkap</label>
                <input type="text" class="form-control" name="namaDokter" value="<?php echo $baris->namaDokter;?>"  placeholder="" value="" required="">
              </div>

              <div class="col-md-6 mb-3">
                <label for="lastName">Nomor Ijin Praktek</label>
                <input type="text" class="form-control" name="noIjinPraktek" value="<?php echo $baris->noIjinPraktek; ?>" placeholder="" value="" required="">
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Jenis Kelamin</label>
              <div class="input-group">
              	<select name="jenisKelamin" class="form-control">
              		<option value="<?php echo $baris->jenisKelamin;?>"><?php echo $baris->jenisKelamin;?></option>
              		<option value="P">L</option>
              		<option value="L">P</option>
              	</select>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempatLahir" value="<?php echo $baris->tempatLahir;?>" placeholder="" value="" required="">
              </div>

              <div class="col-md-6 mb-3">
                <label for="lastName">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tglLahir" value="<?php echo $baris->tglLahir; ?>" placeholder="" value="" required="">
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Alamat</label>
              <textarea class="form-control" name="alamat" ><?php echo $baris->alamat; ?></textarea>
            </div>

            <div class="mb-3">
              <label for="address">No Telp</label>
              <input type="text" class="form-control" name="noTelp" value="<?php echo $baris->noTelp; ?>">
            </div>

            
              </div>
            </div>
            <div class="row">
            <div class="col-md-6">
            <a href="index.php"class="btn btn-primary btn-lg btn-block">Cancel</a>
            </div>
            <div class="col-md-6">
            <button class="btn btn-success btn-lg btn-block" type="submit">Simpan Perubahan</button>
            </div>
            
            </div>
            <?php } ?>
          </form>
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