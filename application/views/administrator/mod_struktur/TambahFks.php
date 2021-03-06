<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tambah Data Struktur FKSJ
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Tambah Data Struktur FKSJ</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Tambah Data Struktur FKSJ</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/tambah_struktur?lembaga=<?=$_GET['lembaga']?>" method="post">
    					<div class="box-body">
                            <!-- <input type="hidden" name="nis" id="nis"> --> <input type="hidden" name="id_lembaga_alumni" id="id_lembaga_alumni" value="<?=$_GET['lembaga']?>">
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input type="text" name="nis" class="form-control" id="nis" placeholder="Enter NIS">
                            </div>
    						<div class="form-group">
    							<label for="nama">Nama</label>
    							<input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Nama" readonly>
    						</div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <select class="form-control" name="jabatan">
                                    <option>-- Pilih Jabatan --</option>
                                    <?php 
                                        foreach ($jabatan as $j) { ?>
                                            <option value="<?=$j['id_jabatan']?>"><?=$j['nama_jabatan']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="devisi">Devisi</label>
                                <select class="form-control" name="devisi">
                                    <option>-- Pilih Devisi --</option>
                                    <?php 
                                        foreach ($devisi as $d) { ?>
                                            <option value="<?=$d['id_devisi']?>"><?=$d['nama_devisi']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="masa_bakti">Masa Bakti</label>
                                <input type="text" name="masa_bakti" class="form-control" id="masa_bakti" placeholder="Enter Masa Bakti">
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
<script src="<?=base_url()?>assets/js/jquery-ui.js"></script>

<script>
    $(function(){

        $("#submit").attr('disabled', true);

        $( "#nis" ).autocomplete({
            source: "<?=base_url()?>administrator/get_fks_anggota"
        });

        $("#nis").on('input', function() {
            if ($("#nis").val() == '') {
                $("#submit").attr('disabled', true);
                $("#nama").val('');
            }
        })

        $("#nis").on('keydown', function(e) {
           if(e.which == 13) {
                let nis = $("#nis").val();
                $.post("<?=base_url()?>administrator/get_anggota_fks_by_id", {nis: nis}, (result) => {
                    if (result == null) {
                        alert("SALAH");
                    } else {
                        $.post("<?=base_url()?>administrator/get_struktur_fks", {nis: result.nis},(response) => {
                            if (response == "Fail") {
                                alert("Alumni Ini Telah Menjadi Struktur dari  Lembaga Lain");
                                $("#submit").attr('disabled', true);
                            } else {
                                $("#submit").attr('disabled', false);
                                $("#nama").val(result.nama);
                                // $("#id_alumni").val(result.id_alumni);
                            }
                        })                       
                    }                    
                })
            }
        })

    })
</script>