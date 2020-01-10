    <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Peserta</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIM/NIS/KTP</th>
                  <th>Nama Peserta</th>
                  <th>Kelas/Semester</th>
                  <th>Sekolah/Institusi</th>
                  <th>Jurusan</th>
                  <th>Keterangan</th>
                  <th>TGL Masuk</th>
                  <th>TGL Keluar</th>
                  <th>Pembimbing</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $url = file_get_contents(site_url('api/pesertaTdkTerima/'));
                $json = json_decode($url,true);
                $no=1;
                foreach ($json['pesertaTdkTerima'] as $data){ 
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['nim_nis_ktp'];?></td>
                  <td><?php echo $data['nama_peserta'];?></td>
                  <td><?php echo $data['kelas_semester'];?></td>
                  <td><?php echo $data['institusi_sekolah'];?></td>
                  <td><?php echo $data['jurusan'];?></td>
                  <td><?php echo $data['keterangan'];?></td>
                  <td><?php echo $data['tgl_msk_kegiatan'];?></td>
                  <td><?php echo $data['tgl_klr_kegiatan'];?></td>
                  <td><?php echo $data['nama_pegawai'];?></td>
                </tr>
                <?php };?>
              </tbody>
              <label for="total">Total : <?php echo $no-1 ;?>
              </label>
            </div>
            </table>
          </div>
        </div>
      </div>

