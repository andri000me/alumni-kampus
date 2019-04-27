<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Edit Data Alumni
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Alumni</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-6">

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h3 class="box-title">Form Edit Data Alumni</h3>
    				</div>
    				<!-- /.box-header -->
    				<!-- form start -->
    				<form action="<?=base_url()?>administrator/edit_alumni/<?=$a['id_alumni']?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_alumni" value="<?=$a['id_alumni']?>">
    					<div class="box-body">
    						<div class="form-group">
                                <label for="nim">NO KTP *</label>
                                <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Enter Nomor KTP" value="<?=$a['no_ktp']?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap *</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Enter Nama Lengkap" value="<?=$a['nama']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="<?=$a['email']?>" required>
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
    							<label>Alamat Lengkap *</label>
    							<textarea class="form-control" rows="3" placeholder="Enter ..." name="alamat" required><?=$a['alamat']?></textarea>
    						</div>
    						<div class="form-group">
    							<label>Kecamatan *</label>
    							<select class="form-control" id="kecamatan" name="kecamatan" required>

    								<option>-- Pilih Kecamatan --</option>
    								<?php 
    									foreach ($k as $k) { 
                                            if ($k['id_kecamatan'] == $a['id_kecamatan']) { ?>
                                                <option value="<?=$k['id_kecamatan']?>" selected><?=$k['nama_kecamatan']?></option>
                                            <?php } else { ?>
                                                <option value="<?=$k['id_kecamatan']?>"><?=$k['nama_kecamatan']?></option>
                                            <?php } 
                                        } ?>
    							</select>
    						</div>
    						<div class="form-group">
    							<label>Desa *</label> <input type="hidden" id="desa_id">
    							<select class="form-control" id="desa" name="desa" required>
                                    
    							</select>
    						</div>
    						<div class="form-group">
                                <label for="tahun_masuk">Tahun Masuk *</label>
                                <input type="text" name="tahun_masuk" class="form-control" id="tahun_masuk" placeholder="Enter Nomor Tahun Masuk" value="<?=$a['thn_mondok']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="tahun_lulus">Tahun Lulus *</label>
                                <input type="text" name="tahun_lulus" class="form-control" id="tahun_lulus" placeholder="Enter Nomor Tahun Lulus" value="<?=$a['thn_keluar']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon *</label>
                                <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Enter Nomor Tahun Lulus" value="<?=$a['telepon']?>" required>
                            </div>
                            
                            <!-- <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="<?=$a['username']?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" value="<?=$a['password']?>">
                            </div> -->                            
    					</div>
    					<!-- /.box-body -->
    			</div>
    		</div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan *</label>
                            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Enter Nomor Handphone" value="<?=$a['pekerjaan']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="bidang_usaha">Bidang Usaha</label>
                            <input type="text" name="bidang_usaha" class="form-control" id="bidang_usaha" placeholder="Enter Bidang Usaha" value="<?=$a['bidang_usaha']?>">
                        </div>
                        <div class="form-group">
                            <label for="bidang_usaha">Ganti Foto Usaha (bila perlu)</label>
                            <input type="file" name="foto_usaha" class="form-control" id="foto_alumni">
                            <small>Foto Usaha Lihat <a href="<?=base_url()?>assets/foto/alumni/<?=$a['foto_usaha']?>" target="blank">disini</a></small>
                        </div>
                        <div class="form-group">
                            <label for="akun_fb">Akun Facebook</label>
                            <input type="text" name="akun_fb" class="form-control" id="akun_fb" placeholder="Enter Akun Facebook" value="<?=$a['akun_fb']?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="foto_alumni">Ganti Foto Diri (bila perlu)</label>
                            <input type="file" name="foto_alumni" class="form-control" id="foto_alumni">
                            <small>Lihat Foto <a href="<?=base_url()?>assets/foto/alumni/<?=$a['foto']?>" target="blank">disini</a></small>
                        </div>
                        <div class="box-footer">
                            <button type="submit" id="update" name="update" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Mengupdate Data Ini ?')">Update</button> <button type="button" id="cancle" name="cancle" class="btn btn-primary" onclick="self.history.back()">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form method="post" action="<?=base_url()?>administrator/reset_password">
            <input type="hidden" name="id_alumni" value="<?=$a['id_alumni']?>">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                       <div class="form-group">
                        <label for="nama_lengkap">Username * </label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="<?=$a['username']?>" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Reset Password (bila perlu)</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                        <small style="color: red">Password Minimal 3 Digit</small>
                    </div>
                    <div class="box-footer">
                      <button type="submit" id="resetpwd" name="resetpwd" class="btn btn-primary" onclick="return confirm('Anda Yakin Ingin Mereser Password ?')">Reset Passrowd</button>
                  </div>  
                </div>                
            </div>
        </form>            

        
    	</div>
    </section>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script>
	$(function () {		

        let kecamatan_id = $("#kecamatan").val();
        let desa_id = $("#desa_id").val();

        $.post('<?=base_url()?>administrator/get_desa', {id: kecamatan_id}, (result) => {
            console.log(result);
            $("#desa").find("option").remove();
            $.map(result, function(val, i) {
                if (val.id_desa == desa_id) {
                  $('#desa').append(
                    `
                    <option value='${val.id_desa}' selected>${val.nama_desa}</option>
                    `  
                    )  
                } else {
                    $('#desa').append(
                        `
                        <option value='${val.id_desa}'>${val.nama_desa}</option>
                        `  
                        )
                }
            })
        })

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

        $("#password").on('focusout', function() {
            if ($("#password").val().length < 3) {
                alert('Password Harus Lebih Dari 3 Digit');
                $("#submit").attr('disabled', true);
            } else {
                $("#submit").attr('disabled', false);
            }
        })

	})
</script>