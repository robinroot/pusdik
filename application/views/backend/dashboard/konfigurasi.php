<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><?php echo $title ?></h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right small">
                    <li class=""><a href="<?php echo site_url('/dashboard')?>">Dashboard</a></li>
                    <li class="active"><?php echo $title ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<p></p>
<form action="<?php echo base_url('dashboard/update_configure') ?>" method="post">

<input type="hidden" name="id_konfigurasi" value="1">

<div class="col-md-6">
	<h3>Basic information:</h3><hr>
    <div class="form-group">
    <label>Company name</label>
    <input type="text" name="namaweb" placeholder="Nama organisasi/perusahaan" value="<?php echo $configure->namaweb; ?>" required class="form-control">
    </div>
    
    <div class="form-group">
    <label>Company tagline/motto</label>
    <input type="text" name="tagline" placeholder="Company tagline/motto" value="<?php echo $configure->tagline; ?>" class="form-control">
    </div>
    
  
    <div class="form-group">
    <label>Website address</label>
    <input type="url" name="website" placeholder="" value="<?php echo $configure->website; ?>" class="form-control">
    </div>
    
    <div class="form-group">
    <label>Official email</label>
    <input type="email" name="email" placeholder="youremail@address.com" value="<?php echo $configure->email; ?>" class="form-control" required>
    </div>
    
     <div class="form-group">
    <label>Address</label>
    <textarea name="alamat" rows="3" class="form-control" placeholder="Alamat perusahaan/organisasi"><?php echo $configure->alamat; ?></textarea>
    </div>
    
     <div class="form-group">
    <label>Phone number</label>
    <input type="text" name="telepon" placeholder="021-000000" value="<?php echo $configure->telepon; ?>" class="form-control">
    </div>
    
      <div class="form-group">
    <label>Fax</label>
    <input type="text" name="fax" placeholder="021-000000" value="<?php echo $configure->fax; ?>" class="form-control">
    </div>
    
     <div class="form-group">
    <label>Mobile / Celluler</label>
    <input type="text" name="hp" placeholder="021-000000" value="<?php echo $configure->hp; ?>" class="form-control">
    </div>
    
    <h3>Social network</h3><hr>
    
    <div class="form-group">
    <label>Facebook <i class="fa fa-facebook"></i></label>
    <input type="url" name="facebook" placeholder="http://facebook.com/namakamu" value="<?php echo $configure->facebook; ?>" class="form-control">
    </div>
    
    <div class="form-group">
    <label>Twitter <i class="fa fa-twitter"></i></label>
   <input type="url" name="twitter" placeholder="http://twitter.com/namakamu" value="<?php echo $configure->twitter; ?>" class="form-control">
    </div>
    
     <div class="form-group">
    <label>Instagram <i class="fa fa-instagram"></i></label>
   <input type="url" name="instagram" placeholder="http://instagram.com/namakamu" value="<?php echo $configure->instagram; ?>" class="form-control">
   <br/>
   <input type="submit" name="submit" value="Save Configuration" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-primary">
    </div>

    
</div>

<div class="col-md-6">
	<h3>Modul Search Engine Optimization</h3><hr>
	<div class="form-group">
    <label>Keywords (Keyword search for Google, Bing, etc)</label>
    <textarea name="keywords" rows="3" class="form-control" placeholder="Kata kunci / keywords"></textarea>
    </div>
    
    <div class="form-group">
    <label>Metatext</label>
    <textarea name="metatext" rows="5" class="form-control" placeholder="Kode metatext"></textarea>
    </div>
    
    <h3>Google Map</h3><hr>
    <div class="form-group">
    <label>Google Map</label>
    <textarea name="google_map" rows="5" class="form-control" placeholder="Kode dari Google Map"><?php echo $configure->google_map; ?></textarea>

    </div>
    
    <div class="form-group map">
    
    </div>
</div>


<p></p>

</form>

