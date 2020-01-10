    <!-- Example DataTables Card-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="fa fa-table" href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Peserta</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <a style="float:right" class="btn btn-success btn-md" data-toggle="modal" data-target="#modalModal">+ Tambah</a>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $url = file_get_contents(site_url('api/peserta'));
                $json = json_decode($url,true);
                $no=1;
                foreach ($json['peserta'] as $data){ 
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
                  <td>
                    <a href="#" class="btn btn-warning btn-md editbtn" data-toggle="modal" data-target="#Modalupdate<?php echo $data['nama_peserta'];?>">Update </a>|
                    <a href="#" class="btn btn-danger btn-md " data-toggle="modal" data-target="#Modal<?php echo $data['nama_peserta'];?>">Delete</a>
                  </td>
                </tr>
                
                                <!-- Delete Modal-->
                    <div class="modal fade" id="Modal<?php echo $data['nama_peserta'];?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                            <a class="btn btn-danger btn-md" href="<?php echo site_url('Api/deletePeserta/'.$data['nim_nis_ktp'])?>"> Yes</a>
                          </div>
                        </div>
                      </div>
                    </div>                    
                            <!-- modal Modal-->
                    <div class="modal fade" id="Modalupdate<?php echo $data['nama_peserta'];?>" tabindex="-1" role="dialog" aria-labelledby="modall" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header" >
                            <h5 class="modal-title" backgroun-color="red" id="modal">Ubah Data Apoteker</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>            
                            </button>
                          </div>
                      <div class="modal-body">
                            <!-- Form -->
                            <div class="form-style-5">
                            <form method="post" action="<?php echo site_url('Api/updateDataPeserta/'); ?>">
                              <fieldset>
                                <div class="form-group">
                                    <label for="nim_nis_ktp">NIM/NIS/KTP<span class="text-danger">*</span></label>
                                    <input type="number" name="nim_nis_ktp" parsley-trigger="change" required
                                                           placeholder="NIM/NIS/KTP" value="<?php echo $data['nim_nis_ktp'];?>" class="form-control" id="nim_nis_ktp">
                                </div>
                                <div class="form-group">
                                    <label for="nama_peserta">Nama Peserta<span class="text-danger">*</span></label>
                                    <input type="text" name="nama_peserta" parsley-trigger="change" required
                                                           placeholder="Nama Peserta" value="<?php echo $data['nama_peserta'];?>" class="form-control" id="nama_peserta">
                                </div>
                                <div class="form-group">
                                    <label for="kelas_semester">Kelas/Semester<span class="text-danger">*</span></label>
                                    <input type="text" name="kelas_semester" parsley-trigger="change" required
                                                           placeholder="Kelas/Semester" value="<?php echo $data['kelas_semester'];?>" class="form-control" id="kelas_semester">
                                </div>
                                <div class="form-group">
                                    <label for="institusi_sekolah">Institusi/Sekolahan<span class="text-danger">*</span></label>
                                    <input type="text" name="institusi_sekolah" parsley-trigger="change" required
                                                           placeholder="Institusi/Sekolahan" value="<?php echo $data['institusi_sekolah'];?>" class="form-control" id="institusi_sekolah">
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan<span class="text-danger">*</span></label>
                                    <input type="text" name="jurusan" parsley-trigger="change" required
                                                           placeholder="Jurusan" value="<?php echo $data['jurusan'];?>" class="form-control" id="jurusan">
                                </div>
                                 <div class="form-group">
                                  <label for="pembimbing">Pembimbing</label>
                                  <select class="form-control" name="pembimbing" value="<?php echo $data['keterangan'];?>" parsley-trigger="change" required
                                                           placeholder="pembimbing" id="pembimbing">

                                    <?php
                                    $url = file_get_contents(site_url('api/kegiatan'));
                                    $json = json_decode($url,true);
                                    $no=1;
                                    foreach ($json['kegiatan'] as $key){
                                    ?>
                                    <option name="<?php echo $key['id_kegiatan'];?>" id="<?php echo $key['id_kegiatan'];?>"><?php echo $key['nama_kegiatan'];?></option>  
                                    <?php };?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="pembimbing">Pembimbing</label>
                                  <select class="form-control" name="pembimbing" value="<?php echo $data['nama_pegawai'];?>" parsley-trigger="change" required
                                                           placeholder="pembimbing" id="pembimbing">

                                    <?php
                                    $url = file_get_contents(site_url('api/data_pegawai'));
                                    $json = json_decode($url,true);
                                    $no=1;
                                    foreach ($json['data_pegawai'] as $key){
                                    ?>
                                    <option name="<?php echo $key['nip'];?>" id="<?php echo $key['nip'];?>"><?php echo $key['nama_pegawai'];?></option>  
                                    <?php };?>
                                  </select>
                                </div>
                      </div>
                                <input type="hidden" name="alert" id="alert" value="<?php echo $alert ?>">
                      </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal1">Cancel</button>
                            <button type="update" name="update" class="btn btn-success">Update</button>       
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>  
                <?php };?> 

                        <!-- modal Modal-->
                <div class="modal fade" id="modalModal" tabindex="-1" role="dialog" aria-labelledby="modalModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header" >
                        <h5 class="modal-title" backgroun-color="red" id="modalModalLabel">Isikan Data</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>            </button>
                      </div>
                      <div class="modal-body">
                            <!-- Form -->
                            <div class="form-style-5">
                            <form method="post" action="<?php echo site_url('Api/insertDataPeserta/'); ?>">
                              <fieldset>
                                <div class="form-group">
                                    <label for="nim_nis_ktp">NIM/NIS/KTP<span class="text-danger">*</span></label>
                                    <input type="number" name="nim_nis_ktp" parsley-trigger="change" required
                                                           placeholder="NIM/NIS/KTP" class="form-control" id="nim_nis_ktp">
                                </div>
                                <div class="form-group">
                                    <label for="nama_peserta">Nama Peserta<span class="text-danger">*</span></label>
                                    <input type="text" name="nama_peserta" parsley-trigger="change" required
                                                           placeholder="Nama Peserta" class="form-control" id="nama_peserta">
                                </div>
                                <div class="form-group">
                                    <label for="kelas_semester">Kelas/Semester<span class="text-danger">*</span></label>
                                    <input type="text" name="kelas_semester" parsley-trigger="change" required
                                                           placeholder="Kelas/Semester" class="form-control" id="kelas_semester">
                                </div>
                                <div class="form-group">
                                    <label for="institusi_sekolah">Institusi/Sekolahan<span class="text-danger">*</span></label>
                                    <input type="text" name="institusi_sekolah" parsley-trigger="change" required
                                                           placeholder="Institusi/Sekolahan" class="form-control" id="institusi_sekolah">
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan<span class="text-danger">*</span></label>
                                    <input type="text" name="jurusan" parsley-trigger="change" required
                                                           placeholder="Jurusan" class="form-control" id="jurusan">
                                </div>
                                 <div class="form-group">
                                  <label for="pembimbing">Keterangan</label>
                                  <select class="form-control" name="keterangan" value="<?php echo $key['id_kegiatan'];?>" parsley-trigger="change" required
                                                           placeholder="keterangan" id="keterangan">

                                    <?php
                                    $url = file_get_contents(site_url('api/kegiatan'));
                                    $json = json_decode($url,true);
                                    $no=1;
                                    foreach ($json['kegiatan'] as $key){
                                    ?>
                                    <option class="<?php echo $key['id_kegiatan'];?>" value="<?php echo $key['id_kegiatan'];?>"><?php echo $key['nama_kegiatan'];?></option>  
                                    <?php };?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="pembimbing">Pembimbing</label>
                                  <select class="form-control" name="pembimbing" parsley-trigger="change" required
                                                           placeholder="pembimbing" id="pembimbing">

                                    <?php
                                    $url = file_get_contents(site_url('api/data_pegawai'));
                                    $json = json_decode($url,true);
                                    $no=1;
                                    foreach ($json['data_pegawai'] as $key){
                                    ?>
                                    <option class="<?php echo $key['nip'];?>" value="<?php echo $key['nip'];?>"><?php echo $key['nama_pegawai'];?></option>  
                                    <?php };?>
                                  </select>
                                </div>
                                <input type="hidden" name="alert" id="alert" value="<?php echo $alert ?>">
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="insert" name="insert" class="btn btn-success">Simpan</button>       
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </tbody>
            </table>
          </div>
        </div>
      </div>

