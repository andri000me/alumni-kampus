<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tambah Data Kecamatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Tambah Data Kecamatan</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Tambah Data Kecamatan</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/tambah_kecamatan" method="post">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="nama_kecamatan">Nama Kecamatan</label>
    							<input type="text" name="nama_kecamatan" class="form-control" id="nama_kecamatan" placeholder="Enter Nama Kecamatan">
    						</div>
    					</div>
    					<!-- /.box-body -->

    					<div class="box-footer">
    						<button type="submit" id="submit" name="submit" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Menyimpan Data Ini ?')">Submit</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
    					</div>
    				</form>
    			</div>


    		</div>
    	</div>
    </section>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>