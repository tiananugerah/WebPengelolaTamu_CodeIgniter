    <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Surat Masuk</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kop Surat</th>
                  <th>Tgl Surat</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th>Kode Pos</th>
                  <th>Nama Kegiatan</th>
                  <th>Tgl Masuk</th>
                  <th>Tgl Keluar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $url = file_get_contents(site_url('api/suratMasuk'));
                $json = json_decode($url,true);
                $no=1;
                foreach ($json['suratMasuk'] as $data){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['kop_surat'];?></td>
                  <td><?php echo $data['tgl_surat'];?></td>
                  <td><?php echo $data['alamat'];?></td>
                  <td><?php echo $data['kota'];?></td>
                  <td><?php echo $data['kode_pos'];?></td>
                  <td><?php echo $data['nama_kegiatan'];?></td>
                  <td><?php echo $data['tgl_msk_kegiatan'];?></td>
                  <td><?php echo $data['tgl_klr_kegiatan'];?></td>
                </tr>
                <?php };?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

