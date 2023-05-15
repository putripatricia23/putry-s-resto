
<?php include_once('header.php'); ?>
    <?php include_once('dbkonek.php'); ?>
    <?php 
    $data = $db->query("SELECT * FROM pesanan where id='$_GET[id]'");
    $pesanan= $data->fetch();
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
                            <form method="POST" action="update_pesanan.php">
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
                                    <div class="col-8">
                                    <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $pesanan['tanggal'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_pemesan" class="col-4 col-form-label">Nama</label> 
                                    <div class="col-8">
                                    <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="<?= $pesanan['nama_pemesan'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label> 
                                    <div class="col-8">
                                    <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" value="<?= $pesanan['alamat_pemesan'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-4 col-form-label">No Hp</label> 
                                    <div class="col-8">
                                    <input id="no_hp" name="no_hp" type="text" class="form-control" value="<?= $pesanan['no_hp'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label> 
                                    <div class="col-8">
                                    <input id="email" name="email" type="text" class="form-control" value="<?= $pesanan['email'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah</label> 
                                    <div class="col-8">
                                    <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control" value="<?= $pesanan['jumlah_pesanan'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
                                    <div class="col-8">
                                    <input id="deskripsi" name="deskripsi" type="text" class="form-control" value="<?= $pesanan['deskripsi'] ?>">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="produk_id" class="col-4 col-form-label">ID Produk</label> 
                                    <div class="col-8">
                                    <input id="produk_id" name="produk_id" type="text" class="form-control" value="<?= $pesanan['produk_id'] ?>">
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