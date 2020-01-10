    <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Karyawan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table fa-table" id="dataTable" width="100%" cellspacing="0">
             <a style="float:right" class="btn btn-success btn-md" data-toggle="modal" data-target="#modalModal">+ Tambah</a>
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>NIP Lama</th>
                  <th>Nama Pegawai/th>
                  <th>Bagian</th>
                  <th>Gol</th>
                  <th>Lulusan</th>
                  <th>sekolah/Kampus</th>
                  <th>Jabatan</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $url = file_get_contents(site_url('api/data_pegawai'));
                $json = json_decode($url,true);
                $no=1;
                foreach ($json['data_pegawai'] as $data){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['nip'];?></td>
                  <td><?php echo $data['nip_lama'];?></td>
                  <td><?php echo $data['nama_pegawai'];?></td>
                  <td><?php echo $data['bagian'];?></td>
                  <td><?php echo $data['gol'];?></td>
                  <td><?php echo $data['lulusan'];?></td>
                  <td><?php echo $data['sekolah_kampus'];?></td>
                  <td><?php echo $data['jabatan_fungsional'];?></td>
                  <td><?php echo $data['status'];?></td>
                  <td>
                    <a href="#" class="btn btn-warning btn-md" data-toggle="modal" data-target="#Modalupdate><?php echo $data['nama_pegawai'];?>">Update.</a>
                    <a href="#" class="btn btn-danger btn-md" data-toggle="modal" data-target="#Modal><?php echo $data['nama_pegawai'];?>">Delete .</a>  
                        <!-- Delete Modal-->
                    <div class="modal fade" id="Modal><?php echo $data['nama_pegawai'];?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                            <a class="btn btn-danger btn-md" href="<?php echo site_url('Api/deletePegawai/'.$data['nip_lama']) ?>"> Yes</a>          
                          </div>
                        </div>
                      </div>
                    </div>
                            <!-- modal Modal-->
                    <div class="modal fade" id="Modalupdate><?php echo $data['nama_pegawai'];?>" tabindex="-1" role="dialog" aria-labelledby="modall" aria-hidden="true">
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
                                <form method="post" action="<?php echo site_url('Api/UpdatePegawai')?>">
                                  <fieldset>
                                    <div class="form-group">
                                        <label for="nip">NIP<span class="text-danger">*</span></label>
                                        <input type="text" name="nip" parsley-trigger="change" required
                                                               placeholder="NIP" value="<?php echo $data['nip'];?>" class="form-control" value="<?php echo $data['nip'];?>" id="nip">
                                    </div>
                                    <div class="form-group">
                                        <label for="nip_lama">NIP Lama<span class="text-danger">*</span></label>
                                        <input type="number" name="nip_lama" parsley-trigger="change" required
                                                               placeholder="NIP Lama" value="<?php echo $data['nip_lama'];?>" class="form-control" id="nip_lama">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pegawai">Nama Pegawai<span class="text-danger">*</span></label>
                                        <input type="text" name="nama_pegawai" parsley-trigger="change" required
                                                               placeholder="Nama Pegawai" value="<?php echo $data['nama_pegawai'];?>" class="form-control" id="nama_pegawai">
                                    </div>
                                    <div class="form-group">
                                        <label for="bagian">Bagian<span class="text-danger">*</span></label>
                                        <input type="text" name="bagian" parsley-trigger="change" required
                                                               placeholder="Bagian" value="<?php echo $data['bagian'];?>" class="form-control" id="bagian">
                                    </div>
                                    <div class="form-group">
                                        <label for="gol">Golongan<span class="text-danger">*</span></label>
                                        <input type="text" name="gol" parsley-trigger="change" required
                                                               placeholder="Golongan" value="<?php echo $data['gol'];?>" class="form-control" id="gol">
                                    </div>
                                    <div class="form-group">
                                        <label for="lulusan">Lulusan<span class="text-danger">*</span></label>
                                        <input type="text" name="lulusan" parsley-trigger="change" required
                                                               placeholder="Lulusan" value="<?php echo $data['lulusan'];?>" class="form-control" id="lulusan">
                                    </div>
                                    <div class="form-group">
                                        <label for="sekolah_kampus">Sekolah atau Kampus<span class="text-danger">*</span></label>
                                        <input type="text" name="sekolah_kampus" parsley-trigger="change" required
                                                               placeholder="Sekolah atau Kampus" value="<?php echo $data['sekolah_kampus'];?>" class="form-control" id="sekolah_kampus">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan_fungsional">Jabatan Fungsional<span class="text-danger">*</span></label>
                                        <input type="text" name="jabatan_fungsional" parsley-trigger="change" required
                                                               placeholder="Jabatan Fungsional" value="<?php echo $data['jabatan_fungsional'];?>" class="form-control" id="jabatan_fungsional">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status<span class="text-danger">*</span></label>
                                        <input type="text" name="status" parsley-trigger="change" required
                                                               placeholder="status" value="<?php echo $data['status'];?>" class="form-control" id="status">
                                    </div>
                                <input type="hidden" name="alert" id="alert" value="<?php echo $alert ?>">
                                  </fieldset>
                                </div>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal1">Cancel</button>
                            <button type="update" name="update" class="btn btn-success">Update</button>       
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>  
                  </td>
                </tr>
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
                            <form method="post" action="<?php echo site_url('Api/insertDataPegawai')?>">
                              <fieldset>
                                <div class="form-group">
                                    <label for="nip">NIP<span class="text-danger">*</span></label>
                                    <input type="text" name="nip" parsley-trigger="change" required
                                                           placeholder="NIP" class="form-control" id="nip">
                                </div>
                                <div class="form-group">
                                    <label for="nip_lama">NIP Lama<span class="text-danger">*</span></label>
                                    <input type="number" name="nip_lama" parsley-trigger="change" required
                                                           placeholder="NIP Lama" class="form-control" id="nip_lama">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pegawai">Nama Pegawai<span class="text-danger">*</span></label>
                                    <input type="text" name="nama_pegawai" parsley-trigger="change" required
                                                           placeholder="Nama Pegawai" class="form-control" id="nama_pegawai">
                                </div>
                                <div class="form-group">
                                    <label for="bagian">Bagian<span class="text-danger">*</span></label>
                                    <input type="text" name="bagian" parsley-trigger="change" required
                                                           placeholder="Bagian" class="form-control" id="bagian">
                                </div>
                                <div class="form-group">
                                    <label for="gol">Golongan<span class="text-danger">*</span></label>
                                    <input type="text" name="gol" parsley-trigger="change" required
                                                           placeholder="Golongan" class="form-control" id="gol">
                                </div>
                                <div class="form-group">
                                    <label for="lulusan">Lulusan<span class="text-danger">*</span></label>
                                    <input type="text" name="lulusan" parsley-trigger="change" required
                                                           placeholder="Lulusan" class="form-control" id="lulusan">
                                </div>
                                <div class="form-group">
                                    <label for="sekolah_kampus">Sekolah atau Kampus<span class="text-danger">*</span></label>
                                    <input type="text" name="sekolah_kampus" parsley-trigger="change" required
                                                           placeholder="Sekolah atau Kampus" class="form-control" id="sekolah_kampus">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan_fungsional">Jabatan Fungsional<span class="text-danger">*</span></label>
                                    <input type="text" name="jabatan_fungsional" parsley-trigger="change" required
                                                           placeholder="Jabatan Fungsional" class="form-control" id="jabatan_fungsional">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status<span class="text-danger">*</span></label>
                                    <input type="text" name="status" parsley-trigger="change" required
                                                           placeholder="status" class="form-control" id="status">
                                </div>
                                <input type="hidden" name="alert" id="alert" value="<?php echo $alert ?>">
                              </fieldset>
                            </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="insert" name="insert" class="btn btn-success">Tambah</button>       
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

