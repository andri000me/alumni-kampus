<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Korcam
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Data Korcam</li>
      </ol>
    </section>

    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
                <?php if ($this->session->flashdata('tambahDataSukses')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                        <?php echo $this->session->flashdata('tambahDataSukses'); ?>
                    </div>
                <?php } elseif ($this->session->flashdata('hapusDataSukses')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                        <?php echo $this->session->flashdata('hapusDataSukses'); ?>
                    </div>
                <?php } elseif ($this->session->flashdata('updateDataSukses')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                        <?php echo $this->session->flashdata('updateDataSukses'); ?>
                    </div>
                <?php } ?>
    			<div class="box box-primary">
    				<div class="box-header">
    					<h3 class="box-title">Tabel Data Korcam</h3>
    				</div>
    				<div class="box-body">
    					<table id="example1" class="table table-bordered table-striped">
    						<thead>
    							<tr>
    								<td colspan="7">
    									<a href="<?=base_url()?>administrator/tambah_korcam" class="btn btn-block btn-primary">Tambah Data</a>
    								</td>
    							</tr>
    							<tr>
    								<th>NO</th>
    								<th>Nama</th>
                                    <th>Korcam</th>
                                    <th>Status</th>
    								<th>Actions</th>
    							</tr>
    						</thead>
    						<tbody>
    							<?php 
    							$no = 1 ;
    							foreach ($korcam as $l) { ?>
    								<tr>
    									<td><?=$no?></td>
    									<td><?=$l['nama']?></td>
                                        <td><?=$l['nama_kecamatan']?></td>
                                        <td>
                                            <?php if ($l['status'] == "Y") {
                                                echo "Aktif";
                                            } else {
                                                echo "Tidak Aktif";
                                            } ?>
                                        </td>
    									<td>
    										<div class="btn-group">
    											<a href="<?=base_url()?>administrator/edit_korcam/<?=$l['id_korcam']?>" class="btn btn-success">Edit</a>
    											
    											<button type="button" class="btn btn-default" disabled=""><i class="fa fa-align-center"></i></button>

    											<a href="<?=base_url()?>administrator/hapus_korcam/<?=$l['id_korcam']?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>

                                                <button type="button" class="btn btn-default" disabled=""><i class="fa fa-align-center"></i></button>

                                                <?php 
                                                    if ($l['status'] == "Y") { ?>
                                                        <a href="<?=base_url()?>administrator/nonaktif_korcam/<?=$l['id_korcam']?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menonaktifkan Data Ini ?')">Nonaktifkan</a>
                                                    <?php } else { ?>
                                                        <a href="<?=base_url()?>administrator/aktifkan_korcam/<?=$l['id_korcam']?>" class="btn btn-success" onclick="return confirm('Anda Yakin Ingin Mengaktifkan Data Ini ?')">Aktifkan</a>
                                                <?php } ?>
    										</div>
    									</td>
    								</tr>
    							<?php $no++; } ?>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable();
  })
</script>