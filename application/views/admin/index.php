<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/daun-berguguran.js" type="text/javascript"></script>
<div class="page-header">
  <h3 style="font-family: 'Georgia', serif; margin-top: 65px; font-size: 32px; color: black; text-shadow: 3px 2px 1px grey;">Dashboard</h3>
</div>
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="panel " style="background-color: #dddddd;">
      <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3">
          <i class="glyphicon glyphicon-book"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge">
            <font size="18"><b><?php echo $this->M_perpus->get_data('buku')->num_rows(); ?></b></font>
          </div>
              <div><b>Jumlah Buku yang terdaftar</b></div>
            </div>
          </div>
        </div>
        <a href="<?php echo base_url().'admin/buku' ?>">
          <div class="panel-footer" style="background-color: #2c2c2c; color: white;">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="panel " style="background-color: #eeeeee;">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                <font size="18"><b><?php echo $this->M_perpus->get_data('anggota')->num_rows(); ?></b></font>
              </div>
                  <div><b>Jumlah Anggota yang terdaftar</b></div>
                </div>
              </div>
            </div>
            <a href="<?php echo base_url().'admin/anggota' ?>">
              <div class="panel-footer" style="background-color: #2c2c2c; color: white;">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="panel " style="background-color: #ffffff;">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="glyphicon glyphicon-sort"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">
                    <font size="18"><b><?php echo $this->M_perpus->edit_data(array('status_peminjaman'=>0),'transaksi')->num_rows(); ?></b></font>
                  </div>
                      <div><b>Peminjaman belum selesai</b></div>
                    </div>
                  </div>
                </div>
                <a href="<?php echo base_url().'admin/peminjaman' ?>">
                  <div class="panel-footer" style="background-color: #2c2c2c; color: white;">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="panel " style="background-color: #cccccc;">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="glyphicon glyphicon-ok"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">
                        <font size="18"><b><?php echo $this->M_perpus->edit_data(array('status_peminjaman'=>1),'transaksi')->num_rows(); ?></b></font>
                      </div>
                          <div><b>Peminjaman Sudah selesai</b></div>
                        </div>
                      </div>
                    </div>
                    <a href="<?php echo base_url().'admin/peminjaman' ?>">
                      <div class="panel-footer" style="background-color: #2c2c2c; color: white;">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                        <div class="clearfix"></div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-lg-4">
                  <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #2c2c2c;">
                      <h3 class="panel-title" style="font-size:18px;font-weight:bold; color: white;"><i class="glyphicon glyphicon-random arrow-right" style="width: 30px;"></i> Buku</h3>
                    </div>
                        <div class="panel-body">
                          <div class="list-group">
                            <?php foreach ($buku as $b) { ?>
                              <a href="#" class="list-group-item">
                                <span class="badge"><?php if($b->status_buku==1){echo "Tersedia";} else{echo "Dipinjam";} ?></span>
                                <i class="glyphicon glyphiconuser"></i><?php echo $b->judul_buku; ?>
                              </a>
                            <?php } ?>
                          </div>
                          <div class="text-right">
                            <a style="color: #4d4d4d;" href="<?php echo base_url().'admin/buku' ?>">Lihat Semua Buku <i class="glyphicon glyphicon-arrow-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #2c2c2c;">
                          <h3 class="panel-title" style="font-size:18px;font-weight:bold; color: white;"><i class="glyphicon glyphicon-user o" style="width: 30px;"></i>  Anggota Terbaru</h3>
                        </div>
                            <div class="panel-body">
                              <div class="list-group">
                                <?php foreach ($anggota as $a) { ?>
                                  <a href="#" class="list-group-item">
                                    <span class="badge"><?php echo $a->gender; ?></span>
                                    <i class="glyphicon glyphiconuser"></i><?php echo $a->nama_anggota; ?>
                                  </a>
                                <?php } ?>
                              </div>
                              <div class="text-right">
                                <a style="color: #4d4d4d;" href="<?php echo base_url().'admin/anggota' ?>"> Lihat Semua Anggota <i class="glyphicon glyphicon-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-5">
                          <div class="panel panel-default" style="background-color: #2c2c2c; height: 35px; padding-top: 3px;">
                            <h3 class="panel-title" style="font-size:18px;font-weight:bold; color: white; margin-left: 10px;"><i style="margin-right: 10px;" class="glyphicon glyphicon-sort"></i> Peminjaman Terakhir</h3>
                          
                            <div class="panel-body" style="background-color: white;">
                              <div class="table-responsive">
                                <table class="tabel table-bordered tablehover table-striped">
                                  <thead>
                                    <tr style="background-color: #2c2c2c; color: white;">
                                      <th style="width: 120px;"> Tgl. Transaksi </th>
                                      <th style="width: 120px;"> Tgl. Pinjam </th>
                                      <th style="width: 120px;"> Tgl. Kembali </th>
                                      <th style="width: 120px;"> Total Denda </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    foreach ($transaksi as $p) {
                                      ?>
                                      <tr>
                                        <td><?php echo date('d/m/Y',strtotime($p->tgl_pencatatan)); ?></td>
                                        <td><?php echo date('d/m/Y',strtotime($p->tgl_pinjam)); ?></td>
                                        <td><?php echo date('d/m/Y',strtotime($p->tgl_kembali)); ?></td>
                                        <td><?php echo "Rp. ".number_format($p->total_denda)." ,-"; ?></td>
                                      </tr>
                                    <?php } ?>
                                  </tbody>
                                </table>
                              </div>
                              <br><br>
                                    <div class="text-right">
                                      <a style="color: #4d4d4d;" href="<?php echo base_url().'admin/transaksi' ?>">Lihat Semua Transaksi <i class="glyphicon glyphicon-arrow-right"></i></a>
                                    </div>
                                  </div>
                                </div>
                                </div>

                                    <!-- /.row -->
                                  </div>
