<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tambah Data Lembaga Alumni
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Tambah Data Lembaga Alumni</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Tambah Data Lembaga Alumni</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/tambah_lembaga" method="post" enctype="multipart/form-data">
    					<div class="box-body">
    						<div class="form-group">
    							<label for="nama_lembaga">Nama Lembaga</label>
    							<input type="text" name="nama_lembaga" class="form-control" id="nama_lembaga" placeholder="Enter Nama Lembaga">
    						</div>
                            <div class="form-group">
                                <label for="alamat_lembaga">Alamat Lembaga</label>
                                <textarea name="alamat_lembaga" id="alamat_lembaga" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="email_lembaga">Email</label>
                                <input type="email" name="email_lembaga" id="email_lembaga" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telepon_lembaga">Telepon</label>
                                <input type="text" name="telepon_lembaga" id="telepon_lembaga" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label for="logo_lembaga">Logo</label>
                                <input type="file" name="logo_lembaga" id="logo_lembaga" class="form-control">
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