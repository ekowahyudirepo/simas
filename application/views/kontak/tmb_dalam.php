<!-- Main content -->
    <section class="content">
    <div class="callout callout-info">
	    <h4>Tip!</h4>
	    <p>Periksa isian dengan teliti sebelum menyimpan</p>
    </div>

    <div class="row">
    	<div class="col-md-12">
    	<?php echo $this->session->flashdata('alert'); ?>
          <!-- Horizontal Form -->
          <div class="box box-info">
         	<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-plus"></i> Tambah Kontak Sub Bagian</h3>
            </div>
           
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= base_url() ?>kontak_dalam/add" method="POST" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Kontak : </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="inputPassword3" placeholder="entri.." required="">
                    <b class="note"> * Wajib diisi</b>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url() ?>kontak_dalam" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
                <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
                <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Batal</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
    </div>
    </section>
