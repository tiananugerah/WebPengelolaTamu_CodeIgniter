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
                  <th>Pembimbing</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $url = file_get_contents(site_url('api/peserta_nip/'.$_SESSION['username']));
                $json = json_decode($url,true);
                $no=1;
                foreach ($json['data_peserta'] as $data){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['nim_nis_ktp'];?></td>
                  <td><?php echo $data['nama_peserta'];?></td>
                  <td><?php echo $data['kelas_semester'];?></td>
                  <td><?php echo $data['institusi_sekolah'];?></td>
                  <td><?php echo $data['jurusan'];?></td>
                  <td><?php echo $data['keterangan'];?></td>
                  <td><?php echo $data['pembimbing'];?></td>
                  <td>
                    <a href="#"class="btn btn-danger btn-md" data-toggle="modal" data-target="#Modal">Delete</a>
                  <!-- Delete Modal-->
                    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header" >
                            <h5 class="modal-title" backgroun-color="red" id="odalLabel">Warning</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>            </button>
                          </div>
                          <div class="modal-body">Yakin Akan Menghapus Data Ini ?</div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger btn-md" href="<?php echo site_url('Api/deletePeserta/'.$data['nim_nis_ktp']) ?>"> Yes</a>          </div>
                        </div>
                      </div>
                    </div>    
                  </td>
                </tr>
                <?php };?>
              </tbody>

            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

