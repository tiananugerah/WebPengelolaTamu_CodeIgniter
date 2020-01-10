    <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Surat Kaluar</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kop Surat</th>
                  <th>Alamat</th>
                  <th>Kop Surat Masuk</th>
                  <th>Nama Pegawai</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $url = file_get_contents(site_url('api/suratKeluar'));
                $json = json_decode($url,true);
                $no=1;
                foreach ($json['suratKeluar'] as $data){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['kop_surat'];?></td>
                  <td><?php echo $data['tgl_surat'];?></td>
                  <td><?php echo $data['kop_surat'];?></td>
                  <td><?php echo $data['nama_pegawai'];?></td>
                  <td><?php echo $data['keterangan'];?></td>
                </tr>
                <?php };?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

