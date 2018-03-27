<div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> <?php echo $sub; ?> &nbsp;&nbsp;&nbsp;<a href="<?php echo base_url();?>index.php/<?php echo $hal;?>/<?php echo $input;?>"><button class="btn btn-sm btn-primary">Tambah Data</button></a></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kecamatan</th>
                  <th>Luas Tanam</th>
                  <th>Luas Panen</th>
                  <th>Produksi</th>
                  <th>Tahun</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Kecamatan</th>
                  <th>Luas Tanam</th>
                  <th>Luas Panen</th>
                  <th>Produksi</th>
                  <th>Tahun</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                <?php 
                foreach ($data->result() as $row)
                {?>
                  <tr>
                    <td><?php echo $row->kecamatan; ?></td>
                    <td><?php echo $row->tanam; ?></td>
                    <td><?php echo $row->panen; ?></td>
                    <td><?php echo $row->produksi; ?></td>
                    <td><?php echo $row->tahun; ?></td>                  
                    <td>
                        <a href="<?php echo base_url();?>index.php/<?php echo $hal;?>/edit/<?php echo $row->kd_data; ?>"><button class="btn btn-outline-primary">Edit</button></a>
                        <a href="<?php echo base_url();?>index.php/<?php echo $hal;?>/delete/<?php echo $row->kd_data; ?>"><button class="btn btn-danger">Hapus</button></a>
                  </tr>
                <?php } ?>
                        
                      
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"><!-- belum diisi--></div>
      </div>