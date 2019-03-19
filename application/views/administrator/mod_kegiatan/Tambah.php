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
    					<h3 class="box-title">Tambah Data Kegiatan</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/tambah_kegiatan" method="post" enctype="multipart/form-data">
    					<div class="box-body">
    						<div class="form-group">
                                <label>Judul Kegiatan</label>
                                <input type="text" name="judul_kegiatan" class="form-control" id="judul_kegiatan" placeholder="Enter Judul Kegiatan">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="deskripsi" id="editor1"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kegiatan</label>
                                <select class="form-control" id="jenis_kegiatan" name="jenis_kegiatan">
                                    <option>-- Pilih Jenis Kegiatan --</option>
                                    <option value="aksi sosial">Aksi Sosial</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto Kegiatan</label>
                                <input type="file" name="foto_kegiatan" id="foto_kegiatan" class="form-control">
                            </div>
                            <div class="form-group" id="preview">

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
<script src="<?=base_url()?>assets/js/ckeditor/ckeditor.js"></script>

<script>
    $(function () {

        CKEDITOR.replace('editor1');

        $("#foto_kegiatan").on('change', function() {
            var total_file = document.getElementById('foto_kegiatan').files.length;
            for (var i = 0; i < total_file; i++) {
                $("#preview").html("<center><img src='"+URL.createObjectURL(event.target.files[i])+"' width='500'></center>");
                console.log(event.target.files[i])
            }
        });
    });
</script>