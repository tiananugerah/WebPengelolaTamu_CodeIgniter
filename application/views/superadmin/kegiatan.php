    <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Surat Masuk</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <a style="float:right" class="btn btn-success btn-md" data-toggle="modal" data-target="#modalModal">+ Tambah</a>
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kegiatan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $url = file_get_contents(site_url('api/kegiatan'));
                $json = json_decode($url,true);
                $no=1;
                foreach ($json['kegiatan'] as $data){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['nama_kegiatan'];?></td>
                  <td>
                    <a href="#" class="btn btn-warning btn-md editbtn" data-toggle="modal" data-target="#ModalUpdate<?php echo $data['nama_kegiatan'];?>">Update </a>|
                    <a href="#" class="btn btn-danger btn-md " data-toggle="modal" data-target="#Modal<?php echo $data['nama_kegiatan'];?>">Delete</a>
                                <!-- Delete Modal-->
                    <div class="modal fade" id="Modal<?php echo $data['nama_kegiatan'];?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                            <a class="btn btn-danger btn-md" href="<?php echo site_url('Api/deleteKegiatan/'.$data['id_kegiatan'])?>"> Yes</a>          </div>
                        </div>
                      </div>
                    </div>
                            <!-- modal Modal-->
                    <div class="modal fade" id="ModalUpdate<?php echo $data['nama_kegiatan'];?>" tabindex="-1" role="dialog" aria-labelledby="modalModalLabel" aria-hidden="true">
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
                                <form method="post" action="<?php echo site_url('Api/updateKegiatan/')?>">
                                  <fieldset>
                                    <input type="hidden" name="id_kegiatan" id="id_kegiatan" value="<?php echo $data['id_kegiatan'];?>">
                                    <div class="form-group">
                                        <label for="nama_kegiatan">Nama Kegiatan<span class="text-danger">*</span></label>
                                        <input type="text" name="nama_kegiatan" parsley-trigger="change" required
                                                               placeholder="Nama Kegiatan" value="<?php echo $data['nama_kegiatan'];?>" class="form-control" id="nama_kegiatan">
                                    </div>
                                <input type="hidden" name="alert" id="alert" value="<?php echo $alert ?>">
                                  </fieldset>
                                </div>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="insert" name="insert" class="btn btn-warning">Update</button>       
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
                            <form method="post" action="<?php echo site_url('Api/insertKegiatan')?>">
                              <fieldset>
                                <div class="form-group">
                                    <label for="nama_kegiatan">Nama Kegiatan<span class="text-danger">*</span></label>
                                    <input type="text" name="nama_kegiatan" parsley-trigger="change" required
                                                           placeholder="Nama Kegiatan" class="form-control" id="nama_kegiatan">
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