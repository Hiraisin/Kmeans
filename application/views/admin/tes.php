
<div class="card mb-3">
    <p></p>
        <div class="card-header">
            <i class="fa fa-table"> <?php echo $sub; ?> &nbsp;&nbsp;&nbsp;</i> 
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-admin" id="table_data" width="100%" cellspacing="0">
              <thead>
                <tr align="center">
                  <th rowspan="2">Kecamatan</th>
                  <th rowspan="2">Luas Tanam</th>
                  <th rowspan="2">Luas Panen</th>
                  <th rowspan="2">Produksi</th>
                  <th rowspan="2">Tahun</th>
                  <th colspan="3">Centroid 1</th>
                  <th colspan="3">Centroid 2</th>
                  <th colspan="3">Centroid 3</th>
                  <th rowspan="2">C1</th>
                  <th rowspan="2">C2</th>
                  <th rowspan="2">C3</th>
                </tr>
                <tr align="center">
                    <?php
                    foreach ($random->result_array() as $ran)
                    {?>
                    <th><?php echo $ran->tanam; ?></th><th><?php echo $ran->panen; ?></th><th><?php echo $ran->produksi; ?></th>
                    <?php } ?>
                    
                </tr>
              </thead>
              <tfoot>
                <tr align="center">
                  <th rowspan="2">Kecamatan</th>
                  <th rowspan="2">Luas Tanam</th>
                  <th rowspan="2">Luas Panen</th>
                  <th rowspan="2">Produksi</th>
                  <th rowspan="2">Tahun</th>
                  <th colspan="3">Centroid 1</th>
                  <th colspan="3">Centroid 1</th>
                  <th colspan="3">Centroid 1</th>
                  <th rowspan="2">C1</th>
                  <th rowspan="2">C2</th>
                  <th rowspan="2">C3</th>
                </tr>                
              </tfoot>
              <tbody>
                <?php 
                $c1a = 81;
              $c1b = 65;
              $c1c = 65;
              
              $c2a = 65;
              $c2b = 81;
              $c2c = 65;
              
              $c3a = 65;
              $c3b = 65;
              $c3c = 81;
              
              $c1a_b = "";
              $c1b_b = "";
              $c1c_b = "";
              
              $c2a_b = "";
              $c2b_b = "";
              $c2c_b = "";
              
              $c3a_b = "";
              $c3b_b = "";
              $c3c_b = "";
              
              $hc1=0;
              $hc2=0;
              $hc3=0;
              
              $no=0;
              $arr_c1 = array();
              $arr_c2 = array();
              $arr_c3 = array();
              
              $arr_c1_temp = array();
              $arr_c2_temp = array();
              $arr_c3_temp = array();
              
                foreach ($data->result() as $row)
                {?>
                  <tr align="center">
                    <td><?php echo $row->kecamatan; ?></td>
                    <td><?php echo $row->tanam; ?></td>
                    <td><?php echo $row->panen; ?></td>
                    <td><?php echo $row->produksi; ?></td>
                    <td><?php echo $row->tahun; ?></td>                  
                    <td colspan="3">1</td>
                    <td colspan="3">1</td>
                    <td colspan="3">1</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                <?php } ?>
                        
                      
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>