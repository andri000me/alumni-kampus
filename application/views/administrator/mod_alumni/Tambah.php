<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Tambah Data Alumni</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/tambah_alumni" method="post">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="nim">NO KTP</label>
    							<input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Enter Nomor KTP">
    						</div>
    						<div class="form-group">
    							<label for="nama_lengkap">Nama Lengkap</label>
    							<input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Enter Nama Lengkap">
    						</div>
    						<div class="form-group">
    							<label for="email">Email</label>
    							<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
    						</div>
    						<!-- <div class="form-group">
    							<label for="jk">Jenik Kelamin</label>
    							<div class="radio">
    								<label>
    									<input type="radio" name="jk" value="L">
    									Laki - Laki
    								</label>
    								<br>
    								<label>
    									<input type="radio" name="jk" value="P">
    									Perempuan
    								</label>
    							</div>
    						</div> -->
    						<div class="form-group">
    							<label>Alamat Lengkap</label>
    							<textarea class="form-control" rows="3" placeholder="Enter ..." name="alamat"></textarea>
    						</div>
    						<div class="form-group">
    							<label>Fakultas</label>
    							<select class="form-control" id="kecamatan" name="kecamatan">
    								<option>-- Pilih Kecamatan --</option>
    								<?php 
    									foreach ($kecamatan as $k) { ?>
    										<option value="<?=$k['id_kecamatan']?>"><?=$k['nama_kecamatan']?></option>
    								<?php } ?>
    							</select>
    						</div>
    						<div class="form-group">
    							<label>Desa</label>
    							<select class="form-control" id="desa" name="desa">
    							</select>
    						</div>
    						<div class="form-group">
    							<label for="tahun_masuk">Tahun Masuk</label>
    							<input type="text" name="tahun_masuk" class="form-control" id="tahun_masuk" placeholder="Enter Nomor Tahun Masuk">
    						</div>
    						<div class="form-group">
    							<label for="tahun_lulus">Tahun Lulus</label>
    							<input type="text" name="tahun_lulus" class="form-control" id="tahun_lulus" placeholder="Enter Nomor Tahun Lulus">
    						</div>
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Enter Nomor Tahun Lulus">
                            </div>
    						<div class="form-group">
    							<label for="no_hp">Pekerjaan</label>
    							<input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Enter Nomor Handphone">
    						</div>
                            <div class="form-group">
                                <label for="nama_lengkap">Bidang Usaha</label>
                                <input type="text" name="bidang_usaha" class="form-control" id="bidang_usaha" placeholder="Enter Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Akun Facebook</label>
                                <input type="text" name="akun_fb" class="form-control" id="akun_fb" placeholder="Enter Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Nama Lengkap">
                            </div>
    					</div>
    					<!-- /.box-body -->

    					<div class="box-footer">
    						<button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
    					</div>
    				</form>
    			</div>


    		</div>
    	</div>
    </section>
</div>

<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.4.0
	</div>
	<strong>Copyright © 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
reserved.</strong>
</footer>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script>
	$(function () {		

		$("#kecamatan").on('change', function() {
			$.post('<?=base_url()?>administrator/get_desa', {id: this.value}, (result) => {
				$("#desa").find("option").remove();
				$.map(result, function(val, i) {
					$('#desa').append(
						`
						<option value='${val.id_desa}'>${val.nama_desa}</option>
						`
						)
				})
			})
		})

	})
</script>