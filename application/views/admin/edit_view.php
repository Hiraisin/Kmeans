<div class="container margin-b50 margin-t50">
<div class="col-md-6 col-md-offset-3">
    <form method="POST" action="<?php echo base_url();?>index.php/<?php echo $hal;?>/<?php echo $update;?>" class="form-horizontal">
        
    <div class="form-group row">
      <label for="kecamatan" class="col-2 col-form-label">Kecamatan</label>
      <div class="col-10">          
          <input class="form-control" required name="kode" id="kode" value="<?php echo $kode;?>" type="hidden">
          <input class="form-control" required name="kecamatan" id="kecamatan" value="<?php echo $kecamatan;?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="tanam" class="col-2 col-form-label">Luas Tanam</label>
      <div class="col-10">
          <input class="form-control" required name="tanam" id="tanam" value="<?php echo $tanam;?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="panen" class="col-2 col-form-label">Luas Panen</label>
      <div class="col-10">
          <input class="form-control" required name="panen" id="panen" value="<?php echo $panen;?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="produksi" class="col-2 col-form-label">Produksi</label>
      <div class="col-10">
          <input class="form-control" required name="produksi" id="produksi" value="<?php echo $produksi;?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="tahun" class="col-2 col-form-label">Tahun</label>
      <div class="col-10">
          <input class="form-control" required name="tahun" type="year" id="tahun" value="<?php echo $tahun;?>">
      </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4">
            <button type="submit" class="btn btn-block btn-primary">Simpan</button>
        </div>
    </div>
    </form>
</div>
</div>