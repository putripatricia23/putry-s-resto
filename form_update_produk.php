<?php include_once('header.php'); ?>
    <?php include_once('dbkonek.php'); ?>
    <?php 
    $data = $db->query("SELECT * FROM produk where id='$_GET[id]'");
    $produk= $data->fetch();
    ?>
    
    <section id="service" class="services-area pt-125 pb-130 mt-5">
    <main>
        <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Edit Data</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12 mt-4">
                            <!-- masukin form disini -->
                            <form method="POST" action="update_produk.php">
                                <div class="form-group row">
                                    <label for="kode" class="col-4 col-form-label">Kode</label> 
                                    <div class="col-8">
                                    <input id="kode" name="kode" type="text" class="form-control" value="<?= $produk['kode'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama</label> 
                                    <div class="col-8">
                                    <input id="nama" name="nama" type="text" class="form-control" value="<?= $produk['nama'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
                                    <div class="col-8">
                                    <input id="harga_jual" name="harga_jual" type="text" class="form-control" value="<?= $produk['harga_jual'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
                                    <div class="col-8">
                                    <input id="harga_beli" name="harga_beli" type="text" class="form-control" value="<?= $produk['harga_beli'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="stok" class="col-4 col-form-label">Stok</label> 
                                    <div class="col-8">
                                    <input id="stok" name="stok" type="text" class="form-control" value="<?= $produk['stok'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label> 
                                    <div class="col-8">
                                    <input id="min_stok" name="min_stok" type="text" class="form-control" value="<?= $produk['min_stok'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
                                    <div class="col-8">
                                    <input id="deskripsi" name="deskripsi" type="text" class="form-control" value="<?= $produk['deskripsi'] ?>">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="jenis_produk_id" class="col-4 col-form-label">ID jenis Produk</label> 
                                    <div class="col-8">
                                    <input id="jenis_produk_id" name="jenis_produk_id" type="text" class="form-control" value="<?= $produk['jenis_produk_id'] ?>">
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <input type="hidden" name="id" value="<?=$_GET['id']?>">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>  
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        </div>
    </main>
    </section>
    
    <!--====== FOOTER PART START ======-->
    
    <?php include_once('footer.php'); ?>